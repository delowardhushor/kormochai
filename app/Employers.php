<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employers extends Model
{
    public function jobs()
    {
        return $this->hasMany('App\Jobs');
    }
}
