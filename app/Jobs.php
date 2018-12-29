<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function employees()
    {
        return $this->belongsToMany('App\Employees');
    }
}
