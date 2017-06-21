<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{


    public function groups()
    {
        return $this->hasMany(ExerciseGroup::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function exercises()
    {
        return $this->hasManyThrough('App\Exercise', 'App\ExerciseGroup');
    }

    public function scopeGetAll($query)
    {
        return $query
            ->with(['groups' => function ($query) {
                $query->orderByRaw('name = "Outros", name')
                    ->with(['exercises' => function ($query) {
                        $query->orderBy('name');
                    }])->get();
            }])
            ->with(['exercises' => function ($query) {
                $query->orderBy('name');
            }])->orderBy('name')->get();
    }
}
