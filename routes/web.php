<?php
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
Route::get('/', 'HomeController@index');
Route::get('/product/index', 'ProductController@index');
