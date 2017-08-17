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

Route::get('/',[
    'uses'=>'HomeController@getIndex',
    'as'=>'/'
]);

Route::post('/login',[
    'uses'=>'AuthController@postLogin',
    'as'=>'login'
]);


Route::get('/dashboard',[
    'uses'=>'UserController@getDashboard',
    'as'=>'dashboard'
]);


Route::get('/logout',[
    'uses'=>'AuthController@getLogout',
    'as'=>'logout'
]);

Route::get('/errors',[
    'uses'=>'HomeController@getErrors',
    'as'=>'errors'
]);

Route::group(['middleware'=>'auth'],function (){

    Route::group(['middleware'=>'myRole:Sales|Manager'],function (){
        Route::get('/sales',[
            'uses'=>'SalesController@getSales',
            'as'=>'sales'
        ]);
        Route::get('/sales-list',[
            'uses'=>'SalesController@getSalesList',
            'as'=>'sales-list'
        ]);
        Route::get('/add-to-cart',[
            'uses'=>'SalesController@getAddToCart',
            'as'=>'add-to-cart'
        ]);
        Route::get('/cart-info',[
            'uses'=>'SalesController@getCartInfo',
            'as'=>'cart-info'
        ]);
        Route::get('/pre-cart',[
            'uses'=>'SalesController@getPreCart',
            'as'=>'pre-cart'
        ]);
        Route::get('/cart',[
            'uses'=>'SalesController@getCart',
            'as'=>'cart'
        ]);
        Route::get('/reduce-cart',[
            'uses'=>'SalesController@getReduceCart',
            'as'=>'reduce-cart'
        ]);
        Route::get('/increase-cart',[
            'uses'=>'SalesController@getIncreaseCart',
            'as'=>'increase-cart'
        ]);
        Route::get('/clear-cart',[
            'uses'=>'SalesController@getClearCart',
            'as'=>'clear-cart'
        ]);
    });

    Route::group(['middleware'=>'myRole:Stock|Manager'],function () {

        Route::get('/category', [
            'uses' => 'ProductController@getCategory',
            'as' => 'category'
        ]);
        Route::post('/new-category', [
            'uses' => 'ProductController@postNewCategory',
            'as' => 'new-category'
        ]);

        Route::get('/products', [
            'uses' => 'ProductController@getProducts',
            'as' => 'products'
        ]);

        Route::post('/new-product', [
            'uses' => 'ProductController@postNewProduct',
            'as' => 'new-product'
        ]);
        Route::get('/product-by-cat', [
            'uses' => 'ProductController@getProductByCat',
            'as' => 'product-by-cat'
        ]);


    });


    Route::group(['middleware'=>'myRole:Manager'], function (){


        Route::get('/register',[
            'uses'=>'HomeController@getRegister',
            'as'=>'register'
        ]);

        Route::post('/register',[
            'uses'=>'AuthController@postRegister',
            'as'=>'register'
        ]);


        Route::get('/user-manager',[
            'uses'=>'UserController@getUserManager',
            'as'=>'user-manager'
        ]);
        Route::get('/edit-user/{slug}',[
            'uses'=>'UserController@getEditUser',
            'as'=>'edit-user'
        ]);

        Route::post('/update-user',[
            'uses'=>'UserController@postUpdateUser',
            'as'=>'update-user'
        ]);
        Route::post('/update-password',[
            'uses'=>'UserController@postUpdatePassword',
            'as'=>'update-password'
        ]);

    });

});
