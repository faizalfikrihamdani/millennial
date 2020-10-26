<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('product', 'ProductController');
});
Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');
Route::get('/product', 'Ecommerce\FrontController@product')->name('front.product');
Route::get('/single-product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
Route::get('/product_list/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.categoryProduct');

Route::get('/terlaris', function () {
    return view('terlaris');
});

// Route::get('/index', function () {
//     return view('Ecommerce/index');
// });
Route::get('/Komunitas', function () {
    return view('Ecommerce/Komunitas');
});

Route::get('/kelas', function () {
    return view('Ecommerce/kelas');
});


Route::get('/Catagori', function () {
    return view('Ecommerce/Catagori');
});

Route::get('/terbaru', function () {
    return view('Ecommerce/terbaru');
});


Route::get('/terpopuler', function () {
    return view('Ecommerce/terpopuler');
});

// Route::get('/product_list', function () {
//     return view('Ecommerce/product_list');
// });


Route::get('/blog', function () {
    return view('Ecommerce/blog');
});

Route::get('/single-blog', function () {
    return view('Ecommerce/single-blog');
});
Route::get('/cart', function () {
    return view('Ecommerce/cart');
});

Route::get('/elements', function () {
    return view('Ecommerce/elements');
});

Route::get('/about', function () {
    return view('Ecommerce/about');
});

Route::get('/confirmation', function () {
    return view('Ecommerce/confirmation');
});

Route::get('/checkout', function () {
    return view('Ecommerce/contact');
});

Route::get('/contact', function () {
    return view('Ecommerce/contact');
});

Route::get('/industries', function () {
    return view('Ecommerce/industries');
});