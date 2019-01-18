<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'body'=>$faker->text(100),
    ];
});
