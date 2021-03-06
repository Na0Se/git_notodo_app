<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //relation to Goal.php
    public function goals()
    {
        return $this->hasMany('App\Goal');
    }
    
    //relation to Todo.php
    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
    
     //relation to Tag.php
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
