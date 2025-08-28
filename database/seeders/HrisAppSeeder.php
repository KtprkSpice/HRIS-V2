<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use faker\Factory as faker;

class HrisAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        DB::table('roles')->insert([
            [
                'name' => 'hr',
                'description' => 'Employees Data Management',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'employee',
                'description' => 'Employee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'admin',
                'description' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('departments')->insert([
            [
                'name' => 'Human Resources',
                'description' => 'Handles employee relations and benefits',
            ],
            [
                'name' => 'Finance',
                'description' => 'Handles financial planning and analysis',
            ],
            [
                'name' => 'IT',
                'description' => 'Handles technology and computer systems',
            ],
        ]);

        DB::table('employees')->insert([
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'department_id' => 1,
                'address' => $faker->address(),
                'status' => 'active',
                'phone' => $faker->phoneNumber(),
                'salary' => $faker->randomFloat(2, 4500000, 5000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'department_id' => 2,
                'address' => $faker->address(),
                'status' => 'active',
                'phone' => $faker->phoneNumber(),
                'salary' => $faker->randomFloat(2, 4500000, 5000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'department_id' => 3,
                'address' => $faker->address(),
                'status' => 'active',
                'phone' => $faker->phoneNumber(),
                'salary' => $faker->randomFloat(2, 4500000, 5000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

    }
}
