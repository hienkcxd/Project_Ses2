<?php

namespace Database\Seeders\AboutUs;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_lists')->insert([
            ['EmployeeID'=>'A01','EmpName'=>'Aden','Position'=>'Manager'],
            ['EmployeeID'=>'A02','EmpName'=>'Ben','Position'=>'Directer'],
            ['EmployeeID'=>'A03','EmpName'=>'Chris','Position'=>'Senior Adviser'],
            ['EmployeeID'=>'A04','EmpName'=>'David','Position'=>'Vice President']
        ]);
    }
}
