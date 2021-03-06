<?php

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

$factory->define(App\Models\Fan::class, function (Faker $faker) {
    static $password;

    return [
        'fan_id' => $faker->numberBetween(1,10),
        'star_id' => $faker->numberBetween(1,10),
        'created_at' => $faker->dateTime('now', 'Asia/Shanghai')
    ];
});
