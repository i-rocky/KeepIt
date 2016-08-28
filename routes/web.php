<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('template');
});
Route::get('/home.htm', function (){
    return view('home');
});
Route::get('/about.htm', function (){
    return view('about');
});
Route::get('/user', function (){
    //User::Self
});
Route::get('/user/{page}', function ($page=null){
    if(substr($page, -4)==".htm"){
        return view("user.".substr($page, 0, -4));
    }
});