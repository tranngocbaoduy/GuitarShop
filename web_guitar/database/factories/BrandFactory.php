<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 12/10/18
 * Time: 20:48
 */

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    static $number = 1;
    $brands = ['Charvel','Cordoba','EVH','Fender','Gretsch','Ibanez','Kapok','Jackson','Roland','Samick','Lazer','Sigma','Suzuki','Tanglewood','Takamine','Taylor'];

    return [
        'name' => $brands[$number++],
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
    ];
});
