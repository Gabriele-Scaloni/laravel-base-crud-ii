<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> words(3, true),//words mi indica le parole, fare attenzione su create_movies che in quel file il numero indica le lettere
        'release' => $faker -> date(),

    ];
});
