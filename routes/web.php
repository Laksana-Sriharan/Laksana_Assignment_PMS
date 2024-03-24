<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\AdminController;

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


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/logout', function () {
    return view('auth.logout');
});

Route::get('/all/product', function () {
    return view('all.product');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('/auth/logout', [AdminController::class, 'AdminDestroy'])->name('auth.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('auth.logout.page');


Route::controller(AdminController::class)->group(function(){

    Route::get('/auth/register','AddAdmin')->name('add.admin');
    Route::post('/store/admin','StoreAdmin')->name('admin.store');

   
});


Route::controller(ProductController::class)->group(function(){

    Route::get('/all/product','AllProduct')->name('all.product');
    Route::get('/add/product','AddProduct')->name('add.product');
    Route::post('/store/product','StoreProduct')->name('product.store');
    Route::get('/edit/product/{id}','EditProduct')->name('edit.product');
    Route::post('/update/product','UpdateProduct')->name('product.update');
    Route::get('/delete/product/{id}','DeleteProduct')->name('delete.product');
    Route::get('/barcode/product/{id}','BarcodeProduct')->name('barcode.product');
    Route::get('/import/product','ImportProduct')->name('import.product');
    Route::get('/export','Export')->name('export');
    Route::post('/import','Import')->name('import');
    
});



