<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model\Admin\Categoria;

$factory->define(Categoria::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->unique()->word(rand(5,15))
    ];
});
