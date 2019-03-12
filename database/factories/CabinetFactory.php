<?php

use App\Cabinet;
use App\Row;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Cabinet::class, function (Faker $faker) {
    return [
        'cabinet_name' => $faker->name,
        'row_id' => Row::all()->random()->id,
    ];
});
