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

        Route::delete('{id}/unfriend', 'UserController@removeContact');
    });



    Route::group(['prefix' => 'coaches', 'middleware' => 'auth:api'], function ()
    {
        Route::post('users', 'UserController@addPupil');
    });




    Route::group(['prefix' => 'workouts', 'middleware' => 'auth:api'], function ()
    {
        Route::get('{id}', 'WorkoutController@show');
        Route::post('', 'WorkoutController@store');
        Route::patch('{id}', 'WorkoutController@update');
        Route::delete('{id}', 'WorkoutController@destroy');

        // Route::patch('{id}/exercises', 'WorkoutController@updateExercises');

        Route::patch('/users/{userId}/sync', 'WorkoutController@sync');
        Route::post('{workoutId}/users/{userId}', 'WorkoutController@share');
        Route::delete('{workoutId}/users/{userId}', 'WorkoutController@unshare');
    });




    Route::group(['prefix' => 'exercises', 'middleware' => 'auth:api'], function ()
    {
        Route::get('', 'ExerciseController@index');
        Route::get('{id}', 'ExerciseController@show');
        Route::post('', 'ExerciseController@store');
        Route::patch('{id}', 'ExerciseController@update');
        Route::delete('{id}', 'ExerciseController@delete');
    });


    Route::group(['prefix' => 'messages', 'middleware' => 'auth:api'], function ()
    {
        Route::get('from/{contactId}/new/count', 'MessageController@checkNewFrom');
        Route::get('between/{contactId}', 'MessageController@list');
        Route::get('between/{contactId}/offset/{offset}', 'MessageController@list');
        Route::get('between/{contactId}/offset/{offset}/limit/{limit}', 'MessageController@list');
        Route::post('to/{contactId}', 'MessageController@store');
    });

});
