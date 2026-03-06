<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicPeriodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('academic_periods')->insert([
            [
                'name' => '2026-I',
                'start_date' => '2026-01-15',
                'end_date' => '2026-05-30',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2026-II',
                'start_date' => '2026-07-01',
                'end_date' => '2026-11-15',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
