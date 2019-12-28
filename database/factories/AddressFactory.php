<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Location\Address;
use App\Models\User\User;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address_type' => 'Permanent',
        'post_code' => $faker->postcode,
        'house' => 'halima mension',
        'flat_no' => $faker->buildingNumber,
        'street' => $faker->streetName,
        'building_name' => $faker->buildingNumber,
        'town_or_city' => $faker->city,
        'country' => $faker->country ,
        'addressable_id' => factory(App\Models\User\User::class),
        'addressable_type' => User::class

    ];
});
