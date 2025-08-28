<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("presences")->insert([
            [
                "employee_id" => 1,
                "date" => Carbon::now(),
                "check_in" => Carbon::now(),
                "check_out" => null,
            ],
            [
                "employee_id" => 2,
                "date" => Carbon::now(),
                "check_in" => Carbon::now(),
                "check_out" => null,
            ],
            [
                "employee_id" => 3,
                "date" => Carbon::now(),
                "check_in" => Carbon::now(),
                "check_out" => null,
            ],
        ]);
    }
}
