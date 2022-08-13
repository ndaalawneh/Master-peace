<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;



use App\Models\Category;




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
    $categories = Category::all();
    return view('index' , compact('categories'));});


Route::get('/about', function () { return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/shop', function () {return view('shop');});
Route::get('/cart', function () {return view('cart');});
Route::get('/checkout', function () {return view('checkout');});
Route::get('/product-single', function () {return view('product-single');});
Route::get('/form', function () {return view('form');});
Route::get('/signup', function () {return view('signup');});
Route::get('/login', function () {return view('login');});


// all Admin routes//




Route::get('ad/category', [AdminController::class , 'category'])->name('admin.category');
Route::get('ad/category/add', [AdminController::class , 'categoryAdd'])->name('category.add');
Route::post('ad/category/store', [AdminController::class , 'categoryStore'])->name('category.store');
Route::get('ad/category/edit/{id}', [AdminController::class ,'categoryEdit'])->name('category.edit');
Route::patch('ad/category/update/{id}', [AdminController::class ,'categoryUpdate'])->name('category.update');
Route::delete('ad/category/delete/{id}', [AdminController::class ,'categoryDelete'])->name('category.delete');
//*** end of category routes****//



//***product routes***//
Route::get('ad/product', [AdminController::class , 'product'])->name('admin.product');
Route::get('ad/product/add', [AdminController::class , 'productAdd'])->name('product.add');
Route::post('ad/product/store', [AdminController::class , 'productStore'])->name('product.store');
Route::get('ad/product/edit/{id}', [AdminController::class ,'productEdit'])->name('product.edit');
Route::patch('ad/product/update/{id}', [AdminController::class ,'productUpdate'])->name('product.update');
Route::delete('ad/product/delete/{id}', [AdminController::class ,'productDelete'])->name('product.delete');
//***end of product routes***//

//***user routes***//
Route::resource('user', UserController::class);




//****order routes ***/
Route::resource('order',OrderController::class);



// frontend routes//
// Route::resource('category', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('view-category/{id}' ,[CategoryController::class, 'show']);
Route::get('category/{category_id}/{id}' ,[ProductController::class, 'show']);

// **************************** crate routes ****************************

Route::post('cart/add',[CartController::class , 'add'])->name('add_cart');
Route::post('cart/edit/{id}',[CartController::class , 'edit'])->name('edit_cart');
Route::post('cart/delete/{id}', [CartController::class ,CartController::class , 'delete'])->name('delete_cart');

// **************************** crate routes ****************************

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// admin middleware //
Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashbord', function () {
       return view('dashbord.index');
    });

Route::resource('admin', AdminController::class);
 });
