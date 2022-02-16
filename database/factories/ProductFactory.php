<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $this->faker->sentence,
        'brand' => $this->faker->sentence,
        'price'  => $this->faker->randomDigit,
        'image' => $this->faker->imageUrl,
        'description' => $this->faker->sentence,
        'owner_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
