<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fees;

class student extends Model
{
    //
    public function fees()
    {
        return $this->hasMany('App\Fees');
    }
}
