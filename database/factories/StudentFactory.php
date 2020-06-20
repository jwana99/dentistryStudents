<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'number' => $faker->phoneNumber,
        'email' => $faker->email,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'status' => $faker->randomElement(['available', 'unavailable']),
        'role' => $faker->randomElement(['user', 'admin']),
        'stage' => $faker->randomElement(['Fifth stage', 'Fourth stage'])

    ];
});
