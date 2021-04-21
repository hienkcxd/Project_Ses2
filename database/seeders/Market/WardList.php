<?php

namespace Database\Seeders\Market;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ward_lists')->insert([
        //mở comment trước khi update data, sau khi update khóa comment để tránh bị lỗi lần sau.

//            //update các phường quận 1.
//            ['WardID'=>'1',  'DistrictName'=> 'Quận 1', 'WardName'=>'Bến Nghé'],
//            ['WardID'=>'2',  'DistrictName'=> 'Quận 1', 'WardName'=>'Bến Thành'],
//            ['WardID'=>'3',  'DistrictName'=> 'Quận 1', 'WardName'=>'Cầu Kho'],
//            ['WardID'=>'4',  'DistrictName'=> 'Quận 1', 'WardName'=>'Cầu Ông Lãnh'],
//            ['WardID'=>'5',  'DistrictName'=> 'Quận 1', 'WardName'=>'Cô Giang'],
//            ['WardID'=>'6',  'DistrictName'=> 'Quận 1', 'WardName'=>'Đa Kao'],
//            ['WardID'=>'7',  'DistrictName'=> 'Quận 1', 'WardName'=>'Nguyễn Cư Trinh'],
//            ['WardID'=>'8',  'DistrictName'=> 'Quận 1', 'WardName'=>'Nguyễn Thái Bình'],
//            ['WardID'=>'9',  'DistrictName'=> 'Quận 1', 'WardName'=>'Phạm Ngũ Lão'],
//            ['WardID'=>'10', 'DistrictName'=> 'Quận 1', 'WardName'=>'Tân Định'],
//
//            //update các phường quận 2.
//            ['WardID'=>'11', 'DistrictName'=> 'Quận 2', 'WardName'=>'An Khánh'],
//            ['WardID'=>'12', 'DistrictName'=> 'Quận 2', 'WardName'=>'An Lợi Đông'],
//            ['WardID'=>'13', 'DistrictName'=> 'Quận 2', 'WardName'=>'An Phú'],
//            ['WardID'=>'14', 'DistrictName'=> 'Quận 2', 'WardName'=>'Bình An'],
//            ['WardID'=>'15', 'DistrictName'=> 'Quận 2', 'WardName'=>'Bình Khánh'],
//            ['WardID'=>'16', 'DistrictName'=> 'Quận 2', 'WardName'=>'Bình Trưng Đông'],
//            ['WardID'=>'17', 'DistrictName'=> 'Quận 2', 'WardName'=>'Bình Trưng Tây'],
//            ['WardID'=>'18', 'DistrictName'=> 'Quận 2', 'WardName'=>'Cát Lái'],
//            ['WardID'=>'19', 'DistrictName'=> 'Quận 2', 'WardName'=>'Thạnh Mỹ Lợi'],
//            ['WardID'=>'20', 'DistrictName'=> 'Quận 2', 'WardName'=>'Thảo Điền'],
//            ['WardID'=>'21', 'DistrictName'=> 'Quận 2', 'WardName'=>'Thủ Thiêm'],
//
//            //update các phường quận 3.
//            ['WardID'=>'23', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 01'],
//            ['WardID'=>'24', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 02'],
//            ['WardID'=>'25', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 03'],
//            ['WardID'=>'26', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 04'],
//            ['WardID'=>'27', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 05'],
//            ['WardID'=>'28', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 06'],
//            ['WardID'=>'29', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 07'],
//            ['WardID'=>'30', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 08'],
//            ['WardID'=>'31', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 09'],
//            ['WardID'=>'32', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 10'],
//            ['WardID'=>'33', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 11'],
//            ['WardID'=>'34', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 12'],
//            ['WardID'=>'35', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 13'],
//            ['WardID'=>'36', 'DistrictName'=> 'Quận 3', 'WardName'=>'Phường 14'],
//
//            //update các phường quận 4.
//            ['WardID'=>'37', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 01'],
//            ['WardID'=>'38', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 02'],
//            ['WardID'=>'39', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 03'],
//            ['WardID'=>'40', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 04'],
//            ['WardID'=>'41', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 05'],
//            ['WardID'=>'42', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 06'],
//            ['WardID'=>'43', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 07'],
//            ['WardID'=>'44', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 08'],
//            ['WardID'=>'45', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 09'],
//            ['WardID'=>'46', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 10'],
//            ['WardID'=>'47', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 11'],
//            ['WardID'=>'48', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 12'],
//            ['WardID'=>'49', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 13'],
//            ['WardID'=>'50', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 14'],
//            ['WardID'=>'51', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 15'],
//            ['WardID'=>'52', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 16'],
//            ['WardID'=>'53', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 17'],
//            ['WardID'=>'54', 'DistrictName'=> 'Quận 4', 'WardName'=>'Phường 18'],
//
//            //update các phường quận 5.
//            ['WardID'=>'55', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 01'],
//            ['WardID'=>'56', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 02'],
//            ['WardID'=>'57', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 03'],
//            ['WardID'=>'58', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 04'],
//            ['WardID'=>'59', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 05'],
//            ['WardID'=>'60', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 06'],
//            ['WardID'=>'61', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 07'],
//            ['WardID'=>'62', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 08'],
//            ['WardID'=>'63', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 09'],
//            ['WardID'=>'64', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 10'],
//            ['WardID'=>'65', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 11'],
//            ['WardID'=>'66', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 12'],
//            ['WardID'=>'67', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 13'],
//            ['WardID'=>'68', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 14'],
//            ['WardID'=>'69', 'DistrictName'=> 'Quận 5', 'WardName'=>'Phường 15'],
//
//            //update các phường quận 6.
//            ['WardID'=>'70', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 01'],
//            ['WardID'=>'71', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 02'],
//            ['WardID'=>'72', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 03'],
//            ['WardID'=>'73', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 04'],
//            ['WardID'=>'74', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 05'],
//            ['WardID'=>'75', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 06'],
//            ['WardID'=>'76', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 07'],
//            ['WardID'=>'77', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 08'],
//            ['WardID'=>'78', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 09'],
//            ['WardID'=>'79', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 10'],
//            ['WardID'=>'80', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 11'],
//            ['WardID'=>'81', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 12'],
//            ['WardID'=>'82', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 13'],
//            ['WardID'=>'83', 'DistrictName'=> 'Quận 6', 'WardName'=>'Phường 14'],
//
//            //update các phường quận 7.
//            ['WardID'=>'84', 'DistrictName'=> 'Quận 7', 'WardName'=>'Bình Thuận'],
//            ['WardID'=>'85', 'DistrictName'=> 'Quận 7', 'WardName'=>'Phú Mỹ'],
//            ['WardID'=>'86', 'DistrictName'=> 'Quận 7', 'WardName'=>'Phú Thuận'],
//            ['WardID'=>'87', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Hưng'],
//            ['WardID'=>'88', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Kiểng'],
//            ['WardID'=>'89', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Phong'],
//            ['WardID'=>'90', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Phú'],
//            ['WardID'=>'91', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Quy'],
//            ['WardID'=>'92', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Thuận Đông'],
//            ['WardID'=>'93', 'DistrictName'=> 'Quận 7', 'WardName'=>'Tân Thuận Tây'],

            //update các phường quận 8.
            ['WardID'=>'84', 'DistrictName'=> 'Quận 7', 'WardName'=>'Bình Thuận'],
            ['WardID'=>'85', 'DistrictName'=> 'Quận 7', 'WardName'=>'Phú Mỹ'],
        ]);
    }
}
