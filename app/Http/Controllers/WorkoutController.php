<?php

namespace App\Http\Controllers;

use DB;
use App\Workout;
//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Traits\RestControllerTrait;


class WorkoutController extends Controller
{

    use RestControllerTrait {
        RestControllerTrait::update as traitUpdate;
        RestControllerTrait::store as traitStore;
    }
    const MODEL = 'App\Workout';

    protected $validationRules = [];
    protected $validationPatchRules = [];

    public function update(Request $request, $id)
    {
        // Atualizar treino
        $workout = Workout::findOrFail($id);
        $workout->fill($request->all());
        $workout->save();

        // Atualizar vínculos com exercícios
        $exercises = [];
        foreach($request->input('exercises') as $exercise) {
            unset($exercise['pivot']['workout_id']);
            unset($exercise['pivot']['exercise_id']);
            $exercises[$exercise['id']] = $exercise['pivot'];
        }
        $workout->exercises()->sync($exercises);

        $workout->load('exercises', 'sport', 'creator');

        return $this->showResponse($workout);
    }

    // public function create (Request $request)
    // {
    //     $user = $request->user();
    //     $request_array = $request->all();
    //     $request_array["created_by"] = $user->id;

    //     $workout = Workout::create($request_array);

    //     return response()->json($workout);
    // }

    // public function delete($id)
    // {
    //     $deletedRows = Workout::destroy($id);

    //     $deleted = $deletedRows == 1;

    //     return response()->json(['deleted' => $deleted]);
    // }
}
