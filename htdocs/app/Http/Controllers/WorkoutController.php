<?php

namespace App\Http\Controllers;

use DB;
use App\Workout;
//use App\Http\Requests;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class WorkoutController extends Controller
{

    public function getAllWorkouts(Request $request)
    {
        $user = $request->user();

        $workouts = DB::table('workouts')
                          ->leftJoin('user_workouts', 'workouts.id', '=', 'user_workouts.workout_id')
                          ->where('user_workouts.user_id', $user->id)
                          ->orWhere('workouts.created_by', $user->id)
                          ->select('workouts.*', 'user_workouts.user_id')
                          ->orderBy('user_workouts.workout_id', 'desc')
                          ->get();

        return response()->json($workouts);
    }

    public function getWorkoutsForMe(Request $request)
    {
        $user = $request->user();

        $workouts = DB::table('workouts')
                          ->leftJoin('user_workouts', 'workouts.id', '=', 'user_workouts.workout_id')
                          ->where('user_workouts.user_id', $user->id)
                          ->select('workouts.*', 'user_workouts.user_id')
                          ->orderBy('user_workouts.workout_id', 'desc')
                          ->get();

        return response()->json($workouts);
    }

    public function getWorkoutsByMe(Request $request)
    {
        $user = $request->user();

        $workouts = Workout::where('created_by', $user->id)->get();

        return response()->json($workouts);
    }

    public function getDayWorkouts(Request $request, $day)
    {
        $user = $request->user();

        $workouts = DB::table('workouts')
                        ->leftJoin('user_workouts', 'workouts.id', '=', 'user_workouts.workout_id')
                        ->leftJoin('workout_exercises', 'workouts.id', '=', 'workout_exercises.workout_id')
                        ->where([['workout_exercises.day', $day],['user_workouts.user_id', $user->id]])
                        ->select('workouts.*', 'workout_exercises.*')
                        ->orderBy('user_workouts.workout_id', 'desc')
                        ->get();

        return response()->json($workouts);
    }

    public function read ($id)
    {
        $workout = Workout::findOrFail($id);

        return response()->json($workout);
    }

    public function create (Request $request)
    {
        $user = $request->user();
        $request_array = $request->all();
        $request_array["created_by"] = $user->id;

        $workout = Workout::create($request_array);

        return response()->json($workout);
    }

    public function update(Request $request, $id)
    {
        $workout = Workout::find($id);

        $updated = $workout->update($request->all());

        return response()->json(['updated' => $updated, 'workout' => $workout]);
    }

    public function delete($id)
    {
        $deletedRows = Workout::destroy($id);

        $deleted = $deletedRows == 1;

        return response()->json(['deleted' => $deleted]);
    }
}
