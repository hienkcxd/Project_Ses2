<?php

namespace Database\Seeders\work;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_lists')->insert([
            ['WorkID'=>'HP01', 'WorkName'=>'','Address'=>'',
             'CusID'=>'', 'Price'=>'','EmpID'=>'', 'EmpName'=>'', 'WorkDesc'=>''],

        ]);
    }
}
