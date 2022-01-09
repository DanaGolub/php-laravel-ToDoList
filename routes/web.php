<?php
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;


Route::get('/home/detail/{id}', 'HomeController@detail');
Route::get('/home/create', 'HomeController@create');
Route::post('/home/store', 'HomeController@store');
Route::post('/home/delete', 'HomeController@delete');
Route::get('/', 'HomeController@index');
Route::get('/product/index', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');
Route::get('/product/detail/{id}', 'ProductController@detail');
Route::post('/product/delete', 'ProductController@delete');