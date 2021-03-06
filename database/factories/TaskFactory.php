<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [

        'name' => $faker -> word(),
        'description' => $faker -> text(),
        'deadline' => $faker -> date()

    ];
});
