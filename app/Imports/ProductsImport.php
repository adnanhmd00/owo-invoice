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
        $product = new ProductExcel();
        $product->date = $row['date'];
        $product->customer_name_billing = rtrim($row['customer_name_billing']);
        $product->gst_no = rtrim($row['gst_no']);
        $product->customer_address_billing = rtrim($row['customer_address_billing']);
        // $product->city_billing = $row['city_billing'];
        $product->state_billing = rtrim($row['state_billing']);
        $product->state_code_billing = rtrim($row['state_code_billing']);
        $product->customer_name_shipping = rtrim($row['customer_name_shipping']);
        $product->customer_address_shipping = rtrim($row['customer_address_shipping']);
        // $product->city_shipping = $row['city_shipping'];
        $product->state_shipping = rtrim($row['state_shipping']);
        $product->state_code_shipping = rtrim($row['state_code_shipping']);
        $product->mobile_no = rtrim($row['mobile_no']);
        $product->product_name = rtrim($row['product_name']);
        $product->size = rtrim($row['size']);
        $product->attribute = rtrim(Str::lower($row['attribute']));
        $product->price = rtrim($row['price']);
        $product->pack_of = rtrim($row['pack_of']);
        $product->pack_name = rtrim($row['pack_name']);
        $product->quantity = rtrim($row['quantity']);
         $products = Product::all();
        foreach($products as $prod){
            if(rtrim($row['product_name']) == rtrim($prod->product_name)){
                $product->hsn = rtrim($prod->hsn);
                $product->gst = rtrim($prod->gst);
                $single_price = $row['price'] * (100/(100 + $prod->gst));
            }
        }
        $product->item_cost = round($single_price, 2);
        // $gst = $single_price + ($single_price * (5/100));

        $product->save();
        $product->invoice = 'OWO-'.date('y').'-'.date('y', strtotime('+1 year')).'-'.str_pad($product->id, 4, '0', STR_PAD_LEFT);
        $product->save();
    }
}
