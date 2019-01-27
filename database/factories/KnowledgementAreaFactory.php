<?php

use Faker\Generator as Faker;

$factory->define(App\KnowledgementArea::class, function (Faker $faker) {
    return [
        'nameArea' => $faker ->sentence,
        'description' => $faker ->sentence
    ];
});
