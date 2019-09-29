<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Web\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    $name = $faker->name;
    $menus = Menu::all();

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'parent' => (count($menus) > 0) ? $faker->randomElement($menus->pluck('id')->toArray()) : 0,
        'order' => 0
    ];
});
