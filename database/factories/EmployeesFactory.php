<?php

use Faker\Generator as Faker;

$factory->define(App\Employees::class, function (Faker $faker) {
   /* $faker = Faker\Factory::create('ru_RU');*/
    return [
        'surname'              => $faker->lastName,
        'name'                 => $faker->firstName,
        'patronymic'           => $faker->firstName.'vich',
        'salary'               => $faker->numberBetween($min = 10000, $max = 30000),
        'date_started_at_work' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
        'role_id'              => 5,
        'department_id'        => $faker->numberBetween($min = 1, $max = 5),
    ];
});
