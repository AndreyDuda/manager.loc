<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class employeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('roles')->insert(
            [//password 123456
                [
                    'surname'              => 'Полководец',
                    'name'                 => 'Роман',
                    'patronymic'           => 'Сергеевич',
                    'salary'               => '50000',
                    'date_started_at_work' => Carbon::now(),
                    'role_id'              => 0,
                    'department_id'        => 0,
                ],
                [
                    'surname'              => 'Дзюба',
                    'name'                 => 'Виктор',
                    'patronymic'           => 'Николаевич',
                    'salary'               => '45000',
                    'date_started_at_work' => Carbon::now(),
                    'role_id'              => 1,
                    'department_id'        => 0,
                ]
            ]);*/

        factory(app\Employees::class, 49988)->create();
    }
}
