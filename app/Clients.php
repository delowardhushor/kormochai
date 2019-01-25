<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function services()
    {
        return $this->hasMany('App\Clientservices');
    }
}
