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
Route::get('/content_cover/{file_name}',[
    'uses'=>'HomeController@getContentCover',
    'as'=>'content_cover'
]);
Route::get('/category/{category_name}',[
    'uses'=>'HomeController@getContentByCategory',
    'as'=>'cat'
]);
Route::get('/search',[
    'uses'=>'HomeController@getSearchContent',
    'as'=>'search-content'
]);

Route::get('/add-to-cart',[
    'uses'=>'CartController@getAddToCart',
    'as'=>'add-to-cart'
]);



Route::group(['prefix'=>'auth'], function (){
    Route::get('/login', [
        'uses'=>'AuthController@getLogin',
        'as'=>'login'
    ]);
    Route::post('/login',[
        'uses'=>'AuthController@postLogin',
        'as'=>'login'
    ]);
});

Route::group(['middleware'=>'auth'], function () {

Route::group(['prefix'=>'admin'], function(){



    Route::group(['middleware'=>'myRole:Casher|Administrator'], function (){
        Route::get('/orders',[
            'uses'=>'OrderController@getOrder',
            'as'=>'orders'
        ]);
        Route::get('/pre-order',[
            'uses'=>'OrderController@getPreOrder',
            'as'=>'pre-order'
        ]);
        Route::get('/change-deliver-status',[
            'uses'=>'OrderController@changeDeliverStatus',
            'as'=>'change-deliver-status'
        ]);
        Route::get('/change-cash-status',[
            'uses'=>'OrderController@changeCashStatus',
            'as'=>'change-cash-status'
        ]);

        Route::get('/print-order/{order_id}',[
            'uses'=>'OrderController@postPrintOrder',
            'as'=>'print-order'
        ]);


    });

});

   Route::group(['middleware'=>'myRole:Waiter'],function (){
       Route::get('/cart-qty',[
           'uses'=>'CartController@getCartQty'
       ]);
       Route::get('/pre-cart',[
           'uses'=>'CartController@getPreCart',
           'as'=>'pre-cart'
       ]);
       Route::get('/cart',[
           'uses'=>'CartController@getCart',
           'as'=>'cart'
       ]);

       Route::post('/empty-cart',[
           'uses'=>'CartController@postEmptyCart',
           'as'=>'empty-cart'
       ]);
        Route::get('/decrease-cart',[
            'uses'=>'CartController@getDecreaseCart',
            'as'=>'decrease-cart'
        ]);
        Route::get('/increase-cart',[
            'uses'=>'CartController@getIncreaseCart',
            'as'=>'increase-cart'
        ]);
        Route::post('/check-out',[
            'uses'=>'CartController@postCheckout',
            'as'=>'check-out'
        ]);

   });

    Route::group(['prefix'=>'admin'], function () {

        Route::group(['middleware'=>'myRole:Administrator'], function () {
            Route::get('/audit', [
                'uses'=>'AuditController@getAudit',
                'as'=>'audit'
            ]);
            Route::get('/pre-audit',[
                'uses'=>'AuditController@getPreAudit',
                'as'=>'pre-audit'
            ]);
        });


        Route::get('/dashboard', [
            'uses'=>'AdminController@getDashboard',
            'as'=>'dashboard'
        ]);
        Route::get('/logout', [
            'uses'=>'AdminController@getLogout',
            'as'=>'logout'
        ]);
        Route::get('/profile',[
            'uses'=>'AdminController@getProfile',
            'as'=>'profile'
        ]);
        Route::get('/errors',[
            'uses'=>'AdminController@getErrors',
            'as'=>'errors'
        ]);
        Route::group(['middleware'=>'myRole:Administrator|Manager'], function (){
            Route::get('/categories',[
                'uses'=>'ContentController@getCategories',
                'as'=>'categories'
            ]);
            Route::post('/new-category',[
                'uses'=>'ContentController@postNewCategory',
                'as'=>'new-category'
            ]);
            Route::post('/delete-category',[
                'uses'=>'ContentController@postDeleteCategory',
                'as'=>'delete-category'
            ]);
            Route::get('/contents',[
                'uses'=>'ContentController@getContents',
                'as'=>'contents'
            ]);
            Route::post('new-content',[
                'uses'=>'ContentController@postNewContent',
                'as'=>'new-content'
            ]);
            Route::post('/delete-content',[
                'uses'=>'ContentController@postDeleteContent',
                'as'=>'delete-content'
            ]);
            Route::post('/update-content',[
                'uses'=>'ContentController@postUpdateContent',
                'as'=>'update-content'
            ]);
        });

        Route::group(['middleware'=>'myRole:Administrator|Manager'],function (){
            Route::get('/register', [
                'uses'=>'AuthController@getRegister',
                'as'=>'register'
            ]);
            Route::post('/register', [
                'uses'=>'AuthController@postRegister',
                'as'=>'register'
            ]);
            Route::get('/user-manager', [
                'uses'=>'AdminController@getUserManager',
                'as'=>'user-manager'
            ]);
            Route::get('/edit-user/{user_name}',[
                'uses'=>'AdminController@getEditUser',
                'as'=>'edit-user'
            ]);
            Route::post('/update-user',[
                'uses'=>'AdminController@postUpdateUser',
                'as'=>'update-user'
            ]);
            Route::post('/update-user-password',[
                'uses'=>'AdminController@postUpdateUserPassword',
                'as'=>'update-user-password'
            ]);
            Route::post('/delete-user',[
                'uses'=>'AdminController@postDeleteUser',
                'as'=>'delete-user'
            ]);


            Route::get('/force-logout/{user_name}',[
                'uses'=>'AdminController@getForceLogout',
                'as'=>'force-logout'
            ]);


        });

    });
});