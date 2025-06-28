<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});


// All Category Contrller route
Route::controller(TestController::class)->group(function(){
    Route::get('/all/category','AllCateogry')->name('all.category');
    Route::get('/add/category','AddCateogry')->name('add.category');
    Route::post('/store/category','StoreCategory')->name('store.category');
    Route::get('/edit/category/{id}','EditCateogry')->name('edit.category');
    Route::post('/update/category','UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');
    // Route::get('/class','teastclass')->name('delete.category');
});


// All SubCategory Contrller route
Route::controller(TestController::class)->group(function(){
    Route::get('/all/subcategory','AllSubCateogry')->name('all.subcategory');
    Route::get('/add/subcategory','AddSubCateogry')->name('add.subcategory');
    Route::post('/store/subcategory','StoreSubCategory')->name('store.subcategory');
    Route::get('/edit/subcategory/{id}','EditSubCateogry')->name('edit.subcategory');
    Route::post('/update/subcategory','UpdateSubCategory')->name('update.subcategory');
    Route::get('/delete/subcategory/{id}','DeleteSubCategory')->name('delete.subcategory');
});

