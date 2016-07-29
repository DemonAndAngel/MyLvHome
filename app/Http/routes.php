<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'TaskController@index')->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::auth();

    /**
    TestController
     **/
    Route::get('/gototest','TestController@index');
    Route::get('/testajax','TestController@testajax');
    Route::post('/test','TestController@test')->middleware('test');
    Route::post('/test/savetest','TestController@savetest');


    Route::Controller('post','PostController');
    Route::resource('user','GetController');//资源控制器

    Route::resource('git','GitController');//资源控制器
});
