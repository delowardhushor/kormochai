<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    public function services()
    {
        return $this->hasMany('App\Partnerservices');
    }
}
