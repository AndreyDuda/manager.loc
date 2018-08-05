<?php

use Illuminate\Database\Seeder;

class departmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* factory(App\Department::class, 5)->create();*/
        DB::table('departments')->insert(
            [
                [
                    'title'              => 'Компания Рога и копыта'
                ],
                [
                    'title'              => 'Отдел разработки'
                ],
                [
                    'title'              => 'Отдел продаж'
                ],
                [
                    'title'              => 'Отдел бухгалтерии'
                ],

            ]);
    }
}
