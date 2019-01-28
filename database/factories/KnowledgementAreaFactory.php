<?php

use Faker\Generator as Faker;

$factory->define(App\KnowledgementArea::class, function (Faker $faker) {
    return [
        'name' => $faker ->sentence,
        'description' => $faker ->sentence
    ];
});
