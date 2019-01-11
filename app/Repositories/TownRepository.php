<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Repository;

class TownRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}