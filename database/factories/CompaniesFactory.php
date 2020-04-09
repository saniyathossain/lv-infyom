<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Companies;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {

    return [
        'company_name' => $faker->word,
        'company_location' => $faker->word,
        'company_link' => $faker->word,
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
