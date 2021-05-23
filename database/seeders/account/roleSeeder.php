<?php

namespace Database\Seeders\account;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            ['Role' => '1', 'Authority' => 'Employee',],
            ['Role' => '2', 'Authority' => 'Owens',],

        ]);
    }
}
