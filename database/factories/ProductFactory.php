<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' =>1200,
        'type' =>"ps",
        'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ];
});
