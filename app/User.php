<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Laravel\Passport\Token as Token;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;
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
        return $this->belongsToMany(User::class, 'user_coaches', 'coach_id', 'user_id');
    }

    public function coaches()
    {
        return $this->belongsToMany(User::class, 'user_coaches', 'user_id', 'coach_id');
        // return $this->belongsToMany(User::class, 'user_coaches', 'user_id', 'coach_id');
    }

    public function givenWorkouts()
    {
        return $this->belongsToMany(Workout::class, 'user_workouts');
    }

    public function createdWorkouts()
    {
        return $this->hasMany(Workout::class, 'created_by');
    }

    public function token()
    {
        return $this->hasMany(Token::class);
    }

    // public function messages()
    // {
    //     return $this->belongsToMany(Message::class);
    // }

    public function sentMessage()
    {
        return $this->hasMany(Message::class, 'from');
    }

    public function receivedMessage()
    {
        return $this->hasMany(Message::class, 'to');
    }


    public function getMostData()
    {
        return $this->load(
            'givenWorkouts',
            'givenWorkouts.exercises',
            'givenWorkouts.sport',
            'givenWorkouts.creator',
            'givenWorkouts.users',
            'createdWorkouts',
            'createdWorkouts.exercises',
            'createdWorkouts.sport',
            'createdWorkouts.creator',
            'createdWorkouts.users',
            'pupils',
            'coaches'
        );
    }

    public function owns($workout)
    {
        return $this->id == $workout->created_by;
    }

}
