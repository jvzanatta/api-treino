<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'modality_id',
        'schedule',
        'active',
        'detail',
        'created_by'
    ];

    protected $table = 'workouts';


    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'workout_exercises')
            ->withPivot('day', 'weight', 'distance', 'repeat', 'series', 'laps');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_workouts')/*->withPivot()*/;
    }

    public function creator()
    {
        return $this->hasOne(User::class, 'user_id', 'created_by');
    }

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }
}
