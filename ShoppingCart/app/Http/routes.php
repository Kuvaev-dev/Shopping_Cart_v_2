<?php

Route::get('/', [
    'users' => 'ProductController@GetIndex',
    'as' => 'product.index'
]);

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

Route::post('/profile', [
    'uses' => 'UserController@GetProfile',
    'as' => 'user.profile'
]);
