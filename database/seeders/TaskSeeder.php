<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table("task")->insert([
            [
                'name' => 'Task 1',
                'employee_id' => 1,
                'description' => 'Description for Task 1',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Task 2',
                'employee_id' => 2,
                'description' => 'Description for Task 2',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Task 3',
                'employee_id' => 3,
                'description' => 'Description for Task 3',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
