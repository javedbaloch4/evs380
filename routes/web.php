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

//Route::get('/', function () {
////    return view('welcome');
//    echo "laravel";
//});
// 2nd Arg        Class             @ method
Route::get('/' , 'HomePageController@homePage');
Route::get('/registration' , 'UsersController@userRegistrationPage');
Route::post('/registration' , 'UsersController@userRegistrationPagePostData');
Route::get('/contact' , 'UsersController@contactPage');
