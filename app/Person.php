<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";

    protected $fillable = ['name', 'lastname', 'car_id', 'town_id', 'birth_year'];

    public function car()
    {
        return $this->hasOne('App\Car', 'id', 'car_id');
    }

    public function town()
    {
        return $this->hasOne('App\Town', 'id', 'town_id');
    }
}
