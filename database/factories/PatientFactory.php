<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(\App\Patient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'number' => $faker->phoneNumber,
        'status' => $faker->randomElement(['available', 'unavailable']),
        'procedure_type' => $faker->randomElement(['Operative', 'Periodontics', 'Prosthodontics', 'Surgery', 'Orthodontics', 'Pedodontics', 'Crownbridge', 'Endo'])
    ];
});

