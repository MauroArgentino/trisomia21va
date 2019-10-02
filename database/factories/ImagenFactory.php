<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Admin\Imagen;
use Faker\Generator as Faker;

$factory->define(Imagen::class, function (Faker $faker) {
    return [
        'ruta_imagen' => $faker->imageUrl($width = 1200, $height = 400)
    ];
});
