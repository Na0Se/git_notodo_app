<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    //relation to User.php
     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    // relation to Todo.app
    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
}
