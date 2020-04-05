<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        //
        'customer_id' => $faker->numberBetween(1, 10),
        'description' => $faker->realText(),
        'vehicle_id' => $faker->numberBetween(1, 10),
        'location' => $faker->streetAddress,
        'job_done' => $faker->boolean(),
        'completed_on' => $faker->dateTimeThisYear(),
        'remarks' => $faker->realText(),
        'start_date' => $faker->dateTimeThisYear(),
        'end_date' => $faker->dateTimeThisMonth(),
    ];
});
