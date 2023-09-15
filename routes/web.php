<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page.home');
});

Route::get('/management', function () {
    return view('adminPage.dashboard');
});


// -------------------------------
// Admin panel CATEGORY CONTROLLER  
Route::prefix('management')->controller(categoryController::class)->group(function(){
    // view
    Route::get('/category','index')->name('category');
    // add
    Route::get('/add-category','create')->name('add.category');
    Route::post('/add-category','store')->name('store.category');
    // edit
    Route::get('/edit-category/{id}','edit')->name('edit.category');
    Route::put('/update-category/{id}','update')->name('update.category');
    // delete
    Route::delete('/category/delete/{id}','destroy')->name('delete.category');
});

// ------------------------------
// admin panel PRODUCT CONTROLLER
Route::prefix('management/product')->controller(productController::class)->group(function(){
    // view
    Route::get('/','index')->name('product');
    Route::get('/view/{id}','show')->name('show.product');
    // add
    Route::get('/add','create')->name('add.product');
    Route::post('/add','store')->name('store.product');
    // edit
    Route::get('/edit/{id}','edit')->name('edit.product');
    Route::put('/update/{id}','update')->name('update.product');
    // delete
    Route::delete('/delete/{id}','destroy')->name('delete.product');
});