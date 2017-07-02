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

Route::group(['prefix' => 'v1'], function ()
{

    // Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');


    Route::group(['prefix' => 'users', 'middleware' => 'auth:api'], function ()
    {
        Route::get('who', 'UserController@who');
        Route::get('data', 'UserController@getMostData');
        Route::get('logout', 'Auth\LoginController@logout');
        // Route::get('', 'UserController@index');
        Route::get('{id}', 'WorkoutController@show');
        Route::post('', 'WorkoutController@store');
        Route::patch('{id}', 'WorkoutController@update');
    });

    Route::group(['prefix' => 'coaches', 'middleware' => 'auth:api'], function ()
    {
        Route::post('users', 'UserController@addPupil');
        Route::post('users/{id}', 'UserController@removePupil');
    });


    Route::group(['prefix' => 'workouts', 'middleware' => 'auth:api'], function ()
    {
        Route::get('{id}', 'WorkoutController@show');
        Route::post('', 'WorkoutController@traitStore');
        Route::patch('{id}', 'WorkoutController@update');
        Route::patch('{id}/exercises', 'WorkoutController@updateExercises');
        Route::delete('{id}', 'WorkoutController@delete');
    });


    Route::group(['prefix' => 'exercises', 'middleware' => 'auth:api'], function ()
    {
        Route::get('', 'ExerciseController@index');
        Route::get('{id}', 'ExerciseController@show');
        Route::post('', 'ExerciseController@store');
        Route::patch('{id}', 'ExerciseController@update');
        Route::delete('{id}', 'ExerciseController@delete');
    });

});
