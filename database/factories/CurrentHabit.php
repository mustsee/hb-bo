<?php

use App\CurrentHabit;
use Illuminate\Support\Str;

$factory->define(CurrentHabit::class, function () {
    return [
        'name' => Str::random(10),
    ];
});
