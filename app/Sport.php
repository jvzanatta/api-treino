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

    public function scopeGetAll($query)
    {
        return $query->with(['groups' => function ($query) {
                    $query->orderByRaw('name = "Outros", name')
                        ->with(['exercises' => function ($query) {
                            $query->orderBy('name');
                        }])->get();
                }])->orderBy('name')->get();
    }
}
