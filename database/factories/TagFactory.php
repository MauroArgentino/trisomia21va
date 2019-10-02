<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Admin\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $descripcion = $faker->unique()->word(rand(5,15));

    return [
        'descripcion' => $descripcion
    ];
});
