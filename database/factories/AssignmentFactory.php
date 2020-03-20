<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence,
        'due_date' => $faker->dateTimeBetween('now','+5 days'),
        'completed_at' => mt_rand(0,1) ? $faker->dateTimeBetween('now','+5 days'): NULL,
    ];
});
