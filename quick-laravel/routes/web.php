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

use App\Http\Middleware\LogMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
Route::get('/hello/escape', 'HelloController@escape');
Route::get('/hello/directive', 'HelloController@directive');
Route::get('/hello/master', 'HelloController@master');
Route::get('/hello/comp', 'HelloController@comp');

Route::post('/hello/methodfunc', 'HelloController@postfunc');
Route::get('/hello/methodfunc', 'HelloController@getfunc');
Route::get('/hello/methodfunc/{id}', 'HelloController@getidfunc');

Route::resource('routes', 'RouteController')
    ->middleware(LogMiddleware::class);

Route::get('/ctrl/index', 'CtrlController@index');
Route::post('/ctrl/index', 'CtrlController@index_post');
Route::post('/ctrl/index2', 'CtrlController@index_post2');
Route::get('/ctrl/redirect/{id}', 'CtrlController@redirect')
    ->name('redirect');
Route::get('/ctrl/plain', 'CtrlController@plain');
Route::get('/ctrl/header', 'CtrlController@header');

Route::fallback(function(){
    abort(500);
});
