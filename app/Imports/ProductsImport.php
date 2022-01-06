<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\ProductExcel;
use App\Models\Product;
use Str;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row['order_no']);
        $product = new ProductExcel();
        $product->order_no = $row['order_no'];
        $product->invoice = $row['invoice'];
        $product->order_status = $row['order_status'];
        $UNIX_DATE = ($row['order_date'] - 25569) * 86400;
        $product->order_date = gmdate("Y-m-d", $UNIX_DATE);
        // $product->order_date = $row['order_date'];
        $product->customer_note = $row['customer_note'];
        $product->first_name_billing = $row['first_name_billing'];
        $product->last_name_billing = $row['last_name_billing'];
        $product->company_billing = $row['company_billing'];
        $product->address_1_2_billing = $row['address_1_2_billing'];
        $product->city_billing = $row['city_billing'];
        $product->state_code_billing = $row['state_code_billing'];
        $product->postcode_billing = $row['postcode_billing'];
        $product->country_code_billing = $row['country_code_billing'];
        $product->email_billing = $row['email_billing'];
        $product->phone_billing = $row['phone_billing'];
        $product->first_name_shipping = $row['first_name_shipping'];
        $product->last_name_shipping = $row['last_name_shipping'];
        $product->address_1_2_shipping = $row['address_1_2_shipping'];
        $product->city_shipping = $row['city_shipping'];
        $product->state_code_shipping = $row['state_code_shipping'];
        $product->postcode_shipping = $row['postcode_shipping'];
        $product->country_code_shipping = $row['country_code_shipping'];
        $product->payment_method_title = $row['payment_method_title'];
        $product->cart_discount_amount = $row['cart_discount_amount'];
        $product->order_subtotal_amount = $row['order_subtotal_amount'];
        $product->shipping_method_title = $row['shipping_method_title'];
        $product->order_shipping_amount = $row['order_shipping_amount'];
        $product->order_refund_amount = $row['order_refund_amount'];
        $product->order_total_amount = $row['order_total_amount'];
        $product->order_total_tax_amount = $row['order_total_tax_amount'];
        $product->sku = $row['sku'];
        $product->item = $row['item'];
        $product->item_name = $row['item_name'];
        $product->quantity = $row['quantity'];
        $product->item_cost = $row['item_cost'];
        $product->coupon_code = $row['coupon_code'];
        $product->discount_amount = $row['discount_amount'];
        $product->discount_amount_tax = $row['discount_amount_tax'];
        $products = Product::all();
        foreach($products as $prod){
            if($row['item_name'] == $prod->product_name){
                $product->hsn = $prod->hsn;
                $product->gst = $prod->gst;
            }
        }
        $product->save();
    }
}
