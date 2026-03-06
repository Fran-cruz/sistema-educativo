<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grades')->insert([
            [
                'title' => 'Parcial 1',
                'description' => 'First midterm exam',
                'score' => 85,
                'weight' => 30,
                'evaluation_date' => now(),
                'enrollment_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Proyecto',
                'description' => 'Course project',
                'score' => 90,
                'weight' => 40,
                'evaluation_date' => now(),
                'enrollment_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parcial 1',
                'description' => 'First exam',
                'score' => 78,
                'weight' => 30,
                'evaluation_date' => now(),
                'enrollment_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
