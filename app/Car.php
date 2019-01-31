<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['mark', 'model', 'year_of_production'];

    public function person()
    {
        return $this->belognsTo('App\Person');
    }
}
