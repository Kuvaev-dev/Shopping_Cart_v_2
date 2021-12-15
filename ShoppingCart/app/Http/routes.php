<?php

Route::get('/', [
    'users' => 'ProductController@GetIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
   'uses' => 'UserController@GetAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'UserController@GetCart',
    'as' => 'product.shoppingCart'
]);

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@GetSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@PostSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@GetSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@PostSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::post('/profile', [
            'uses' => 'UserController@GetProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@GetLogout',
            'as' => 'user.logout'
        ]);
    });
});
