<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'surname'              => $faker->lastName,
        'name'                 => $faker->firstName,
        'patronymic'           => $faker->firstName.'вич',
        'salary'               => numberBetween($min = 10000, $max = 30000),
        'date_started_at_work' => date($format = 'd-m-Y', $max = 'now'),
        'role_id'              => 5,
        'department_id'        => numberBetween($min = 1, $max = 5),
    ];
});
