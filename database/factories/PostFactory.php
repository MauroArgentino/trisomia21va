<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Admin\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $titulo = $faker->sentence(4);

    return [
        'titulo' => $titulo,
        'slug' => Str::slug($titulo),
        'contenido' => $faker->text(400),
        'estado' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'likes' => rand(0, 200),
        'dislikes' => rand(0, 30),
        'user_create_id' => rand(1, 30),
        'user_modified_id' => rand(1, 30),
        'categoria_id' => rand(1, 30),
        'imagen_id' => rand(1, 30)
    ];
});
