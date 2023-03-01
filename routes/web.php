<?php

use App\Models\childAttribute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubAttributeController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\ChildAttributeController;

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
    return view('admin.signin');
});
Route::get('user', function () {
    return view('user.index');
});
Route::get('shop', function () {
    return view('user.shop.shop');
});
Route::get('AboutUs', function () {
    return view('user.AboutUs.aboutus');
});
Route::get('instashop', function () {
    return view('user.instashop.instashop');
});
Route::get('product_details', function () {
    return view('user.product_details.productdetails');
});

Route::get('signin', function () {
    return view('admin.signin');
});
Route::get('signup_form', [LoginController::class, 'index'])->name('signup');

Route::POST('reg_action', [LoginController::class, 'login_action'])->name('reg_action_form');

Route::get('signin_form', [LoginController::class, 'log'])->name('signin');

Route::POST('registered', [LoginController::class, 'register_action'])->name('registered_form');

Route::get('resetpw', function () {
    return view('admin.resetpw');
});

route::group(['middleware' => 'auth', "prefix" => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('product', ProductController::class);
    // Route::get('add_product', function () {
    //     return view('admin.product.add_product');
    // })->name('add_product');
    // Route::get('edit_product', function () {
    //     return view('admin.product.edit_product');
    // })->name('edit_product');

    Route::resource('category', CategoryController::class);
    Route::resource('childCategory', ChildCategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('addproduct',ProductController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
