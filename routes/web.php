<?php

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
Route::get('/', 'User\StoreController@index');
Route::get('/about', 'User\StoreController@about');

Auth::routes();


Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'User\StoreController@cartView');
    Route::get('/delete/{id}', 'User\CartController@deleteCart');
    Route::get('/delete/all', 'User\CartController@deleteAllCart');
});

Route::prefix('/dashboard')->group(function () {
    Route::resource("/product", "Admin\ProductController");
    Route::resource("/categorie", "Admin\CategorieController");
    Route::resource('/pages', 'Admin\PageController');
    Route::resource('/template', 'Admin\TemplateController');

    Route::get('/', 'AdminController@index');
    Route::get('/template-edit', 'TemplateController@edit');
    Route::get('/create', 'TemplateController@create');
    Route::get('/insert-insert', 'TemplateController@store');

    Route::get("/template", "Admin\TemplateController@index");
    Route::get('/template/{id}/select', 'Admin\TemplateController@select');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
});

Route::prefix('/user')->group(function () {
    Route::get('/', 'User\UserBoardController@index');
    Route::get('/wishlist', 'User\UserBoardController@index');
    Route::get('/pembelian', 'User\UserBoardController@index');
    Route::get('/transaksi', 'User\UserBoardController@index');
    Route::get('/pengaturan', 'User\UserBoardController@index');
});

Route::prefix('/product')->group(function () {
    Route::get('/all', 'User\StoreController@product');
    Route::get('/{id}', 'User\StoreController@detail');
    Route::get('/search', 'User\CartController@search');

    Route::post('/cart/add', 'User\CartController@addCart');
});

Route::prefix('/checkout')->group(function () {
    Route::get('/', 'User\StoreController@checkout');
    Route::post('/addcostumer', 'User\SaleController@addCostumer');
});
