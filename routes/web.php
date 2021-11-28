<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;

use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/', function () {
   
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);

//admin routes
Route::get('/categories',[App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/sales',[App\Http\Controllers\SaleController::class, 'index']);
Route::get('/customers',[App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/admins',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/products',[App\Http\Controllers\ProductController::class, 'index']);
//contacts
Route::post('/contact',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/contacts',[App\Http\Controllers\ContactController::class, 'index'])->name('contact.all');
Route::get('/contact/delete/{id}',[App\Http\Controllers\ContactController::class, 'delete'])->name('contact.del');



//category
Route::get('category',[App\Http\Controllers\CategoryController::class, 'create']);
Route::post('create/category',[App\Http\Controllers\CategoryController::class, 'store'])->name('cat.store');
Route::get('category/edit/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('cat.edit');
Route::put('category/update/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('cat.update');
Route::get('category/delete/{id}',[App\Http\Controllers\CategoryController::class, 'delete'])->name('cat.del');

//product types
Route::get('/ptype',[App\Http\Controllers\TypeController::class, 'create']);
Route::post('create/ptype',[App\Http\Controllers\TypeController::class, 'store'])->name('ptype.store');
Route::get('ptype/edit/{id}',[App\Http\Controllers\TypeController::class, 'edit'])->name('ptype.edit');
Route::put('ptype/update/{id}',[App\Http\Controllers\TypeController::class, 'update'])->name('ptype.update');
Route::get('ptype/delete/{id}',[App\Http\Controllers\TypeController::class, 'delete'])->name('ptype.del');

//products

Route::get('product',[App\Http\Controllers\ProductController::class, 'create']);
Route::post('create/product',[App\Http\Controllers\ProductController::class, 'store'])->name('pro.store');
Route::get('product/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->name('pro.edit');
Route::put('product/update/{id}',[App\Http\Controllers\ProductController::class, 'update'])->name('pro.update');
Route::get('product/delete/{id}',[App\Http\Controllers\ProductController::class, 'delete'])->name('pro.del');
Route::get('product/{id}',[App\Http\Controllers\ProductController::class, 'show'])->name('pro.show');
Route::get('productsBycategory/{category}',[App\Http\Controllers\ProductController::class, 'showByCat'])->name('pro.showByCat');

//category
Route::get('customer',[App\Http\Controllers\CustomerController::class, 'create']);
Route::post('create/customer',[App\Http\Controllers\CustomerController::class, 'store'])->name('cus.store');
Route::get('customer/edit/{id}',[App\Http\Controllers\CustomerController::class, 'edit'])->name('cus.edit');
Route::put('customer/update/{id}',[App\Http\Controllers\CustomerController::class, 'update'])->name('cus.update');
Route::get('customer/delete/{id}',[App\Http\Controllers\CustomerController::class, 'delete'])->name('cus.del');

//Sales
Route::get('sale',[App\Http\Controllers\SaleController::class, 'create']);
Route::post('create/sale',[App\Http\Controllers\SaleController::class, 'store'])->name('sale.store');
Route::get('sale/edit/{id}',[App\Http\Controllers\SaleController::class, 'edit'])->name('sale.edit');
Route::put('sale/update/{id}',[App\Http\Controllers\SaleController::class, 'update'])->name('sale.update');
Route::get('sale/delete/{id}',[App\Http\Controllers\SaleController::class, 'delete'])->name('sale.del');
//admins
Route::get('admin',[App\Http\Controllers\AdminController::class, 'create']);
Route::post('create/admin',[App\Http\Controllers\AdminController::class, 'store'])->name('adm.store');
Route::get('admin/edit/{id}',[App\Http\Controllers\AdminController::class, 'edit'])->name('adm.edit');
Route::put('admin/update/{id}',[App\Http\Controllers\AdminController::class, 'update'])->name('adm.update');
Route::get('admin/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete'])->name('adm.del');




//setting and newletter route


Route::post('/news',[App\Http\Controllers\HomeController::class,'news'])->name('news');