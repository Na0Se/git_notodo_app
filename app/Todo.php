<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use \Rutorika\Sortable\SortableTrait;
    
    //relation to User.php
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    //relation to Goal.php    
    public function goal()
    {
        return $this->belongsTo('App\Goal');
    }
    
    //relation to Tag.php
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
