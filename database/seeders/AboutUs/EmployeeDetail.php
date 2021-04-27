<?php

namespace Database\Seeders\AboutUs;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     DB::table('employee_details')->insert([
        ['ID'=>'1' , 'EmployeeID'=>'A01' , 'empName'=>'a' , 'position'=>'a' , 'describe'=>'aaa' , 'email'=>'abc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'' , 'zalo'=>'' , 'images'=>'images\AboutUs\team_pic_1.jpg' ],
        ['ID'=>'2' , 'EmployeeID'=>'A02' , 'empName'=>'b' , 'position'=>'b' , 'describe'=>'aaa' , 'email'=>'abc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'' , 'zalo'=>'' , 'images'=>'images\AboutUs\team_pic_2.jpg' ],
        ['ID'=>'3' , 'EmployeeID'=>'A03' , 'empName'=>'c' , 'position'=>'c' , 'describe'=>'aaa' , 'email'=>'abc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'' , 'zalo'=>'' , 'images'=>'images\AboutUs\team_pic_3.jpg' ],
        ['ID'=>'4' , 'EmployeeID'=>'A04' , 'empName'=>'d' , 'position'=>'d' , 'describe'=>'aaa' , 'email'=>'abc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'' , 'zalo'=>'' , 'images'=>'images\AboutUs\team_pic_4.jpg' ],



        ]);
    }
}
