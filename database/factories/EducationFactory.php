<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'institute_id' => $faker->randomDigitNotNull,
        'education_level' => $faker->word,
        'education_department' => $faker->word,
        'start_date' => $faker->date('Y-m-d H:i:s'),
        'end_date' => $faker->date('Y-m-d H:i:s'),
        'continuing' => $faker->word,
        'cgpa' => $faker->word,
        'cgpa_out_of' => $faker->word,
        'current_status' => $faker->word,
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
