<?php

use App\TheLoai;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
     return view('admin.theloai.danhsach');
  
   
});

Route::group(['prefix' => 'admin'],function(){

	Route::group(['prefix' => 'theloai'],function(){
		Route::get('danhsach','TheLoaiController@getDanhsach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@add');
		Route::post('them','TheLoaiController@addPost');
	});
	Route::group(['prefix' => 'tintuc'],function(){
		Route::get('danhsach','TintucController@getDanhsach');
		Route::get('sua','TintucController@getSua');
		Route::get('them','TintucController@getThem');
	});
	Route::group(['prefix' => 'loaitin'],function(){
		Route::get('danhsach','LoaitinController@getDanhsach');
		Route::get('sua','LoaitinController@getSua');
		Route::get('them','LoaitinController@getThem');
	});


});

