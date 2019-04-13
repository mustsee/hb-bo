<?php

use App\Event;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Event::class, function (Faker $faker) {
    return [
        'day' => $faker->date(),
        'habits' => json_encode(
            [Str::random(10), Str::random(10), Str::random(10)]
        ),
        'done_habits' => json_encode([Str::random(15)]),
        'good_day' => $faker->boolean,
    ];
});