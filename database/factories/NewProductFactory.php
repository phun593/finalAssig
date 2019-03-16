<?php

use Faker\Generator as Faker;

$factory->define(App\newProduct::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'discription' =>$faker->paragraphs(rand(2,10),true),
        'price' =>$faker->randomDigit()


    ];
});
