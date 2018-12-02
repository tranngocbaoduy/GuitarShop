<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    static $number = 1;
    $img = $faker->numberBetween(1, 14);
    return [
        'id_category' => $faker->numberBetween(1, 5),
//            function () {
//            return factory(App\Category::class)->lazy()->id;
//        },
        'name' => $faker->name,
        'price' => $faker->numberBetween(230, 5000),
        'quantity' => $faker->numberBetween(1, 10),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'image' => time().'_'.'product-'.$img.'png',
        'path' => '<img src="asset/images/product/product-'.$img.'.png" style="width:30%">',
        'action' => "<a class=\"btn btn-warning edit-product\" href=\"/adjust-product-id=".$number++."\">
    Edit
</a>"
    ];
});
