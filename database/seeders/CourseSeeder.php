<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'name' => 'Programming I',
                'code' => 'CS101',
                'description' => 'Introduction to programming concepts',
                'credits' => 4,
                'teacher_id' => 2,
                'academic_period_id' => 1,
                'capacity' => 30,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Database Systems',
                'code' => 'CS202',
                'description' => 'Relational database design and SQL',
                'credits' => 3,
                'teacher_id' => 3,
                'academic_period_id' => 1,
                'capacity' => 25,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Discrete Mathematics',
                'code' => 'MATH210',
                'description' => 'Logic, sets and combinatorics',
                'credits' => 3,
                'teacher_id' => 1,
                'academic_period_id' => 1,
                'capacity' => 35,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
