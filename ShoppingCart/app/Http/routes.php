<?php

Route::get('/', [
    'users' => 'ProductController@GetIndex',
    'as' => 'product.index'
]);
