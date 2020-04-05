<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        //
        'num_plate'=>$faker->swiftBicNumber,
        'description'=>$faker->word(),
        'cha_num'=>$faker->randomNumber(),
        'model'=>$faker->word(),
        'code'=>$faker->unique()->currencyCode,


    ];
});
