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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teste', function (Request $request) {
    return 'ok';
});

Route::get('/', function () {
    return Route::version();
});

Route::group(['prefix' => 'v1/'], function ()
{
    Route::post('user/register', 'UserController@register');
    Route::post('user/login', 'UserController@login');
    Route::get('user/who', 'UserController@who');
});

Route::group(['prefix' => 'v1/', 'middleware' => 'auth'], function ()
{
    Route::get('workouts/', 'WorkoutController@getAllWorkouts');
    Route::get('workouts/for_me', 'WorkoutController@getWorkoutsForMe');
    Route::get('workouts/by_me', 'WorkoutController@getWorkoutsByMe');
    Route::get('workouts/{day}', 'WorkoutController@getDayWorkouts');
    Route::get('workout/{id}', 'WorkoutController@read');
    Route::post('workout/', 'WorkoutController@create');
    Route::put('workout/{id}', 'WorkoutController@update');
    Route::delete('workout/{id}', 'WorkoutController@delete');
    Route::get('exercises/', 'ExerciseController@index');
    Route::get('exercise/{id}', 'ExerciseController@read');
    Route::post('exercise/', 'ExerciseController@create');
    Route::put('exercise/{id}', 'ExerciseController@update');
    Route::delete('exercise/{id}', 'ExerciseController@delete');
});
