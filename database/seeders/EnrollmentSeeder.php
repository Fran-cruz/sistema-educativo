<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('enrollments')->insert([
            [
                'enrollment_date' => now(),
                'status' => 'inscrito',
                'final_average' => null,
                'student_id' => 1,
                'course_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'enrollment_date' => now(),
                'status' => 'inscrito',
                'final_average' => null,
                'student_id' => 2,
                'course_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'enrollment_date' => now(),
                'status' => 'inscrito',
                'final_average' => null,
                'student_id' => 1,
                'course_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
