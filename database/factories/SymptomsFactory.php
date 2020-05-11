<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Symptoms;
use Faker\Generator as Faker;

$factory->define(Symptoms::class, function (Faker $faker) {
    return [
        'user_id' => rand(0,5),
        'symptom' => $faker->sentence(2)
    ];
});
