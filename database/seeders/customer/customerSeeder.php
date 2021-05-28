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
             'Address'=>'Căn hộ 404 - Everich Quận 5','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>800],

            ['CusID' => 'CS02', 'CusName' => 'Mr.Hoàng','CusPhone' => '090980801', 'WorkName'=>'Thi Công Nhà Phố',
                'Address'=>'46 Mai Chí Thọ - Quận 2','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>2300],

            ['CusID' => 'CS03', 'CusName' => 'Ms.Hoa','CusPhone' => '0988123111', 'WorkName'=>'Xây Dựng Biệt Thự',
                'Address'=>'305 Nguyễn Văn Linh - Quận 7','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>15000],

            ['CusID' => 'CS04', 'CusName' => 'Mr.Công','CusPhone' => '0101321412', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 313 - Lê Duẫn Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>500],

            ['CusID' => 'CS05', 'CusName' => 'Ms.Trường','CusPhone' => '345123122', 'WorkName'=>'Bảo Hành Nhà Phố',
                'Address'=>'101 Nguyễn Văn Đậu - Quận Bình Thạnh','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0988138322', 'Price'=>50],

            ['CusID' => 'CS06', 'CusName' => 'Mr.Toàn','CusPhone' => '659812342', 'WorkName'=>'Thiết Kế Kiến Trúc Biệt Thự',
                'Address'=>'390 Cách Mạng Tháng 8 - Quận 3','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>80 ],

            ['CusID' => 'CS07', 'CusName' => 'Ms.Nga','CusPhone' => '341231235', 'WorkName'=>'Xây Dựng Nhà Tân Cổ',
                'Address'=>'40 Đinh Tiên Hoàng - Quận 1','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>5300],

            ['CusID' => 'CS08', 'CusName' => 'Ms.Châu','CusPhone' => '013293212', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 505 - Everich Quận 5','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>700 ],

            ['CusID' => 'CS09', 'CusName' => 'Mr.Vũ','CusPhone' => '132132112', 'WorkName'=>'Thi Công Nhà Phố',
                'Address'=>'35 Hoàng Hoa Thám - Quận Tân Bình','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>1500],

            ['CusID' => 'CS10', 'CusName' => 'Mr.Công','CusPhone' => '901321432', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'12 Bạch Đằng - Quận Bình Thạnh','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>900],

            ['CusID' => 'CS11', 'CusName' => 'Ms.Châu','CusPhone' => '013293212', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'Căn hộ 807 - lancer Quận 2','EmpID'=>'A06', 'EmpName'=>'Nguyễn Minh Huân', 'EmpPhone'=>'0977654311', 'Price'=>400],

            ['CusID' => 'CS12', 'CusName' => 'Ms.Nga','CusPhone' => '333132765', 'WorkName'=>'Nâng Cấp Nhà Phố',
                'Address'=>'80 Điện Biên Phủ - Quận Bình Thạnh','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>500],

            ['CusID' => 'CS13', 'CusName' => 'Mr.Vương','CusPhone' => '321543213', 'WorkName'=>'Xây Dựng Biệt Thự',
                'Address'=>'31 Lê Duẫn - Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>9000],

            ['CusID' => 'CS14', 'CusName' => 'Mr.Toàn','CusPhone' => '659812342', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'44 Lê Thánh Tôn- Quận 1','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>650],

            ['CusID' => 'CS15', 'CusName' => 'Mr.Trường','CusPhone' => '345123122', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'70 Bùi Viện - Quận 1','EmpID'=>'A08', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>950],

            ['CusID' => 'CS16', 'CusName' => 'Mr.Tuấn','CusPhone' => '0931123322', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'302 Lancer - Quận 2','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>810],

            ['CusID' => 'CS17', 'CusName' => 'Mr.Linh','CusPhone' => '0168390213', 'WorkName'=>'Thiết Kế Biệt Thự',
                'Address'=>'20 Hoàng Hoa Thám - Quận Bình Thạnh','EmpID'=>'A03', 'EmpName'=>'Nguyễn Hùng Vương', 'EmpPhone'=>'4132445512', 'Price'=>150],

            ['CusID' => 'CS18', 'CusName' => 'Ms.Hương','CusPhone' => '0909113321', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'20 Bùi Viện - Quận 1','EmpID'=>'A02', 'EmpName'=>'Lưu Mộng Thúy', 'EmpPhone'=>'0103231132', 'Price'=>350],

            ['CusID' => 'CS19', 'CusName' => 'Ms.Thắm','CusPhone' => '0908814414', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'40 Lê Duẫn - Quận 1','EmpID'=>'A04', 'EmpName'=>'Nguyễn Hoàng Duy', 'EmpPhone'=>'3356532132', 'Price'=>450],

            ['CusID' => 'CS20', 'CusName' => 'Ms.Chấu','CusPhone' => '0909888345', 'WorkName'=>'Xây Nhà Phố',
                'Address'=>'15 Lê Quang Định - Quận Bình Thạnh','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>1550],

            ['CusID' => 'CS21', 'CusName' => 'Mr.Công','CusPhone' => '0163928832', 'WorkName'=>'Xây Nhà Tân Cổ',
                'Address'=>'11 Nguyễn Văn Linh - Quận 7','EmpID'=>'A02', 'EmpName'=>'Lưu Mộng Thúy', 'EmpPhone'=>'0103231132', 'Price'=>5550],

            ['CusID' => 'CS22', 'CusName' => 'Mr.Long','CusPhone' => '0909132212', 'WorkName'=>'Bảo Hành Biệt Thự',
                'Address'=>'25 Lê Duẫn - Quận 1','EmpID'=>'A03', 'EmpName'=>'Nguyễn Hùng Vương', 'EmpPhone'=>'4132445512', 'Price'=>50],

            ['CusID' => 'CS23', 'CusName' => 'Mr.Long','CusPhone' => '0913321998', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'203 Poganic Nguyễn Thượng Hiền - Quận Bình Thạnh','EmpID'=>'A05', 'EmpName'=>'Phan Tấn Phát', 'EmpPhone'=>'0908476321', 'Price'=>650],

            ['CusID' => 'CS24', 'CusName' => 'Mr.Thuận','CusPhone' => '0492333211', 'WorkName'=>'Decor Căn Hộ',
                'Address'=>'155 Everich - Quận 5','EmpID'=>'A07', 'EmpName'=>'Võ Nhật Huy', 'EmpPhone'=>'0999132441', 'Price'=>850],

            ['CusID' => 'CS25', 'CusName' => 'Mr.Thế','CusPhone' => '0913213213', 'WorkName'=>'Thi Công Nội Thất',
                'Address'=>'43 Nguyễn Oanh - Quận Gò Vấp','EmpID'=>'A08', 'EmpName'=>'Trương Tam Phong', 'EmpPhone'=>'0132234132', 'Price'=>550],

        ]);
    }
}
