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
        'name',
        'sport_id',
        'schedule',
        'active',
        'detail',
        'created_by'
    ];

    protected $table = 'exercises';

    public function group()
    {
        return $this->belongsTo(ExerciseGroup::class, 'exercise_group_id');
    }
}
