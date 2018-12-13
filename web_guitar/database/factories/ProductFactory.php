<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    static $number = 1;
    $img = $faker->numberBetween(1, 14);
    $current =  time();


    $temp = 'product-'.$img.'.png';
    $path = '<img alt="product" width="30%" src="../uploads/'.$temp.'">';

    return [
        'id_category' => $faker->numberBetween(1, 5),
        'id_brand' => $faker->numberBetween(1,15),
        'name' => $faker->name,
        'price' => $faker->numberBetween(230, 5000),
        'quantity' => $faker->numberBetween(1, 10),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'image' =>$temp,
        'path' => $path,

        'action' => "<a class=\"btn btn-warning edit-product\" href=\"/adjust-product-id=".$number++."\">
    Edit
</a>"
    ];
});
