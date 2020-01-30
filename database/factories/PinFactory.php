<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pin;
use Faker\Generator as Faker;

$factory->define(Pin::class, function (Faker $faker) {
    
    return [
        'pin' => $faker->unique()->randomNumber($nDigits=5).$faker->unique()->randomNumber($nDigits=5).$faker->unique()->randomNumber($nDigits=5),
        'serial_no' =>  $faker->unique()->randomNumber($nDigits=5).($nDigits=5).$faker->unique()->randomNumber($nDigits=5).$faker->unique()->randomNumber($nDigits=5),
    ];
});
