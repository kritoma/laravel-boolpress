<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// api posts
Route::get('posts', 'Api\PostController@index');
Route::get('posts/{slug}', 'Api\PostController@show');

// api category
Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{slug}', 'Api\CategoryController@show');