<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Institutes;
use Faker\Generator as Faker;

$factory->define(Institutes::class, function (Faker $faker) {

    return [
        'institute_name' => $faker->word,
        'institute_location' => $faker->word,
        'institute_link' => $faker->word,
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
