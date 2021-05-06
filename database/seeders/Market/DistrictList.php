<?php

namespace Database\Seeders\Market;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district_lists')->insert([
//            mở comment trước khi update data, sau khi update khóa comment để tránh bị lỗi lần sau.
//            ['DistrictID'=>1, 'DistrictName'=> 'Quận 1'],
//            ['DistrictID'=>2, 'DistrictName'=> 'Quận 2'],
//            ['DistrictID'=>3, 'DistrictName'=> 'Quận 3'],
//            ['DistrictID'=>4, 'DistrictName'=> 'Quận 4'],
//            ['DistrictID'=>5, 'DistrictName'=> 'Quận 5'],
//            ['DistrictID'=>6, 'DistrictName'=> 'Quận 6'],
//            ['DistrictID'=>7, 'DistrictName'=> 'Quận 7'],
//            ['DistrictID'=>8, 'DistrictName'=> 'Quận 8'],
//            ['DistrictID'=>9, 'DistrictName'=> 'Quận 10'],
//            ['DistrictID'=>10, 'DistrictName'=> 'Quận 11'],
//            ['DistrictID'=>11, 'DistrictName'=> 'Quận 12'],
//            ['DistrictID'=>12, 'DistrictName'=> 'Quận Bình Tân'],
//            ['DistrictID'=>13, 'DistrictName'=> 'Quận Bình Thạnh'],
//            ['DistrictID'=>14, 'DistrictName'=> 'Quận Gò Vấp'],
//            ['DistrictID'=>15, 'DistrictName'=> 'Quận Phú Nhuận'],
//            ['DistrictID'=>16, 'DistrictName'=> 'Quận Tân Bình'],
//            ['DistrictID'=>17, 'DistrictName'=> 'Quận Tân Phú'],
        ]);
    }
}
