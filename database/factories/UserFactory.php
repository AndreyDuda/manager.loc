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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


/*$factory->define(App\Department::class, function(Faker $faker){
    $faker = \Faker\Factory::create('ru_RU');
    return[
        'title'    => $faker->jobTitle,
    ];
});*/

/*$factory->define(App\Employees::class, function(Faker $faker){
    $faker = \Faker\Factory::create('ru_RU');
    return[
        'surname'              => $faker->lastName,
        'name'                 => $faker->firstName,
        'patronymic'           => $faker->firstName.'вич',
        'salary'               => numberBetween($min = 10000, $max = 30000),
        'date_started_at_work' => date($format = 'd-m-Y', $max = 'now'),
        'role_id'              => 5,
        'department_id'        => numberBetween($min = 1, $max = 5),

    ];
});*/