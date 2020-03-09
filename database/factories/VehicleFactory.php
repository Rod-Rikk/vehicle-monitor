<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        //
        'num_plate'=>$faker->swiftBicNumber,
        'description'=>$faker->realText(),
        'cha_num'=>$faker->randomNumber(),
        'model'=>$faker->text,
        'code'=>$faker->unique()->currencyCode,


    ];
});
