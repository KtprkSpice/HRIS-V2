<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use faker\Factory as Faker;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $faker = faker::create();
        DB::table("leave_requests")->insert([
            [
                "employee_id" => 1,
                "status" => "pending",
                "start_date" => Carbon::now(),
                "end_date" => Carbon::parse("2025-09-10"),
                "leave_type" => "sick",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
