<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model\Admin\Categoria;
use Illuminate\Support\Str;

$factory->define(Categoria::class, function (Faker $faker) {
	$descripcion = $faker->unique()->word(rand(5,15));

    return [
        'descripcion' => $descripcion,
        'slug' => Str::slug($descripcion)
    ];
});
