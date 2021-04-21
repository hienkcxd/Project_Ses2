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
            //mở comment trước khi update data, sau khi update khóa comment để tránh bị lỗi lần sau.
//            ['DistrictID'=>'quan_1', 'DistrictName'=> 'Quận 1'],
//            ['DistrictID'=>'quan_2', 'DistrictName'=> 'Quận 2'],
//            ['DistrictID'=>'quan_3', 'DistrictName'=> 'Quận 3'],
//            ['DistrictID'=>'quan_4', 'DistrictName'=> 'Quận 4'],
//            ['DistrictID'=>'quan_5', 'DistrictName'=> 'Quận 5'],
//            ['DistrictID'=>'quan_6', 'DistrictName'=> 'Quận 6'],
//            ['DistrictID'=>'quan_7', 'DistrictName'=> 'Quận 7'],
//            ['DistrictID'=>'quan_8', 'DistrictName'=> 'Quận 8'],
//            ['DistrictID'=>'quan_9', 'DistrictName'=> 'Quận 9'],
//            ['DistrictID'=>'quan_10', 'DistrictName'=> 'Quận 10'],
//            ['DistrictID'=>'quan_11', 'DistrictName'=> 'Quận 11'],
//            ['DistrictID'=>'quan_12', 'DistrictName'=> 'Quận 12'],
//            ['DistrictID'=>'quan_BinhTan', 'DistrictName'=> 'Quận Bình Tân'],
//            ['DistrictID'=>'quan_BinhThanh', 'DistrictName'=> 'Quận Bình Thạnh'],
//            ['DistrictID'=>'quan_GoVap', 'DistrictName'=> 'Quận Gò Vấp'],
//            ['DistrictID'=>'quan_PhuNhuan', 'DistrictName'=> 'Quận Phú Nhuận'],
//            ['DistrictID'=>'quan_TanBinh', 'DistrictName'=> 'Quận Tân Bình'],
//            ['DistrictID'=>'quan_TanPhu', 'DistrictName'=> 'Quận Tân Phú'],
        ]);
    }
}
