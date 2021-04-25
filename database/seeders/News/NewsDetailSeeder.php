<?php

namespace Database\Seeders\News;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_details')->insert([

//            //Insert data detail
//
//            [
//                'NewsDetailID' => 'N01', 'NewsID' => 'N01', 'NewsName' => 'Forest House - Ngôi nhà trong mơ của những người yêu thiên nhiên',
//                'NewsTagName' => 'PCKT',
//                'Day' => '25/02', 'Year' => '2020',
//                'images' => 'images\blog\News_bg_01.jpg'],
//                'contentTop' => 'Với chủ đề “ngôi nhà sống động”, cabin này là dự án dự kiến cho CASA COR 2018, mọi thứ được tận dụng một cách tối đa và vô cùng thưởng thức.Chúng tôi mong muốn kích thích cả năm giác quan của con người, từ mùi, âm thanh, vật liệu tự nhiên cho tới thực vật và ánh sáng. Tất cả đều được tính toán một cách hoàn hảo để tăng cảm giác hạnh phúc cho những ai được sống trong không gian này.',
//                'image1' => 'images\blog\Detail\News_image1_detail_01.jpg',
//                'image2' => 'images\blog\Detail\News_image2_detail_01.jpg',
//                'image3' => 'images\blog\Detail\News_image3_detail_01.jpg',
//                'contentMiddle' => 'Chúng tôi sử dụng những tấm chắn nắng, tấm che bằng gỗ và các khung kính để tạo ra giới hạn ảo, như mang thiên nhiên xanh vào ngôi nhà, đem tới trải nghiệm như đang thực sự sống trong những khu rừng vậy.',
//                'image4' => 'images\blog\Detail\News_image4_detail_01.jpg',
//                'image5' => 'images\blog\Detail\News_image5_detail_01.jpg',
//                'image6' => 'images\blog\Detail\News_image6_detail_01.jpg',
//                'contentBot' => 'Chúng tôi đã lựa chọn cẩn thận những mảnh ghép nhỏ nhất từ thiết kế, tác phẩm nghệ thuật hay đồ dùng nội thất, mộc mạc nhưng vô cùng tinh tế, một sự kết hợp hoàn hảo dành cho những người yêu thiên nhiên nhưng vẫn muốn đáp ứng nhu cầu thoải mái. Thực sự là một ngôi nhà sống động, đầy ắp những kỷ niệm đẹp.',
//                'image7' => 'images\blog\Detail\News_image7_detail_01.jpg',
//                'image8' => 'images\blog\Detail\News_image8_detail_01.jpg',
//                'image9' => 'images\blog\Detail\News_image9_detail_01.jpg',
//            ],

            [
                'NewsDetailID' => 'N01', 'NewsID' => 'N01', 'NewsName' => 'Forest House - Ngôi nhà trong mơ của những người yêu thiên nhiên',
                'NewsTagName' => 'PCKT',
                'Day' => '25/02', 'Year' => '2020',
                'images' => 'images\blog\News_bg_01.jpg',
                'contentTop' => 'Với chủ đề “ngôi nhà sống động”, cabin này là dự án dự kiến cho CASA COR 2018, mọi thứ được tận dụng một cách tối đa và vô cùng thưởng thức.Chúng tôi mong muốn kích thích cả năm giác quan của con người, từ mùi, âm thanh, vật liệu tự nhiên cho tới thực vật và ánh sáng. Tất cả đều được tính toán một cách hoàn hảo để tăng cảm giác hạnh phúc cho những ai được sống trong không gian này. ',
                'image1' => 'images\blog\Detail\News_image1_detail_01.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_01.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_01.jpg',
                'contentMiddle' => 'Chúng tôi sử dụng những tấm chắn nắng, tấm che bằng gỗ và các khung kính để tạo ra giới hạn ảo, như mang thiên nhiên xanh vào ngôi nhà, đem tới trải nghiệm như đang thực sự sống trong những khu rừng vậy.',
                'image4' => 'images\blog\Detail\News_image4_detail_01.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_01.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_01.jpg',
                'contentBot' => 'Chúng tôi đã lựa chọn cẩn thận những mảnh ghép nhỏ nhất từ thiết kế, tác phẩm nghệ thuật hay đồ dùng nội thất, mộc mạc nhưng vô cùng tinh tế, một sự kết hợp hoàn hảo dành cho những người yêu thiên nhiên nhưng vẫn muốn đáp ứng nhu cầu thoải mái. Thực sự là một ngôi nhà sống động, đầy ắp những kỷ niệm đẹp.',
                'image7' => 'images\blog\Detail\News_image7_detail_01.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_01.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_01.jpg',
            ],

        ]);

    }
}
