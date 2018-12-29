<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function jobs()
    {
        return $this->belongsToMany('App\Jobs');
    }
}
