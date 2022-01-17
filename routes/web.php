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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/sale-bill', [ProductController::class, 'saleBill'])->name('sale-bill');
Route::get('add-product', [ProductController::class, 'create'])->name('add-product');
Route::post('add-product', [ProductController::class, 'store'])->name('add-product');
Route::post('update-product/{id}', [ProductController::class, 'update'])->name('update-product');

Route::get('bulk-upload', [ProductController::class, 'fileImportExport'])->name('bulk-upload');
Route::post('bulk-excel-import', [ProductController::class, 'bulkExcelImport'])->name('bulk-excel-import');

// Route::get('pdfview',array('as'=>'pdfview','uses'=>[ProductController::class,'pdfview']));

Route::get('show-product-hsn', [ProductController::class, 'showHsn'])->name('showHsn');
Route::get('pdfview', [ProductController::class, 'pdfview'])->name('pdfview');
Route::get('view-invoice/{mobile_no}', [ProductController::class, 'showInvoice'])->name('view-invoice');
Route::get('view-sale-invoice/{invoice_no}', [ProductController::class, 'showSaleInvoice'])->name('view-sale-invoice');
Route::get('truncate-table', [ProductController::class, 'truncateTable'])->name('truncateTable');
Route::get('upload-gst-table', [ProductController::class, 'uploadGST'])->name('uploadGST');

Route::get('banks', [ProductController::class, 'showBanks'])->name('banks');
Route::get('add-bank-details', [ProductController::class, 'bankDetails'])->name('add-bank-details');
Route::post('add-bank-details', [ProductController::class, 'addBankDetails'])->name('add-bank-details');
Route::get('edit-bank-details/{id}', [ProductController::class, 'editBankDetails'])->name('edit-bank-details');
Route::post('update-bank-details/{id}', [ProductController::class, 'updateBankDetails'])->name('update-bank-details');
Route::post('bank-status/{id}', [ProductController::class, 'bankStatus'])->name('change-bank-status');

Route::post('search', [ProductController::class, 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
