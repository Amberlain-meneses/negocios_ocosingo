<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'image' => $faker->word,
        'adress' => $faker->word,
        'location' => $faker->word,
        'schedule' => $faker->word,
        'phone' => $faker->word,
        'service_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'references' => $faker->word,
        'owner' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
