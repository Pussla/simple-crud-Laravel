<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories;

class PersonRepository extends Repository
{
    public function __constuct(Model $model)
    {
        parent::__constuct($model);
    }
}