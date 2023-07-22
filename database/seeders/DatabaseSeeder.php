<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(EmployeesTableSeeder::class);
        
        Employee::factory(20)->create();
        
        // Employee::factory(10)->create(
        //     [
        //         'post' => 'Eng'
        //     ]
        // );

        //     $arr = array('Engineer' =>'a','teacher'=>'b','technic'=>'c');
        //     $key = array_rand($arr);
        //  Employee::factory(10)->create(
            
        //     [
        //         'post' => $key
        //     ]

        // );
    }
};