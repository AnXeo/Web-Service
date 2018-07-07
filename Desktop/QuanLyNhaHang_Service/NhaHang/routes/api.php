<?php

use Illuminate\Http\Request;

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

Route::get("monan/danhsach",'MonAnController@danhsach');

Route::get("monan/chitiet",'MonAnController@chitiet');

Route::post("monan/them",'MonAnController@them');

Route::get("monan/xoa",'MonAnController@xoa');

Route::post("monan/sua",'MonAnController@sua');