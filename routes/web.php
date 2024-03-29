<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('home');
    Route::get('/sale-bill', [ProductController::class, 'saleBill'])->name('sale-bill');
    Route::get('add-product', [ProductController::class, 'create'])->name('add-product');
    Route::post('add-product', [ProductController::class, 'store'])->name('add-product');
    Route::post('update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::get('all-invoice-id', [ProductController::class, 'allInvoiceIds'])->name('all-invoice-id');
    Route::get('change-invoice-id/{id}', [ProductController::class, 'changeInvoiceId'])->name('change-invoice-id');
    Route::post('change-invoice-id/{id}', [ProductController::class, 'changeInvoiceIdPost'])->name('change-invoice-id-post');

    Route::get('bulk-upload', [ProductController::class, 'fileImportExport'])->name('bulk-upload');
    Route::post('bulk-excel-import', [ProductController::class, 'bulkExcelImport'])->name('bulk-excel-import');
    // Route::get('export-data-in-excel', [ProductController::class, 'dataExport'])->name('data-export');
    Route::get('export-sales-data-in-excel', [ProductController::class, 'dataSalesExport'])->name('data-sales-export');
    Route::get('monthly-bill', [ProductController::class, 'monthlyBill'])->name('monthly-bill');
    Route::post('export-monthly-bill-in-excel', [ProductController::class, 'monthlyBillExport'])->name('monthly-bill-export');

    // Route::get('pdfview',array('as'=>'pdfview','uses'=>[ProductController::class,'pdfview']));

    Route::get('show-product-hsn', [ProductController::class, 'showHsn'])->name('showHsn');
    Route::get('pdfview', [ProductController::class, 'pdfview'])->name('pdfview');
    Route::get('view-invoice/{mobile_no}', [ProductController::class, 'showInvoice'])->name('view-invoice');
    Route::get('view-sale-invoice/{invoice_no}', [ProductController::class, 'showSaleInvoice'])->name('view-sale-invoice');
    Route::get('edit-invoice/{invoice_no}', [ProductController::class, 'editInvoice'])->name('edit-invoice');
    Route::post('edit-invoice/{invoice_no}', [ProductController::class, 'submitEditInvoice'])->name('edit-invoice');
    Route::get('edit-sale-invoice/{invoice_no}', [ProductController::class, 'editSaleInvoice'])->name('edit-sale-invoice');
    Route::post('edit-sale-invoice/{invoice_no}', [ProductController::class, 'submitSaleEditInvoice'])->name('edit-sale-invoice');
    Route::get('truncate-table', [ProductController::class, 'truncateTable'])->name('truncateTable');
    Route::get('upload-gst-table', [ProductController::class, 'uploadGST'])->name('uploadGST');

    Route::get('banks', [ProductController::class, 'showBanks'])->name('banks');
    Route::get('add-bank-details', [ProductController::class, 'bankDetails'])->name('add-bank-details');
    Route::post('add-bank-details', [ProductController::class, 'addBankDetails'])->name('add-bank-details');
    Route::get('edit-bank-details/{id}', [ProductController::class, 'editBankDetails'])->name('edit-bank-details');
    Route::post('update-bank-details/{id}', [ProductController::class, 'updateBankDetails'])->name('update-bank-details');
    Route::post('bank-status/{id}', [ProductController::class, 'bankStatus'])->name('change-bank-status');

    Route::post('search', [ProductController::class, 'search'])->name('search');
    Route::get('add-new-admin', [RegisterController::class, 'create'])->name('add-new-admin');
    Route::post('add-new-admin', [RegisterController::class, 'store'])->name('add-new-admin');
    Route::get('profile', [RegisterController::class, 'profile'])->name('profile');
    Route::post('update/{id}', [RegisterController::class, 'update'])->name('update');

    Route::get('send-mail/{mobile_no}', [ProductController::class, 'sendInvoice'])->name('send-mail');
    Route::get('send-sale-bill-mail/{invoice_no}', [ProductController::class, 'sendSaleInvoice'])->name('send-sale-bill-mail');

    // Route::get('send-mail', function () {
    //     $details = [
    //         'title' => 'Mail from ItSolutionStuff.com',
    //         'body' => 'This is for testing email using smtp'
    //     ];
       
    //     \Mail::to('addutech00@gmail.com')->send(new \App\Mail\SendInvoiceMail($details));
       
    //     dd("Email is Sent.");
    // });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
