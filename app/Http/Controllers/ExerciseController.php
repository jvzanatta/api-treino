<?php

namespace App\Http\Controllers;

use App\Exercise;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExerciseController extends Controller
{
    use RestControllerTrait;
    const MODEL = 'App\Exercise';

    // public function index(Request $request)
    // {
    //     $user = $request->user();

    //     $exercises = Workout::userWorkouts($user);

    //     return response()->json($exercises);
    // }

    // public function read ($id)
    // {
    //     $exercise = Workout::findOrFail($id);

    //     return response()->json($exercise);
    // }

    // public function create (Request $request)
    // {
    //     $user = $request->user();
    //     $request_array = $request->all();
    //     $request_array["created_by"] = $user->id;

    //     $exercise = Workout::create($request_array);

    //     return response()->json($exercise);
    // }

    // public function update(Request $request, $id)
    // {
    //     $exercise = Workout::find($id);

    //     $updated = $exercise->update($request->all());

    //     return response()->json(['updated' => $updated, 'exercise' => $exercise]);
    // }

    // public function delete($id)
    // {
    //     $deletedRows = Workout::destroy($id);

    //     $deleted = $deletedRows == 1;

    //     return response()->json(['deleted' => $deleted]);
    // }
}
