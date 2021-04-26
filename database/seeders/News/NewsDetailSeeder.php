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

//            [
//                'NewsDetailID' => 'N01', 'NewsID' => 'N01', 'NewsName' => 'Forest House - Ngôi nhà trong mơ của những người yêu thiên nhiên',
//                'NewsTagName' => 'PCKT',
//                'Day' => '25/02', 'Year' => '2021',
//                'images' => 'images\blog\News_bg_01.jpg',
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
//
//            [
//                'NewsDetailID' => 'N02', 'NewsID' => 'N02', 'NewsName' => 'GỖ - Người bạn đa năng trong ngôi nhà',
//                'NewsTagName' => 'NTGD',
//                'Day' => '18/08', 'Year' => '2020',
//                'images' => 'images\blog\News_bg_02.jpg',
//                'contentTop' => 'Gỗ luôn là nguyên vật liệu xuất sắc khi trang trí trong không gian sống. Mang lại không gian thoải mái, ấm áp và tràn đầy vẻ đẹp thiên nhiên. Gỗ thường được nói là “dễ sống” vì bản tính kết nối dễ dàng với bất cứ phong cách nào, từ cổ điện tới đương đại. Đèn trần, lót sàn, làm bàn ghế, kệ đọc sách…. gỗ có thể đứng dưới rất nhiều góc độ để mang lại vẻ đẹp độc đáo cho ngôi nhà.',
//                'image1' => 'images\blog\Detail\News_image1_detail_02.jpg',
//                'image2' => 'images\blog\Detail\News_image2_detail_02.jpg',
//                'image3' => 'images\blog\Detail\News_image3_detail_02.jpg',
//                'contentMiddle' => 'Không gian phòng khách cởi mở',
//                'image4' => 'images\blog\Detail\News_image4_detail_02.jpg',
//                'image5' => 'images\blog\Detail\News_image5_detail_02.jpg',
//                'image6' => 'images\blog\Detail\News_image6_detail_02.jpg',
//                'contentBot' => 'Phòng tắm thân thiện với môi trường',
//                'image7' => 'images\blog\Detail\News_image7_detail_02.jpg',
//                'image8' => 'images\blog\Detail\News_image8_detail_02.jpg',
//                'image9' => 'images\blog\Detail\News_image9_detail_02.jpg',
//            ],
//            [
//                'NewsDetailID' => 'N03', 'NewsID' => 'N03', 'NewsName' => 'Hãy chọn ghế đúng',
//                'NewsTagName' => 'NTGD',
//                'Day' => '09/07', 'Year' => '2020',
//                'images' => 'images\blog\News_bg_03.jpg',
//                'contentTop' => 'Trong đồ tất cả đồ dùng nội thất, thứ khiến tôi cảm giác thích thú và muốn viết về nó nhất có lẽ luôn là ghế. Chúng ta có rất nhiều loại ghế được làm từ nhiều chất liệu khác nhau, phải kể đến như gỗ, đá, kim loại, nhựa,... còn chưa kể đến được bọc với nhiều loại vải, da với đủ màu sắc, kích cỡ, kiểu dáng, công năng như ghế ghế đợi, ghế văn phòng, ghế tàu hỏa, xe buýt, ghế điện, ngai vàng (ghế dành cho vua chúa), ghế tập đi… (Theo Wikipedia) - tất nhiên rồi, và sẽ còn đa dạng hơn nữa trong nhiều năm tiếp theo. Ghế là một tuyệt phẩm, đòi hỏi kiến trúc sư cần cân bằng giữa ý tưởng và công dụng của nó. Nhiều chiếc ghế được thiết kế ra, ý tưởng vô cùng táo táo nhưng không hề thoải mái khi ngồi lên, đó là lệch tông, nhưng nhiều chiếc ghế nhìn đơn giản nhưng khiến cho nhiều người cảm thấy thích thú và đạt tiêu chuẩn, đúng với chức năng cơ bản vốn có của một chiếc ghế thông thường.',
//                'image1' => 'images\blog\Detail\News_image1_detail_03.jpg',
//                'image2' => 'images\blog\Detail\News_image2_detail_03.jpg',
//                'image3' => 'images\blog\Detail\News_image3_detail_03.jpg',
//                'contentMiddle' => 'Chúng ta biết Hans Wegner “Papa Bear” (1954), một kiến trúc sư đầy tài năng và niềm đam mê với thiết kế ghế, cho ra đời nhiều loại ghế độc đáo, hiện đại và tỉ mỉ từng chi tiết, đặc biệt hơn khi  mang lại trải nghiệm tuyệt vời cho người sử dụng.Không chỉ với chức năng chính là để ngồi, ghế ngày nay được thiết kế đẹp và kiểu dáng hơn để trang trí và tô lên phong cách, vẻ đẹp của ngôi nhà. Chúng ta biết tới “ngai vàng” dành cho vua chúa là một chiếc ghế được điêu khắc tinh vi đặt trong chính điện cũng một phần thể hiện uy quyền và sang trọng của danh vua ấy. ',
//                'image4' => 'images\blog\Detail\News_image4_detail_03.jpg',
//                'image5' => 'images\blog\Detail\News_image5_detail_03.jpg',
//                'image6' => 'images\blog\Detail\News_image6_detail_03.jpg',
//                'contentBot' => 'Chính vì vậy mà việc lựa chọn ghế vô cùng quan trọng với mỗi ngôi nhà, để phù hợp với phong cách, hòa trộn cùng màu sắc đồ nội thất, màu sơn tường khác, hay để làm nổi bật căn phòng quả không phải điều đơn giản, đòi hỏi gia chủ hay kiến trúc sư cần có con mắt nghệ thuật và chuyên môn.
// ',
//                'image7' => 'images\blog\Detail\News_image7_detail_03.jpg',
//                'image8' => 'images\blog\Detail\News_image8_detail_03.jpg',
//                'image9' => 'images\blog\Detail\News_image9_detail_03.jpg',
//            ],
//            [
//                'NewsDetailID' => 'N04', 'NewsID' => 'N04', 'NewsName' => '5 cách tạo nên phòng ngủ ấm áp',
//                'NewsTagName' => 'PCKT',
//                'Day' => '07/07', 'Year' => '2020',
//                'images' => 'images\blog\News_bg_04.jpg',
//                'contentTop' => 'Phòng ngủ luôn là nơi ưa thích của mỗi người, đúng không nhỉ? Người ta thường nói “Ăn được ngủ được là tiên”, chính vì vậy mà nhiều người luôn cố gắng để trang trí, thiết kế cho mình và gia đình phòng ngủ ấm áp, mục đích cuối cùng vẫn để có được một giấc ngủ ngon và bình an. Hôm nay chúng ta cùng học cách để biến ngôi nhà của bạn thêm ấm áp và đặc biệt hơn nhé!1- GỗMột trong những mẹo để sưởi ấm không gian không chỉ là phòng ngủ mà còn được áp dụng cho phòng khách, bếp… đó chính là mang yếu tố tự nhiên vào ngôi nhà của bạn, và đặc biệt hơn hết chính là gỗ. Gỗ ngày nay được dùng nhiều trong thiết kế giường, ghế, bàn, hộc đựng…. với nhiều màu sắc đặc trưng của từng loại gỗ và kiểu dáng khác nhau. Thật là một thiếu sót nếu bạn bỏ qua mẹo này đấy nhé!',
//                'image1' => 'images\blog\Detail\News_image1_detail_04.jpg',
//                'image2' => 'images\blog\Detail\News_image2_detail_04.jpg',
//                'image3' => 'images\blog\Detail\News_image3_detail_04.jpg',
//                'contentMiddle' => '2- Cây xanhCây xanh là một trong những sinh vật quan trọng và nổi bật nhất trên trái đất nhưng chúng ta mới chỉ bắt đầu hiểu về quy mô tồn tại của chúng. Chúng chứa một lượng lớn carbon, giữ nước và tạo ra không khí trong lành cùng rất nhiều lợi ích quan trọng cho con người”, chuyên gia Thomas Crowther của Viện nghiên cứu Môi trường và Lâm nghiệp Đại học Yale cho biết - Theo Zing newsNhưng một điều đáng lưu ý là việc để quá nhiều cây xanh ở phòng ngủ kín, điều này sẽ thực sự nguy hiểm vì trong quá trình quang hợp của cây xanh vào ban đêm, cây sẽ hút khí Oxi, thải ra Cacbonic và hơi nước, khiến chúng ta ngạt thở và nguy hiểm tới tính mạng. Hãy khôn ngoan để phù hợp hóa số lượng cây xanh trong phòng ngủ của bạn nha.3- Nội thấtNếu thiếu nội thất, phòng ngủ sẽ thật trống trãi và cô đơn. Ngoài giường ngủ và cây xanh, chúng ta cũng cần có đèn ngủ, bàn đựng đồ, đồng hồ, hay thậm chí là lò sưởi ấm khi mùa đông về…. tất cả hòa quyện tạo nên không gian ấm áp và hoàn hảo cho bạn và gia đình. ',
//                'image4' => 'images\blog\Detail\News_image4_detail_04.jpg',
//                'image5' => 'images\blog\Detail\News_image5_detail_04.jpg',
//                'image6' => 'images\blog\Detail\News_image6_detail_04.jpg',
//                'contentBot' => '4- Gối ômTrang trí gối với nhiều chất liệu, họa tiết và màu sắc khác nhau giúp cho căn phòng thêm sinh động, hãy chọn những tông màu cam, đỏ, vàng để thêm tia nắng ấm áp nhé!5- Thảm Với bất cứ style phòng ngủ nào từ cổ điển, hiện đại, cho tới đương đại, bạn sẽ luôn tìm được tấm thảm bạn yêu thích, nếu bạn thật sự muốn tìm, hãy tin tôi đi. Thảm sàn như là vật dụng không thể thiếu của mỗi gia đình, không chỉ là để chống trơn trượt, chống ồn mà còn để trang trí và giữ ấm cho ngôi nhà.',
//                'image7' => 'images\blog\Detail\News_image7_detail_04.jpg',
//                'image8' => 'images\blog\Detail\News_image8_detail_04.jpg',
//                'image9' => 'images\blog\Detail\News_image9_detail_04.jpg',
//            ],


        ]);

    }
}
