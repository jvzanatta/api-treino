<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'modality_id', 'schedule', 'active', 'detail', 'created_by'
    ];

    protected $table = 'workouts';

    public function group()
    {
        return $this->belongsTo(ExerciseGroup::class);
    }

    public function
}
