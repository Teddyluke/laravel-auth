<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
// mi porto sempre dietro il model
use App\Employee;
use Faker\Generator as Faker;

// la factory si occupa di riempire i campi di dati fake tramite il faker ricordarsi di modificare il define con il model corretto
$factory->define(Employee::class, function (Faker $faker) {
    return [

        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName()

    ];
});
