<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'first_name' => 'Taylor',
                'last_name' => 'Otwell',
                'email' => 'laravl@laravel.com',
                'profesion' => 'developer',
                'sex' => 'male',
            ],
            [
                'first_name' => 'Jhon',
                'last_name' => 'Smith',
                'email' => 'jsmith@jsmith.com',
                'profesion' => 'designer',
                'sex' => 'male',
            ],
            [
                'first_name' => 'Jayne',
                'last_name' => 'Mansfield',
                'email' => 'jmansfield@jmansfield.com',
                'profesion' => 'actress',
                'sex' => 'female',
            ],
            [
                'first_name' => 'Louis',
                'last_name' => 'de Funès',
                'email' => 'ldefunes@ldefunes.com',
                'profesion' => 'actor',
                'sex' => 'male',
            ],
        ];

        DB::table('employees')->insert($data);
    }
}
