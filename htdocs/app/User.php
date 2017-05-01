<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Laravel\Passport\Token as Token;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasApiTokens, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password','api_token',
        'gender',
        'nick_name',
        'birth_date',
        'weight',
        'height',
        'facebook_id',
        'google_id'
    ];

    protected $hidden = [
        'password',
        'api_token',
    ];

    public function pupils()
    {
        return $this->belongsToMany(User::class, 'user_coaches', 'user_id', 'coach_id');
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

    public function token()
    {
        return $this->hasMany(Token::class);
    }

}
