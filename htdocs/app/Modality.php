<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{


    public function groups()
    {
        return $this->hasMany(ExerciseGroup::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }
}
