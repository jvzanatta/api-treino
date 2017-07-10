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

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
