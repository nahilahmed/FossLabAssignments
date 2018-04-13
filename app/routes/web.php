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

Route::get('/',[
    'uses'=>'UserController@landing',
    'as'=>'/'
]);
Route::get('/signup',[
    'uses'=>'UserController@go_to_signup',
    'as'=>'signup'

]);
Route::post('/postsignup',[
    'uses'=>'UserController@signup',
    'as'=>'postsignup'

]);
Route::get('/signin', function () {
    return view('signin',["Error"=>""]);
})->name('signin');

Route::post('/postsignin',[
    'uses'=>'UserController@signin',
    'as'=>'postsignin'
]);

Route::get('/success', function () {
    return view('success');
})->name('success');
