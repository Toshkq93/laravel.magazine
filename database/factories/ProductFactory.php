<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'content' => $faker->paragraph(3),
        'description' => $faker->paragraph(1),
        'category_id' => $faker->numberBetween(1,33),
        'price' => $faker->numberBetween(1, 200),
        'old_price' => $faker->numberBetween(200, 1000),
        'modification' => '',
        'status' => true,
    ];
});
