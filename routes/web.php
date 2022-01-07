<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ProductController::class, 'index']);
Route::get('add-product', [ProductController::class, 'create'])->name('add-product');
Route::post('add-product', [ProductController::class, 'store'])->name('add-product');
Route::post('update-product/{id}', [ProductController::class, 'update'])->name('update-product');


Route::get('bulk-upload', [ProductController::class, 'fileImportExport'])->name('bulk-upload');
Route::post('bulk-excel-import', [ProductController::class, 'bulkExcelImport'])->name('bulk-excel-import');


// Route::get('pdfview',array('as'=>'pdfview','uses'=>[ProductController::class,'pdfview']));

Route::get('show-product-hsn', [ProductController::class, 'showHsn'])->name('showHsn');
Route::get('pdfview', [ProductController::class, 'pdfview'])->name('pdfview');
Route::get('view-invoice/{mobile_no}', [ProductController::class, 'showInvoice'])->name('view-invoice');
Route::get('truncate-table', [ProductController::class, 'truncateTable'])->name('truncateTable');
Route::get('upload-gst-table', [ProductController::class, 'uploadGST'])->name('uploadGST');

