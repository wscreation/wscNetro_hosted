<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'type_id'       => factory(App\type::class),
        'item'          => $faker->name,
        'desc'          => $faker->paragraph(),
        'condition'     => $faker->boolean,
        'price'         => $faker->randomNumber(6),
        'sale_price'    => $faker->randomNumber(6),
        'brand'         => $faker->company,
        'image'         => 'default.png',
    ];
});
