<?php

namespace App\Http\Controllers;

use DB;
use App\Workout;
use App\User;
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

            $workout->load('exercises', 'sport', 'creator', 'users');

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
        try {
            $v = \Validator::make($request->all(), $this->validationRules);
            if ($v->fails()) {
                throw new \Exception("ValidationException");
            }
            $data = $request->all();
            $data['created_by'] = $request->user()->id;

            $workout = Workout::create($data);
            $workout->load('exercises', 'sport', 'creator', 'users');
            return $this->createdResponse($workout);
        } catch(\Exception $ex) {
            $data = ['form_validations' => $v->errors(), 'exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }

    public function syncUser(Request $request, $userId)
    {
        try {
            if (!($request->has('workouts') && $pupil = User::find($userId))) {
                return $this->notFoundResponse();
            }
            $user       = $request->user();
            $workouts   = $user->createdWorkouts;
            $workoutIds = $request->input('workouts');

            $filter = function ($workout) use ($workoutIds) {return in_array($workout->id, $workoutIds);};

            $share    = $workouts->filter($filter);
            $notShare = $workouts->reject($filter);

            $pupil->givenWorkouts()->detach($notShare);
            $pupil->givenWorkouts()->syncWithoutDetaching($share);

            $workouts = $user->givenWorkouts->merge($user->createdWorkouts);
            $workouts->load('exercises', 'sport', 'creator', 'users');

            return $this->showResponse($workouts);

        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }


    public function syncWorkout(Request $request, $workoutId)
    {
        try {
            $user = $request->user();
            $workout = Workout::find($workoutId);

            if (!($request->has('pupils')
                && $workout
                && $user->owns($workout))) {

                return $this->notFoundResponse();
            }

            $pupilIds = $request->input('pupils');

            $workout->users()->sync($pupilIds);

            $workouts = $user->givenWorkouts->merge($user->createdWorkouts);
            $workouts->load('exercises', 'sport', 'creator', 'users');

            return $this->showResponse($workouts);

        } catch(\Exception $ex) {
            $data = ['exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
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
