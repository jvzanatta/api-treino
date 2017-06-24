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


    Route::group(['prefix' => 'users/', 'middleware' => 'auth:api'], function ()
    {
        Route::get('who', 'UserController@who');
        Route::get('logout', 'Auth\LoginController@logout');
        Route::get('test', function () {return 'authenticated';});
        Route::get('', 'UserController@');
        Route::get('{id}', 'WorkoutController@show');
        Route::post('', 'WorkoutController@store');
        Route::put('{id}', 'WorkoutController@update');
    });


    Route::group(['prefix' => 'workouts/', 'middleware' => 'auth:api'], function ()
    {
        // Route::get('', 'WorkoutController@getAllWorkouts');
        // Route::get('for_me', 'WorkoutController@getWorkoutsForMe');
        // Route::get('by_me', 'WorkoutController@getWorkoutsByMe');
        // Route::get('{day}', 'WorkoutController@getDayWorkouts');
        Route::get('{id}', 'WorkoutController@show');
        Route::post('', 'WorkoutController@store');
        Route::put('{id}', 'WorkoutController@update');
        Route::delete('{id}', 'WorkoutController@delete');
    });


    Route::group(['prefix' => 'exercises/', 'middleware' => 'auth:api'], function ()
    {
        Route::get('', 'ExerciseController@index');
        Route::get('{id}', 'ExerciseController@show');
        Route::post('', 'ExerciseController@store');
        Route::put('{id}', 'ExerciseController@update');
        Route::delete('{id}', 'ExerciseController@delete');
    });

});
