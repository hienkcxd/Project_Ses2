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

            ['WorkDetail_ID' => 1, 'WorkID' => 'TC-DCH01','CusID' => 'CS01', 'CusPhone' => '132132112',
             'Address'=>'Căn hộ 404 - Everich Quận 5', 'Price_Int'=>800,'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321',
             'registration'=>'x', 'construction'=>'30%', 'Architecture'=>'0%','Progress'=>'20%'],

            ['WorkDetail_ID' => 2, 'WorkID' => 'TC-NP01','CusID' => 'CS02', 'CusPhone' => '090980801',
                'Address'=>'46 Mai Chí Thọ - Quận 2', 'Price_Int'=>2300,'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311',
                'registration'=>'100%', 'construction'=>'40%', 'Architecture'=>'0%','Progress'=>'35%'],

            ['WorkDetail_ID' => 3, 'WorkID' => 'TC-BT01','CusID' => 'CS03', 'CusPhone' => '0988123111',
                'Address'=>'305 Nguyễn Văn Linh - Quận 7', 'Price_Int'=>15000,'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132',
                'registration'=>'100%', 'construction'=>'60%', 'Architecture'=>'0%','Progress'=>'50%'],

            ['WorkDetail_ID' => 4, 'WorkID' => 'TC-DCH02','CusID' => 'CS04', 'CusPhone' => '0101321412',
                'Address'=>'Căn hộ 313 - Lê Duẫn Quận 1', 'Price_Int'=>500,'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441',
                'registration'=>'x', 'construction'=>'100%', 'Architecture'=>'80%','Progress'=>'90%'],

            ['WorkDetail_ID' => 5, 'WorkID' => 'BH-NP01','CusID' => 'CS05', 'CusPhone' => '345123122',
                'Address'=>'101 Nguyễn Văn Đậu - Quận Bình Thạnh', 'Price_Int'=>50,'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132',
                'registration'=>'x', 'construction'=>'90%', 'Architecture'=>'100%','Progress'=>'90%'],

            ['WorkDetail_ID' => 6, 'WorkID' => 'TK-BT01','CusID' => 'CS06', 'CusPhone' => '659812342',
                'Address'=>'390 Cách Mạng Tháng 8 - Quận 3', 'Price_Int'=>80,'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'90%','Progress'=>'90%'],

            ['WorkDetail_ID' => 7, 'WorkID' => 'TC-NTC01','CusID' => 'CS07', 'CusPhone' => '341231235',
                'Address'=>'40 Đinh Tiên Hoàng - Quận 1', 'Price_Int'=>5300,'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321',
                'registration'=>'100%', 'construction'=>'20%', 'Architecture'=>'0%','Progress'=>'25%'],

            ['WorkDetail_ID' => 8, 'WorkID' => 'TC-DCH03','CusID' => 'CS08', 'CusPhone' => '013293212',
                'Address'=>'Căn hộ 505 - Everich Quận 5', 'Price_Int'=>700,'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'90%','Progress'=>'90%'],

            ['WorkDetail_ID' => 9, 'WorkID' => 'TC-NP02','CusID' => 'CS09', 'CusPhone' => '132132112',
                'Address'=>'35 Hoàng Hoa Thám - Quận Tân Bình', 'Price_Int'=>1500,'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311',
                'registration'=>'100%', 'construction'=>'10%', 'Architecture'=>'0%','Progress'=>'10%'],

            ['WorkDetail_ID' => 10, 'WorkID' => 'TC-DCH04','CusID' => 'CS10', 'CusPhone' => '901321432',
                'Address'=>'12 Bạch Đằng - Quận Bình Thạnh', 'Price_Int'=>900,'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'10%','Progress'=>'10%'],

            ['WorkDetail_ID' => 11, 'WorkID' => 'TC-DCH05','CusID' => 'CS11', 'CusPhone' => '013293212',
                'Address'=>'Căn hộ 807 - lancer Quận 2', 'Price_Int'=>400,'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'30%','Progress'=>'30%'],

            ['WorkDetail_ID' => 12, 'WorkID' => 'NC-NP01','CusID' => 'CS12', 'CusPhone' => '333132765',
                'Address'=>'80 Điện Biên Phủ - Quận Bình Thạnh', 'Price_Int'=>500,'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321',
                'registration'=>'100%', 'construction'=>'40%', 'Architecture'=>'0%','Progress'=>'30%'],

            ['WorkDetail_ID' => 13, 'WorkID' => 'TC-BT02','CusID' => 'CS13', 'CusPhone' => '321543213',
                'Address'=>'31 Lê Duẫn - Quận 1', 'Price_Int'=>9000,'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441',
                'registration'=>'100%', 'construction'=>'70%', 'Architecture'=>'0%','Progress'=>'40%'],

            ['WorkDetail_ID' => 14, 'WorkID' => 'TC-NT01','CusID' => 'CS14', 'CusPhone' => '659812342',
                'Address'=>'44 Lê Thánh Tôn- Quận 1', 'Price_Int'=>650,'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'40%','Progress'=>'40%'],

            ['WorkDetail_ID' => 15, 'WorkID' => 'TC-NT02','CusID' => 'CS15', 'CusPhone' => '345123122',
                'Address'=>'70 Bùi Viện - Quận 1', 'Price_Int'=>950,'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441',
                'registration'=>'x', 'construction'=>'x', 'Architecture'=>'70%','Progress'=>'70%'],

        ]);
    }
}
