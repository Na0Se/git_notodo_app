<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //relation to User.php
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    //relation to Todo.php
    public function todos()
    {
        return $this->belongsToMany('App\Todo');
    }
}
