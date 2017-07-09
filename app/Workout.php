<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workout extends Model
{
    use SoftDeletes;

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

    protected $table = 'workouts';


    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'workout_exercises')
            ->withPivot('day', 'weight', 'distance', 'repeat', 'series', 'laps')
            ->orderBy('exercise_group_id')->orderBy('name');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_workouts')/*->withPivot()*/;
    }

    public function creator()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
