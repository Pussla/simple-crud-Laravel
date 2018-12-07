<?php


use Faker\Generator as Faker;

$factory->define(App\Town::class, function (Faker $faker) {

    return [
        'name' => $faker->city,
    ];
});
