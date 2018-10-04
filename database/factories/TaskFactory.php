<?php

use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'keep' => $faker->sentence(),
    ];
});
