<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*DB::table('roles')->insert(
            [//password 123456
                [
                    'title'     => 'Директор',
                    'name'      => 'Director',
                    'parent_id' => '0'
                ],
                [
                    'title'     => 'Зам директор',
                    'name'      => 'Deputy director',
                    'parent_id' => '1'
                ],
                [
                    'title'     => 'Начальник',
                    'name'      => 'Director',
                    'parent_id' => '2'
                ],
                [
                    'title'     => 'ЗАм начальник',
                    'name'      => 'Deputy сhief',
                    'parent_id' => '3'
                ],
                [
                    'title'     => 'Работник',
                    'name'      => 'Employee',
                    'parent_id' => '4'
                ]
            ]);*/


        /*$this->call(departmentsTableSeeder::class);*/
        $this->call(employeesTableSeeder::class);
    }
}
