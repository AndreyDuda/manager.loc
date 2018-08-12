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
        DB::table('employees')->insert(
            [
                [
                    'surname'              => 'Polkovodec',
                    'name'                 => 'Roman',
                    'patronymic'           => 'Sergeevich',
                    'salary'               => '50000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 1,
                    'department_id'        => 1,
                ],
                [
                    'surname'              => 'Dzuba',
                    'name'                 => 'Viktor',
                    'patronymic'           => 'Nikolayovich',
                    'salary'               => '45000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 2,
                    'department_id'        => 1,
                ],
                [
                    'surname'              => 'Mishin',
                    'name'                 => 'Ivan',
                    'patronymic'           => 'Ivanovich',
                    'salary'               => '40000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 3,
                    'department_id'        => 2,
                ],
                [
                    'surname'              => 'Bunak',
                    'name'                 => 'Dmitriy',
                    'patronymic'           => 'Andreevich',
                    'salary'               => '35000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 4,
                    'department_id'        => 2,
                ],
                [
                    'surname'              => 'Mishin',
                    'name'                 => 'Ivan',
                    'patronymic'           => 'Ivanovich',
                    'salary'               => '40000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 3,
                    'department_id'        => 3,
                ],
                [
                    'surname'              => 'Mirniy',
                    'name'                 => 'Roman',
                    'patronymic'           => 'Ivanovich',
                    'salary'               => '35000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 4,
                    'department_id'        => 3,
                ],
                [
                    'surname'              => 'Kapustin',
                    'name'                 => 'Ivan',
                    'patronymic'           => 'Alekseevich',
                    'salary'               => '40000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 3,
                    'department_id'        => 4,
                ],
                [
                    'surname'              => 'Frosin',
                    'name'                 => 'Andrey',
                    'patronymic'           => 'Bogdanovich',
                    'salary'               => '35000',
                    'date_started_at_work' => date('Y-m-d H:i:s'),
                    'role_id'              => 4,
                    'department_id'        => 4,
                ]
            ]);

        //factory(App\Employees::class, 49988)->create();
        factory(App\Employees::class, 4992)->create();
    }
}
