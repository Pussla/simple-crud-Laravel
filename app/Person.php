<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";

    public function car()
    {
        return $this->hasOne('App\Car', 'id');
    }

    public function town()
    {
        return $this->hasOne('App\Town', 'id');
    }

}
