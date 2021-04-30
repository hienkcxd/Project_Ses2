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
            [
                'NewsDetailID' => 'N02', 'NewsID' => 'N02', 'NewsName' => 'GỖ - Người bạn đa năng trong ngôi nhà',
                'NewsTagName' => 'NTGD',
                'Day' => '18/08', 'Year' => '2020',
                'images' => 'images\blog\News_bg_02.jpg',
                'contentTop' => 'Gỗ luôn là nguyên vật liệu xuất sắc khi trang trí trong không gian sống. Mang lại không gian thoải mái, ấm áp và tràn đầy vẻ đẹp thiên nhiên. Gỗ thường được nói là “dễ sống” vì bản tính kết nối dễ dàng với bất cứ phong cách nào, từ cổ điện tới đương đại. Đèn trần, lót sàn, làm bàn ghế, kệ đọc sách…. gỗ có thể đứng dưới rất nhiều góc độ để mang lại vẻ đẹp độc đáo cho ngôi nhà.',
                'image1' => 'images\blog\Detail\News_image1_detail_02.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_02.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_02.jpg',
                'contentMiddle' => 'Không gian phòng khách cởi mở',
                'image4' => 'images\blog\Detail\News_image4_detail_02.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_02.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_02.jpg',
                'contentBot' => 'Phòng tắm thân thiện với môi trường',
                'image7' => 'images\blog\Detail\News_image7_detail_02.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_02.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_02.jpg',
            ],
            
            [
                'NewsDetailID' => 'N03', 'NewsID' => 'N03', 'NewsName' => 'Hãy chọn ghế đúng',
                'NewsTagName' => 'NTGD',
                'Day' => '09/07', 'Year' => '2020',
                'images' => 'images\blog\News_bg_03.jpg',
                'contentTop' => 'Trong đồ tất cả đồ dùng nội thất, thứ khiến tôi cảm giác thích thú và muốn viết về nó nhất có lẽ luôn là ghế. Chúng ta có rất nhiều loại ghế được làm từ nhiều chất liệu khác nhau, phải kể đến như gỗ, đá, kim loại, nhựa,... còn chưa kể đến được bọc với nhiều loại vải, da với đủ màu sắc, kích cỡ, kiểu dáng, công năng như ghế ghế đợi, ghế văn phòng, ghế tàu hỏa, xe buýt, ghế điện, ngai vàng (ghế dành cho vua chúa), ghế tập đi… (Theo Wikipedia) - tất nhiên rồi, và sẽ còn đa dạng hơn nữa trong nhiều năm tiếp theo. Ghế là một tuyệt phẩm, đòi hỏi kiến trúc sư cần cân bằng giữa ý tưởng và công dụng của nó. Nhiều chiếc ghế được thiết kế ra, ý tưởng vô cùng táo táo nhưng không hề thoải mái khi ngồi lên, đó là lệch tông, nhưng nhiều chiếc ghế nhìn đơn giản nhưng khiến cho nhiều người cảm thấy thích thú và đạt tiêu chuẩn, đúng với chức năng cơ bản vốn có của một chiếc ghế thông thường.',
                'image1' => 'images\blog\Detail\News_image1_detail_03.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_03.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_03.jpg',
                'contentMiddle' => 'Chúng ta biết Hans Wegner “Papa Bear” (1954), một kiến trúc sư đầy tài năng và niềm đam mê với thiết kế ghế, cho ra đời nhiều loại ghế độc đáo, hiện đại và tỉ mỉ từng chi tiết, đặc biệt hơn khi  mang lại trải nghiệm tuyệt vời cho người sử dụng.Không chỉ với chức năng chính là để ngồi, ghế ngày nay được thiết kế đẹp và kiểu dáng hơn để trang trí và tô lên phong cách, vẻ đẹp của ngôi nhà. Chúng ta biết tới “ngai vàng” dành cho vua chúa là một chiếc ghế được điêu khắc tinh vi đặt trong chính điện cũng một phần thể hiện uy quyền và sang trọng của danh vua ấy. ',
                'image4' => 'images\blog\Detail\News_image4_detail_03.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_03.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_03.jpg',
                'contentBot' => 'Chính vì vậy mà việc lựa chọn ghế vô cùng quan trọng với mỗi ngôi nhà, để phù hợp với phong cách, hòa trộn cùng màu sắc đồ nội thất, màu sơn tường khác, hay để làm nổi bật căn phòng quả không phải điều đơn giản, đòi hỏi gia chủ hay kiến trúc sư cần có con mắt nghệ thuật và chuyên môn.',
                'image7' => 'images\blog\Detail\News_image7_detail_03.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_03.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_03.jpg',
            ],

            [
                'NewsDetailID' => 'N04', 'NewsID' => 'N04', 'NewsName' => '5 cách tạo nên phòng ngủ ấm áp',
                'NewsTagName' => 'PCKT',
                'Day' => '07/07', 'Year' => '2020',
                'images' => 'images\blog\News_bg_04.jpg',
                'contentTop' => 'Phòng ngủ luôn là nơi ưa thích của mỗi người, đúng không nhỉ? Người ta thường nói “Ăn được ngủ được là tiên”, chính vì vậy mà nhiều người luôn cố gắng để trang trí, thiết kế cho mình và gia đình phòng ngủ ấm áp, mục đích cuối cùng vẫn để có được một giấc ngủ ngon và bình an. Hôm nay chúng ta cùng học cách để biến ngôi nhà của bạn thêm ấm áp và đặc biệt hơn nhé!1- GỗMột trong những mẹo để sưởi ấm không gian không chỉ là phòng ngủ mà còn được áp dụng cho phòng khách, bếp… đó chính là mang yếu tố tự nhiên vào ngôi nhà của bạn, và đặc biệt hơn hết chính là gỗ. Gỗ ngày nay được dùng nhiều trong thiết kế giường, ghế, bàn, hộc đựng…. với nhiều màu sắc đặc trưng của từng loại gỗ và kiểu dáng khác nhau. Thật là một thiếu sót nếu bạn bỏ qua mẹo này đấy nhé!',
                'image1' => 'images\blog\Detail\News_image1_detail_04.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_04.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_04.jpg',
                'contentMiddle' => '2- Cây xanhCây xanh là một trong những sinh vật quan trọng và nổi bật nhất trên trái đất nhưng chúng ta mới chỉ bắt đầu hiểu về quy mô tồn tại của chúng. Chúng chứa một lượng lớn carbon, giữ nước và tạo ra không khí trong lành cùng rất nhiều lợi ích quan trọng cho con người”, chuyên gia Thomas Crowther của Viện nghiên cứu Môi trường và Lâm nghiệp Đại học Yale cho biết - Theo Zing newsNhưng một điều đáng lưu ý là việc để quá nhiều cây xanh ở phòng ngủ kín, điều này sẽ thực sự nguy hiểm vì trong quá trình quang hợp của cây xanh vào ban đêm, cây sẽ hút khí Oxi, thải ra Cacbonic và hơi nước, khiến chúng ta ngạt thở và nguy hiểm tới tính mạng. Hãy khôn ngoan để phù hợp hóa số lượng cây xanh trong phòng ngủ của bạn nha.3- Nội thấtNếu thiếu nội thất, phòng ngủ sẽ thật trống trãi và cô đơn. Ngoài giường ngủ và cây xanh, chúng ta cũng cần có đèn ngủ, bàn đựng đồ, đồng hồ, hay thậm chí là lò sưởi ấm khi mùa đông về…. tất cả hòa quyện tạo nên không gian ấm áp và hoàn hảo cho bạn và gia đình. ',
                'image4' => 'images\blog\Detail\News_image4_detail_04.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_04.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_04.jpg',
                'contentBot' => '4- Gối ômTrang trí gối với nhiều chất liệu, họa tiết và màu sắc khác nhau giúp cho căn phòng thêm sinh động, hãy chọn những tông màu cam, đỏ, vàng để thêm tia nắng ấm áp nhé!5- Thảm Với bất cứ style phòng ngủ nào từ cổ điển, hiện đại, cho tới đương đại, bạn sẽ luôn tìm được tấm thảm bạn yêu thích, nếu bạn thật sự muốn tìm, hãy tin tôi đi. Thảm sàn như là vật dụng không thể thiếu của mỗi gia đình, không chỉ là để chống trơn trượt, chống ồn mà còn để trang trí và giữ ấm cho ngôi nhà.',
                'image7' => 'images\blog\Detail\News_image7_detail_04.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_04.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_04.jpg',
            ],

            [
                'NewsDetailID' => 'N05', 'NewsID' => 'N05', 'NewsName' => 'Từng bước trang trí căn phòng Vintage mơ ước',
                'NewsTagName' => 'PCKT',
                'Day' => '23/06', 'Year' => '2020',
                'images' => 'images\blog\News_bg_05.jpg',
                'contentTop' => 'Vintage mang đến không gian sống với những vẻ đẹp nhẹ nhàng và sự hoài cổ, đôi khi lại hết sức bình dị. Đây là một phong cách không thể bỏ qua đối với những ai từng say mê vẻ đẹp cổ điển. Đồ nội thất sử dụng trong phong cách này thường là sự kết hợp giữa những món đồ cổ-cũ với những thiết bị gia dụng hiện đại. Không gian mang phong cách Vintage gợi lại thời kỳ những năm 1950 đến 1980, phản ánh một phần cuộc sống trong quá khứ của chúng ta. Đây là phong cách không bao giờ bị lãng quên, không bao giờ lạc hậu. Xã hội ngày càng phát triển và con người trở nên quen dần với những cái mới, tuy nhiên trong tiềm thức của mỗi người sẽ muốn hoài niệm về những kí ức cũ. ',
                'image1' => 'images\blog\Detail\News_image1_detail_05.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_05.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_05.jpg',
                'contentMiddle' => 'Màu sắc: Phong cách Vintage cũng được chia thành hai loại với những cách phối hợp màu sắc rất khác nhau đó là: Phong cách Mid Century Modern (những năm 1930 đến 1960) sử dụng các tone màu ấn tượng hơn, còn phong cách Art Deco Vintate từ những (1920 đến 1940) thiên về màu sắc trung tính và những màu sáng mang đến không gian nhẹ nhàng.Việc sử dụng màu sắc cũng được phân chia theo từng giai đoạn, màu xanh lá cây, hồng nhạt và vàng nhạt gợi nhớ đến thời kỳ những năm 1930, 1940.Màu đỏ tươi, sọc, xanh đen hoặc chấm polka gợi nhớ đến những năm 1950. Màu đát kết hợp họa tiết hoa văn lớn của thập niên 1960 và 1970. ',
                'image4' => 'images\blog\Detail\News_image4_detail_05.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_05.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_05.jpg',
                'contentBot' => 'Đồ dùng: Đồ nội thất phong cách Vintage mang dấu ấn thời gian, thường là những đồ dùng sử dụng lại để trang trí. Bạn có thể sử dụng những chiếc ghế sofa với gam màu trầm như be, xám, sử dụng những chiếc ghế với kiểu dáng truyền thống,... ',
                'image7' => 'images\blog\Detail\News_image7_detail_05.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_05.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_05.jpg',
            ],

            [
                'NewsDetailID' => 'N06', 'NewsID' => 'N06', 'NewsName' => 'Đặc điểm văn phòng phong cách đương đại  ',
                'NewsTagName' => 'PCKT',
                'Day' => '19/06', 'Year' => '2020',
                'images' => 'images\blog\News_bg_06.jpg',
                'contentTop' => 'Đa số những ngôi nhà được thiết kế theo phong cách đương đại sẽ tập trung vào phần không gian nhiều hơn. Bố cục của thiết kế đương đại tương đối đơn giản nhưng tinh tế và được tạo nên từ những đường thẳng, hình khối hay những gam màu cực kỳ táo bạo.Nội thất đương đại được các chuyên gia đánh giá là tiện dụng hơn bởi các thiết kế ít rườm rà chi tiết. Phong cách thiết kế này sẽ rất phù hợp để cho trang trí nội thất các văn phòng hay nhà ở.',
                'image1' => 'images\blog\Detail\News_image1_detail_06.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_06.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_06.jpg',
                'contentMiddle' => 'Một trong những cách cực đơn giản là bạn hãy chú ý đến hoa văn và các đường nét thiết kế. Nếu như trong một không gian mà đa số là những đường nét thẳng tắp hay các bề mặt trang trí nhẵn bóng, ít chi tiết thì có thể chắc chắn 50% đây là phong cách thiết kế đương đại rồi. Chúng ta dễ dàng nhận thấy đặc điểm này ở phần lớn nội thất văn phòng tại TPHCM. Phần còn lại bạn có thể đánh giá thông qua các gam màu hay các vật dụng trang trí.',
                'image4' => 'images\blog\Detail\News_image4_detail_06.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_06.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_06.jpg',
                'contentBot' => 'Những màu sắc chủ đạo thường được sử dụng nhất để thiết kế phong cách đương đại chính là những màu sắc ở gam trung tính hay trắng, và đen sau đó chúng được kết hợp cùng các màu sắc tươi sáng hơn tạo điểm nhấn cho không gian. Phong cách đương đại sở hữu các chi tiết trang trí bằng đường thẳng thay cho những hoa văn uốn lượn của phong cách thiết kế cổ điển hay tân cổ điển. Chưa hết, giữa những đồ vật trang trí cũng sẽ có những không gian cách biệt đáng kể để tạo thành không gian thoáng đãng, giúp phòng ốc rộng rãi hơn. Điểm nên lưu ý là bạn nên sử dụng nội thất hay vật trang trí có ít nhất một màu sắc nổi bật hơn màu sơn tường, hoặc nếu không bạn hãy sơn nó cùng màu với màu chủ đạo của ngôi nhà bạn để có được hiệu ứng tốt nhất có thể.',
                'image7' => 'images\blog\Detail\News_image7_detail_06.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_06.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_06.jpg',
            ],

            [
                'NewsDetailID' => 'N07', 'NewsID' => 'N07', 'NewsName' => 'Stylish phòng khách hiện đại cho mọi đối tượng',
                'NewsTagName' => 'PCKT',
                'Day' => '06/05', 'Year' => '2021',
                'images' => 'images\blog\News_bg_07.jpg',
                'contentTop' => 'Đồ nội thất như là linh hồn của một phòng khách. Không chỉ hiện hữu, trang trí mà còn toát lên tinh thần và phong cách riêng của căn phòng. Hãy nghiêm túc nghĩ về đồ nội thất mà bạn sẽ trang trí. Trong phong cách hiện đại, gỗ luôn là một trong những vật liệu được săn đón và sử dụng nhiều nhất. Từ tủ đồ, khung tranh trang trí, bàn, ghế,… gỗ đều được làm từ gỗ tự nhiên hay gỗ nhận tạo với kiểu dáng và công năng đặc biệt.',
                'image1' => 'images\blog\Detail\News_image1_detail_07.jpg',
                'image2' => 'images\blog\Detail\News_image2_detail_07.jpg',
                'image3' => 'images\blog\Detail\News_image3_detail_07.jpg',
                'contentMiddle' => 'Với phong cách hiện đại, chúng ta được free trong việc trang trí. Hợp lý là phù hợp với phong cách và nhu cầu sử dụng của mỗi người. Đừng cố gắng ép PHẢI theo một kiểu trang trí nào đó, mỗi căn phòng được xây dựng theo kích thước, hướng khác nhau, việc đặt một khuôn mẫu chung cho tất cả căn phòng là điều dường như không thể. Chỉ bạn mới hiểu rõ mình cần gì và muốn gì, vì vậy hãy đơn giản hóa vấn đề trong việc trang trí cho ngôi nhà nhé.',
                'image4' => 'images\blog\Detail\News_image4_detail_07.jpg',
                'image5' => 'images\blog\Detail\News_image5_detail_07.jpg',
                'image6' => 'images\blog\Detail\News_image6_detail_07.jpg',
                'contentBot' => 'Nếu bạn cảm thấy màu xám quá u tối hay lạnh lẽo, ngại gì mà không hướng tâm trí mình tới những màu sắc tươi đẹp khác nhỉ? Có thể màu xám không phải là thời điểm này, nhưng màu cam lại hoàn toàn khớp với vibe của bạn.Chúng ta có muôn vàn màu sắc khác nhau, tông trắng cho tủ đồ, tông xám với ghế ngồi, tông cam tăng hứng khởi hay vui nhộm nhiều màu sắc với thảm sàn. Tất cả tạo nên không gian hiện đại vô cùng tinh nghịch và năng động, kích thích bạn suy nghĩ sáng tạo một ngày mới và khích lệ tinh thần mỗi lúc đi làm về.',
                'image7' => 'images\blog\Detail\News_image7_detail_07.jpg',
                'image8' => 'images\blog\Detail\News_image8_detail_07.jpg',
                'image9' => 'images\blog\Detail\News_image9_detail_07.jpg',
            ],


        ]);

    }
}
