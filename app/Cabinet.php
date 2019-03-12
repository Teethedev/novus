<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
     public function rows()
    {
        return $this->hasMany('App\Row');
    }
}
