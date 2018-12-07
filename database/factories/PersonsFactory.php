<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'lastname' => $faker->lastName,
        'car_id' => $faker->unique()->numberBetween(1,100),
        'town_id' => $faker->numberBetween(1,100),
        'birth_year' => $faker->year($max = 'now'),
    ];
});


