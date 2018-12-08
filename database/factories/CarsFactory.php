<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'mark' => $faker->vehicleBrand,
        'model' => $faker->vehicleModel,
        'year_of_production' => $faker->year($max = 'now'),
    ];
});
