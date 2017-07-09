<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'from',
        'to',
        'body',
        'seen'
    ];

    protected $hidden = [
        '',
        'api_token',
    ];

    protected $dates = ['deleted_at'];

    // public function participants()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    public function sender()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'to');
    }

}
