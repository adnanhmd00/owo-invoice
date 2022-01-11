<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductExcel;
use App\Models\Product;
use App\Models\Tin;
use DB;
use Str;
use Session;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use App\Exports\ProductsExport;

class ProductController extends Controller
{
    public function index(){
        $products = ProductExcel::select('customer_name_billing', 'mobile_no')->distinct()->get();
        return view('welcome', compact('products'));
    }

    public function showHsn(){
        $products = Product::all();
        return view('show-product-hsn', compact('products'));
    }

    public function create(){
        $gstTable = Tin::all();
        return view('add-product-hsn', compact('gstTable'));
    }

    public function store(Request $request){
        try{
            $validate = $request->validate([
                'product_name' => 'required',
                'hsn' => 'required',
                'gst' => 'required'
            ]);
    
            $product = new Product;
            $product->product_name = rtrim($request->product_name);
            $product->hsn = rtrim($request->hsn);
            $product->gst = rtrim($request->gst);
    
            if($product->save()){
                return back()->with('success', 'Product Added Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', $e);
        }
    }

    public function update(Request $request, $id){
        try{
            $validate = $request->validate([
                'product_name' => 'required',
                'hsn' => 'required'
            ]);
    
            $product = Product::findOrFail($id);
            $product->product_name = rtrim($request->product_name);
            $product->hsn = rtrim($request->hsn);
            $product->gst = rtrim($request->gst);
    
            if($product->save()){
                return back()->with('success', 'Product Edited Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', $e);
        }
    }

    public function showInvoice($mobile_no){
        $items = ProductExcel::where('mobile_no', $mobile_no)->first();   
        $billing_state = Tin::where('state_code', $items->state_code_billing)->first();
        $shipping_state = Tin::where('state_code', $items->state_code_shipping)->first();
        return view('pdfview', compact('items', 'billing_state', 'shipping_state'));
    }
    
    public function pdfview(Request $request)
    {
        $items = ProductExcel::findOrFail(1);   
        // view()->share('products',$items);
        if($request->has('download')){
            $pdf = PDF::loadView('pdfview', compact('items'));
            $random = rand(10000, 99999);
            $str = Str::random(5);
            return $pdf->download($random.$str.'.pdf');
        }


        return view('pdfview', compact('items'));
    }

    public function fileImportExport(){
        if(session()->has('mob_number')){
            // Session::flush();
            Session::forget('mob_number'); 
        }
        return view('product-bulk-upload');
    }

    public function bulkExcelImport(Request $request){
        try{
            Excel::import(new ProductsImport, $request->file('file')->store('temp'));
            return back()->with('success', 'Excel Uploaded Successfully');
        }   
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong, Please Check Your Excel Format And Try Again');
        }
    }

    public function truncateTable(){
        DB::table('product_excels')->delete();
        return back()->with('success', 'Table Cleared Successfully');
    }

    public function uploadGST(){
        DB::unprepared(file_get_contents('tins.sql'));
        return back()->with('success', 'GST Table Added Successfully');
    }
}
