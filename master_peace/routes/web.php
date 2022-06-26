<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/shop', function () {return view('shop');});
Route::get('/cart', function () {return view('cart');});
Route::get('/checkout', function () {return view('checkout');});
Route::get('/product-single', function () {return view('product-single');});
Route::get('/form', function () {return view('form');});
Route::get('/signup', function () {return view('signup');});
Route::get('/login', function () {return view('login');});


   




    






// Route::get('/admin', function () {
//     return view('Admin.index');
// });
// Route::get('/category', function () {
//     return view('Admin.category');
// })->name('category');

Route::resource('admin', AdminController::class);


