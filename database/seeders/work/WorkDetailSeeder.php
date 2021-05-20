<?php

namespace Database\Seeders\work;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_details')->insert([

            ['WorkDetail_ID' => 'HP01', 'WorkID' => '','CusID' => '',
             'Address'=>'', 'Price'=>'','EmpName'=>'', 'EmpPhone'=>'',
             'registration'=>'', 'construction'=>'', 'Architecture'=>'','Progress'=>''],


        ]);
    }
}
