<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\ProductExcel;
use App\Models\InvoiceId;
use App\Models\Product;
use Str;
use Session;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if($row['month'] != '' || $row['customer_address_billing'] != '' || $row['mobile_no'] != '' ){        
            $i = 1;
            $product_excel = new ProductExcel();
            $product_excel->date = $row['month'];
            $product_excel->customer_name_billing = rtrim($row['customer_name_billing']);
            isset($row['gst_no']) ? rtrim($row['gst_no']) : '';
            $product_excel->gst_no = isset($row['gst_no']) ? rtrim($row['gst_no']) : '';
            $product_excel->customer_address_billing = rtrim($row['customer_address_billing']);
            // $product_excel->city_billing = $row['city_billing'];
            $product_excel->state_billing = rtrim($row['state_billing']);
            $product_excel->state_code_billing = rtrim($row['state_code_billing']);
            $product_excel->customer_name_shipping = rtrim($row['customer_name_shipping']);
            $product_excel->customer_address_shipping = rtrim($row['customer_address_shipping']);
            // $product_excel->city_shipping = $row['city_shipping'];
            $product_excel->state_shipping = rtrim($row['state_shipping']);
            $product_excel->state_code_shipping = rtrim($row['state_code_shipping']);
            $product_excel->mobile_no = rtrim($row['mobile_no']);
            $product_excel->product_name = rtrim($row['product_name']);
            // $product_excel->size = rtrim($row['size']);
            $product_excel->attribute = rtrim(Str::lower($row['attribute']));
            $product_excel->price = rtrim($row['price']);
            // $product_excel->pack_of = rtrim($row['pack_of']);
            // $product_excel->pack_name = rtrim($row['pack_name']);
            $product_excel->quantity = rtrim($row['quantity']);
            $products = Product::all();
            foreach($products as $prod){
                if(rtrim($row['product_name']) == rtrim($prod->product_name)){
                    $product_excel->hsn = rtrim($prod->hsn);
                    $product_excel->gst = rtrim($prod->gst);
                    $single_price = $row['price'] * (100/(100 + $prod->gst));
                }
            }
            $product_excel->item_cost = round($single_price, 2);
            // $gst = $single_price + ($single_price * (5/100));

            $product_excel->save();
            $p_invoice = ProductExcel::where('mobile_no', rtrim($product_excel->mobile_no))->first();
            $invoice_ids = InvoiceId::first();
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
            $product_excel->invoice = 'OWO-'.date('y').'-'.date('y', strtotime('+1 year')).'-'.str_pad($invoice_ids->invoice_id, 4, '0', STR_PAD_LEFT);
            $product_excel->gst_value = ($product_excel->item_cost * $product_excel->quantity) * $product_excel->gst/100;
            $product_excel->taxable_amount = ($product_excel->item_cost * $product_excel->quantity);
            $product_excel->save();
        }
    }
}
