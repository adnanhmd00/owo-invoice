<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\ProductExcel;
use App\Models\SaleBill;
use App\Models\InvoiceId;
use App\Models\Product;
use Str;
use Session;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if($row['month'] != '' || $row['date'] != '' || $row['customer_address_billing'] != '' || $row['mobile_no'] != '' ){        
            $i = 1;
            $product_excel = new ProductExcel();
            $sale_bill = new SaleBill();
            $product_excel->added_by = Auth::user()->id;
            $sale_bill->added_by = Auth::user()->id;
            $product_excel->date = $row['date'];
            $sale_bill->date = $row['date'];
            $product_excel->month = $row['month'];
            $sale_bill->month = $row['month'];
            $product_excel->email_id = rtrim($row['email_id']);
            $sale_bill->email_id = rtrim($row['email_id']);
            $product_excel->customer_name_billing = rtrim($row['customer_name_billing']);
            $sale_bill->customer_name_billing = rtrim($row['customer_name_billing']);
            isset($row['gst_no']) ? rtrim($row['gst_no']) : '';
            $product_excel->gst_no = isset($row['gst_no']) ? rtrim($row['gst_no']) : '';
            $sale_bill->gst_no = isset($row['gst_no']) ? rtrim($row['gst_no']) : '';
            $product_excel->customer_address_billing = rtrim($row['customer_address_billing']);
            $sale_bill->customer_address_billing = rtrim($row['customer_address_billing']);
            // $product_excel->city_billing = $row['city_billing'];
            $product_excel->state_billing = rtrim($row['state_billing']);
            $sale_bill->state_billing = rtrim($row['state_billing']);
            $product_excel->state_code_billing = rtrim($row['state_code_billing']);
            $sale_bill->state_code_billing = rtrim($row['state_code_billing']);
            $product_excel->customer_name_shipping = rtrim($row['customer_name_shipping']);
            $sale_bill->customer_name_shipping = rtrim($row['customer_name_shipping']);
            $product_excel->customer_address_shipping = rtrim($row['customer_address_shipping']);
            $sale_bill->customer_address_shipping = rtrim($row['customer_address_shipping']);
            // $product_excel->city_shipping = $row['city_shipping'];
            $product_excel->state_shipping = rtrim($row['state_shipping']);
            $sale_bill->state_shipping = rtrim($row['state_shipping']);
            $product_excel->state_code_shipping = rtrim($row['state_code_shipping']);
            $sale_bill->state_code_shipping = rtrim($row['state_code_shipping']);
            $product_excel->mobile_no = rtrim($row['mobile_no']);
            $sale_bill->mobile_no = rtrim($row['mobile_no']);
           
            // $product_excel->size = rtrim($row['size']);
            $product_excel->attribute = rtrim(Str::lower($row['attribute']));
            $sale_bill->attribute = rtrim(Str::lower($row['attribute']));
            $product_excel->price = rtrim($row['price']);
            $sale_bill->price = rtrim($row['price']);
            // $product_excel->pack_of = rtrim($row['pack_of']);
            // $product_excel->pack_name = rtrim($row['pack_name']);
            $product_excel->quantity = rtrim($row['quantity']);
            $sale_bill->quantity = rtrim($row['quantity']);
            $products = Product::all();
            foreach($products as $prod){
                if(rtrim($row['product_id']) == rtrim($prod->id)){
                    $product_excel->product_name = rtrim($prod->product_name);
                    $sale_bill->product_name = rtrim($prod->product_name);
                    $product_excel->hsn = rtrim($prod->hsn);
                    $sale_bill->hsn = rtrim($prod->hsn);
                    $product_excel->gst = rtrim($prod->gst);
                    $sale_bill->gst = rtrim($prod->gst);
                    if($prod->gst >= 28){
                        $single_price = $row['price'] * (100/(100 + $prod->gst + 12));
                    }else{
                        $single_price = $row['price'] * (100/(100 + $prod->gst));
                    }
                }
            }
            $product_excel->item_cost = round($single_price, 2);
            $sale_bill->item_cost = round($single_price, 2);
            // $gst = $single_price + ($single_price * (5/100));

            $sale_bill->admin_fssai = Auth::user()->fssai;
            $sale_bill->admin_gst = Auth::user()->gst;
            $sale_bill->admin_address = Auth::user()->address;
            $sale_bill->admin_city = Auth::user()->city;
            $sale_bill->admin_state_code = Auth::user()->state_code;
            $sale_bill->admin_state = Auth::user()->state;
            $product_excel->save();
            $sale_bill->save();
            $p_invoice = ProductExcel::where('mobile_no', rtrim($product_excel->mobile_no))->first();
            $invoice_ids = InvoiceId::where('user_id', Auth::user()->id)->first();
            // $invoice_ids = InvoiceId::first();
            if(!Session()->has('mob_number')){
                Session::put('mob_number', rtrim($product_excel->mobile_no));
                if($invoice_ids == NULL){
                    $invoice_ids = new InvoiceId;
                    $invoice_ids->invoice_id = $i;
                    $invoice_ids->save();
                }else{
                    $invoice_ids->invoice_id = $invoice_ids->invoice_id + $i;                
                    $invoice_ids->save();
                }
            }else{
                if(rtrim($row['mobile_no']) != Session::get('mob_number')){
                    Session::forget('mob_number');            
                    Session::put('mob_number', rtrim($row['mobile_no']));
                    $invoice_ids->invoice_id = $invoice_ids->invoice_id + $i;
                    $invoice_ids->save();
                }
            }
            if(date('m') < 04){
                $date = date('y')-1 .'-'. date('y');
            }else{
                $date = date('y').'-'.date('y', strtotime('+1 year'));
            }
            $product_excel->invoice = 'OWO'.'-'.$date.'-'.str_pad($invoice_ids->invoice_id, 4, '0', STR_PAD_LEFT);
            $sale_bill->invoice = 'OWO'.'-'.$date.'-'.str_pad($invoice_ids->invoice_id, 4, '0', STR_PAD_LEFT);
            $product_excel->gst_value = ($product_excel->item_cost * $product_excel->quantity) * $product_excel->gst/100;
            $sale_bill->gst_value = ($product_excel->item_cost * $product_excel->quantity) * $product_excel->gst/100;
            $product_excel->taxable_amount = ($product_excel->item_cost * $product_excel->quantity);
            $sale_bill->taxable_amount = ($product_excel->item_cost * $product_excel->quantity);
            $product_excel->save();
            $sale_bill->save();
        }
    }
}
