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
        'name', 'email', 'password', 'admin', 'provider_id', 'provider'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function buildings()
    {
        return $this->hasMany('App\Building', 'foreign_key');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function getId(){
        return $this->id();
    }

    public function likes()
    {
        return $this->belongsToMany('App\Building', 'likes', 'user_id', 'building_id')->withTimeStamps();
    }

    public function socialProviders()
    {
        return $this->hasMany('App\SocialProvider');
    }


}

