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

//Route::get("/users" ,function(){
//
//    echo "This is my first api call route";
//    
//});

Route::get("/v1" , 'ApiController@buildApiResults');
Route::post("/v1" , 'ApiController@buildApiResults');


Route::get('/v2' , function(){
    
    
});
