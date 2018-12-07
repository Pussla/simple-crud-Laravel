<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
