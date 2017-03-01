<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','api_token', 'gender', 'nick_name', 'birth_date', 'weight', 'height', 'facebook_id', 'google_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function pupils ()
    {
        return $this->belongsToMany(User::class, 'user_coaches', 'user_id', 'coach_id');
    /*    $workouts = DB::table('users')
            ->leftJoin('user_coaches', 'user_coaches.coach_id', '=', 'users.id')
            ->where('user_coaches.coach_id', $this->id)
            ->select('users.*', 'user_coaches.coach_id')
            ->orderBy('users.id', 'desc')
            ->get();*/

    }

    public function getPayload()
    {
        $payload = ['sub' . $this->id,
            'exp' . time(),
            'email' . $this->email,
            'password' . $this->password,
        ];
        return implode("+", $payload);
    }

    public function coaches()
    {
        return $this->belongsToMany(User::class, 'user_coaches', 'coach_id', 'user_id');
    }

    public function givenWorkouts()
    {
        return $this->belongsToMany(Workout::class, 'user_workouts');
    }

    public function createdWorkouts()
    {
        return $this->hasMany(Workout::class, 'created_by', 'user_id');
    }

}
