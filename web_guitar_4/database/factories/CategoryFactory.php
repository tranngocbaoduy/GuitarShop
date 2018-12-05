<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
    ];
});
