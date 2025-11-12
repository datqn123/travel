<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            [
                'name' => '4N3Đ Chuyến du ngoạn từ Singapore trên tàu Disney Adventure',
                'agency' => 'Disney Cruise Line',
                'start_location' => 'Hà Nội',
                'schedule' => 'Singapore → Days at sea → Singapore',
                'description' => 'Từ khám phá hoạt động trên tàu đến thư giãn cùng người thân, du thuyền có mọi thứ cho tất cả mọi người.

                Ngày 1: Khởi hành từ Singapore
                - Lên tàu từ 11:00 - 15:30
                - Khởi hành lúc 16:00
                Thời gian lên tàu và khởi hành có thể thay đổi tùy theo ngày, thời gian được tính theo giờ địa phương

                Sau khi lên tàu ổn định chỗ, bạn có thể bắt đầu khám phá các nhà hàng, khu vực giải trí theo chủ đề và nhiều hoạt động hấp dẫn trên tàu. Đừng quên lên kế hoạch cho những ngày sắp tới để tận hưởng trọn vẹn một hành trình đáng nhớ!

                Ngày 2: Hành trình vui nhộn cùng Disney
                - Buổi sáng: Khởi động ngày mới tại Marvel Landing và tranh thủ tham gia các trò chơi, điểm tham quan trước khi đông khách.
                - Buổi chiều: Giải nhiệt tại Toy Story Place, sau đó hòa mình vào không khí sôi động khi cổ vũ những siêu anh hùng trong Avengers Assemble!
                - Buổi tối: Thưởng thức bữa tối lung linh tại Hollywood Spotlight Club, nơi Mickey và những người bạn mang đến những màn trình diễn rực rỡ, đầy sức hút vượt thời gian.

                Ngày 3: Chương cuối của diệu kỳ
                - Buổi sáng: Đón bình minh và tận hưởng một buổi dạo bước yên bình cuối cùng tại Town Square.
                - Buổi chiều: Thưởng thức bữa trưa mang phong cách làng quê tại Enchanted Summer Restaurant, rồi đắm mình trong vở diễn huyền ảo Moana: Call of the Sea.
                - Buổi tối: Kết thúc ngày bằng bữa tối tại Pixar Market Restaurant, nơi ẩm thực tinh tế hòa cùng những khoảnh khắc vui nhộn lấy cảm hứng từ các nhân vật Pixar được yêu thích.

                Đây chỉ là những gợi ý để bạn bắt đầu khám phá. Hãy tự tạo cho mình những trải nghiệm riêng để chuyến đi thêm trọn vẹn!

                Ngày 4: Trở về Singapore
                - Tàu cập cảng lúc 09:00.
                - Quý khách sẽ rời tàu theo khung giờ đã được phân bổ.
                Lưu ý: Thời gian đến và rời tàu có thể thay đổi tùy theo điều kiện thực tế trong ngày. Tất cả thời gian đều tính theo giờ địa phương.',
                'price' => 4500000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
