<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' =>$faker->unique()->randomNumber($nbDigits = 8),
        'type' =>Str::random(10),
        'description' => Str::random(100)
    ];
});
