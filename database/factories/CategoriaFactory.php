<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Categoria::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'slug' => $faker->slug,
    ];
});
