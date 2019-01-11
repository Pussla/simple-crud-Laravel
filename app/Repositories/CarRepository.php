<?php

namespace App\Repositories;

use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class CarRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}