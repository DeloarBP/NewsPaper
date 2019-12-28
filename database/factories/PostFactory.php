<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomDigitNot(0),
        'subcategory_id' => $faker->randomDigitNot(0),
        'title' => $faker->name,
        'description' => $faker->text,
        'publish_date' => $faker->date,
        'created_by' => '1',
        'updated_by' => '1',
        'headline' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'visit_count' => $faker->randomDigit(8)
    ];
});
