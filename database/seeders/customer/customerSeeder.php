<?php

namespace Database\Seeders\Customer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([

            ['CusID' => 'CS01', 'CusName' => 'Mr.Vũ','CusPhone' => '132132112', 'WorkName'=>'Decor Căn Hộ',
             'Address'=>'Căn hộ 404 - Everich Quận 5','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>'800 Triệu'],

            ['CusID' => 'CS02', 'CusName' => 'Mr.Hoàng','CusPhone' => '090980801', 'WorkName'=>'Thi Công Nhà Phố',
                'Address'=>'46 Mai Chí Thọ - Quận 2','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>'2.3 tỷ'],

            ['CusID' => 'CS03', 'CusName' => 'Ms.Hoa','CusPhone' => '0988123111', 'WorkName'=>'Xây Dựng Biệt Thự',
                'Address'=>'305 Nguyễn Văn Linh - Quận 7','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>'15 tỷ'],

            ['CusID' => 'CS04', 'CusName' => 'Mr.Công','CusPhone' => '0101321412', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 313 - Lê Duẫn Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>'500 Triệu'],

            ['CusID' => 'CS05', 'CusName' => 'Ms.Trường','CusPhone' => '345123122', 'WorkName'=>'Bảo Hành Nhà Phố',
                'Address'=>'101 Nguyễn Văn Đậu - Quận Bình Thạnh','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>'Khấu Trừ 30% phí hợp đồng'],

            ['CusID' => 'CS06', 'CusName' => 'Mr.Toàn','CusPhone' => '659812342', 'WorkName'=>'Thiết Kế Kiến Trúc Biệt Thự',
                'Address'=>'390 Cách Mạng Tháng 8 - Quận 3','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>'80 Triệu'],

            ['CusID' => 'CS07', 'CusName' => 'Ms.Nga','CusPhone' => '341231235', 'WorkName'=>'Xây Dựng Nhà Tân Cổ',
                'Address'=>'40 Đinh Tiên Hoàng - Quận 1','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>'5tỷ3'],

            ['CusID' => 'CS08', 'CusName' => 'Ms.Châu','CusPhone' => '013293212', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 505 - Everich Quận 5','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>'700 Triệu'],

            ['CusID' => 'CS09', 'CusName' => 'Mr.Vũ','CusPhone' => '132132112', 'WorkName'=>'Thi Công Nhà Phố',
                'Address'=>'35 Hoàng Hoa Thám - Quận Tân Bình','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>'1.5 tỷ '],

            ['CusID' => 'CS10', 'CusName' => 'Mr.Công','CusPhone' => '901321432', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'12 Bạch Đằng - Quận Bình Thạnh','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>'900 Triệu'],

            ['CusID' => 'CS11', 'CusName' => 'Ms.Châu','CusPhone' => '013293212', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 807 - lancer Quận 2','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>'400 Triệu'],

            ['CusID' => 'CS12', 'CusName' => 'Ms.Nga','CusPhone' => '333132765', 'WorkName'=>'Nâng Cấp Nhà Phố',
                'Address'=>'80 Điện Biên Phủ - Quận Bình Thạnh','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>'500 Triệu'],

            ['CusID' => 'CS13', 'CusName' => 'Mr.Vương','CusPhone' => '321543213', 'WorkName'=>'Xây Dựng Biệt Thự',
                'Address'=>'31 Lê Duẫn - Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>'9 tỷ'],

            ['CusID' => 'CS14', 'CusName' => 'Mr.Toàn','CusPhone' => '659812342', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'44 Lê Thánh Tôn- Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>'650 Triệu'],

            ['CusID' => 'CS15', 'CusName' => 'Mr.Trường','CusPhone' => '345123122', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'70 Bùi Viện - Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>'950 Triệu'],

        ]);
    }
}
