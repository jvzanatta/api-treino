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
        RestControllerTrait::destroy as destroyStore;
    }
    const MODEL = 'App\Workout';

    protected $validationRules = [];
    protected $validationPatchRules = [];

    public function update(Request $request, $id)
    {
        try {
            // Atualizar treino
            $workout = Workout::findOrFail($id);
            $workout->fill($request->all());
            $workout->save();

            // Atualizar vínculos com exercícios
            $exercises = [];
            if ($request->has('exercises')) {
               foreach($request->input('exercises') as $exercise) {
                   unset($exercise['pivot']['workout_id']);
                   unset($exercise['pivot']['exercise_id']);
                   $exercises[$exercise['id']] = $exercise['pivot'];
               }
            }

            $workout->exercises()->sync($exercises);

            $workout->load('exercises', 'sport', 'creator');

            return $this->showResponse($workout);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (!$request->user()->owns(Workout::find($id))) {
            return $this->notFoundResponse();
        }
        return $this->destroyStore($id);
    }

    public function store(Request $request)
    {
        return $this->traitStore($request);
    }

    public function share(Request $request, $workoutId, $userId)
    {
        try {
            $workout = Workout::find($workoutId);
            if (!$request->user()->owns($workout)) {
                return $this->notFoundResponse();
            }
            $workout->users()->attach($userId);
            return $this->showResponse(true);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

    public function unshare(Request $request, $workoutId, $userId)
    {
        try {
            $workout = Workout::find($workoutId);
            if (!$request->user()->owns($workout)) {
                return $this->notFoundResponse();
            }
            $workout->users()->detach($userId);
            return $this->showResponse(true);
        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }
}
