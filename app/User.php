<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject as AuthenticatableUserContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract,
    AuthenticatableUserContract
{

    use Authenticatable, Authorizable, CanResetPassword, Notifiable;


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

    /**
    * @return mixed
    */
   public function getJWTIdentifier()
   {
       return $this->getKey();  // Eloquent model method
   }

   /**
    * @return array
    */
   public function getJWTCustomClaims()
   {
       return [
            'user' => [
               'id' => $this->id,
               ...
            ]
       ];
   }

}
