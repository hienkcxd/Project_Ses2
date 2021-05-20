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
        ['ID'=>'1' , 'EmployeeID'=>'A01' , 'empName'=>'Đặng Thế Hiển' , 'position'=>'Tư Vấn Kết Cấu' , 'describe'=>'Chuyên viên tư vấn và thiết kế kết cấu' ,        'email'=>'hien03kc@gmail.com' , 'phone'=>'0981815414' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_1.jpg' ],
        ['ID'=>'2' , 'EmployeeID'=>'A02' , 'empName'=>'Lưu Mộng Thúy' , 'position'=>'Tư Vấn Kiến Trức' , 'describe'=>'Chuyên viên tư vấn và thiết kế kiến trúc' ,    'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_2.jpg' ],
        ['ID'=>'3' , 'EmployeeID'=>'A03' , 'empName'=>'Nguyễn Hùng Vương' , 'position'=>'Tư Vấn Kết Cấu' , 'describe'=>'Chuyên viên tư vấn và thiết kế kết cấu' ,    'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_3.jpg' ],
        ['ID'=>'4' , 'EmployeeID'=>'A04' , 'empName'=>'Nguyễn Hoàng Duy' , 'position'=>'Tư Vấn Kiến Trức' , 'describe'=>'Chuyên viên tư vấn và thiết kế kiến trúc' , 'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_4.jpg' ],
        ['ID'=>'5' , 'EmployeeID'=>'A05' , 'empName'=>'Phan Tấn Phát' , 'position'=>'Kỹ Sư Hiện Trường' , 'describe'=>'Kỹ sư giám sát hiện trường' ,                 'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_5.jpg' ],
        ['ID'=>'6' , 'EmployeeID'=>'A06' , 'empName'=>'Nguyễn Minh Huân' , 'position'=>'Kỹ Sư Hiện Trường' , 'describe'=>'Kỹ sư giám sát hiện trường' ,              'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_6.jpg' ],
        ['ID'=>'7' , 'EmployeeID'=>'A07' , 'empName'=>'Võ Nhật Huy' , 'position'=>'Kỹ Sư Hiện Trường' , 'describe'=>'Kỹ sư giám sát hiện trường' ,                   'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_7.jpg' ],
        ['ID'=>'8' , 'EmployeeID'=>'A08' , 'empName'=>'Trương Tam Phong' , 'position'=>'Kỹ Sư Hiện Trường' , 'describe'=>'Kỹ sư giám sát hiện trường' ,              'email'=>'hien03kc@gmail.com' , 'phone'=>'123241313' , 'facebook'=>'https://www.facebook.com/' , 'zalo'=>'123241313' , 'images'=>'images\AboutUs\team_pic_8.jpg' ],


        ]);
    }
}
