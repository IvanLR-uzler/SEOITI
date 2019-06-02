<?php

use Faker\Generator as Faker;

$factory->define(App\KnowledgementArea::class, function (Faker $faker) {
    return [
        'name' => $faker ->userName,
        'description' => $faker ->sentence
    ];
});
