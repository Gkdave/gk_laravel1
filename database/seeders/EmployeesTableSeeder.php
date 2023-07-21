<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'emp_id' => '111',
                'name' => 'Gajendra Dave',
                'excerpt' =>'Summary One',
                'dob' => '1959-01-10',
                'post' => 'Engineer',
                'sallary' => 50000,
                'address' =>'Banswara',
                'min_to_read' => 2,
                'image_path' =>'Empty',
                'is_published' =>false,

            ],
            [
                'emp_id' => '111',
                'name' => 'Himanshu Dave',
                'excerpt' =>'Summary two',
                'dob' => '1989-03-17',
                'post' => 'Engineer',
                'sallary' => 125000,
                'address' =>'Udiapur',
                'min_to_read' => 2,
                'image_path' =>'Empty',
                'is_published' =>false,
            ],
        ];
        foreach($employees as $key => $value){
            Employee::create($value);
        }
    }
}
