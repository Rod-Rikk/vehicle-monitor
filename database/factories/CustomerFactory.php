<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->company,
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->unique()->companyEmail,

    ];
});
