<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'first_name' => 'Ami',
        'last_name' => 'tumi',
        'gender' => 'male',
        'designation' => 'Journalist'
    ];
});
