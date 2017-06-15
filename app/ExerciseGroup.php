<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseGroup extends Model
{
    //

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }
}
