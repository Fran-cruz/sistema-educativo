<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'employee_code' => 'T001',
                'specialty' => 'Mathematics',
                'hire_date' => '2020-01-15',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_code' => 'T002',
                'specialty' => 'Programming',
                'hire_date' => '2019-08-10',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_code' => 'T003',
                'specialty' => 'Databases',
                'hire_date' => '2021-03-05',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
