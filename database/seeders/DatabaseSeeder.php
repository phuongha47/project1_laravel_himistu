<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'id' => "1",
            'name' => "Admin",
        ]);

        DB::table('roles')->insert([
            'id' => "2",
            'name' => "User",
        ]);
        for ($i = 0; $i < 10; $i++){
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => "1",
        ]);
        }
        for ($i = 10; $i < 20; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => "2",
            ]);
        }
       
        DB::table('categories')->insert([
            'name' => "Thế Giới",
            'parent_id' => "0",
        ]);
        DB::table('categories')->insert([
            'name' => "Kinh Doanh",
            'parent_id' => "0",
        ]);
        DB::table('categories')->insert([
            'name' => "Du Lịch",
            'parent_id' => "0",
        ]);
        DB::table('categories')->insert([
            'name' => "Pháp Luật",
            'parent_id' => "0",
        ]);
        DB::table('categories')->insert([
            'name' => "Giáo Dục",
            'parent_id' => "0",
        ]);
        DB::table('categories')->insert([
            'name' => "Sức Khỏe",
            'parent_id' => "0",
        ]);

        DB::table('categories')->insert([
            'name' => "Thể Thao",
            'parent_id' => "0",
        ]);

        DB::table('categories')->insert([
            'name' => "Quân sự",
            'parent_id' => "1",
        ]);
        DB::table('categories')->insert([
            'name' => "Phân tích",
            'parent_id' => "1",
        ]);
        DB::table('categories')->insert([
            'name' => "Tư liệu",
            'parent_id' => "1",
        ]);
        DB::table('categories')->insert([
            'name' => "Quốc tế",
            'parent_id' => "2",
        ]);
        DB::table('categories')->insert([
            'name' => "Chứng khoáng",
            'parent_id' => "2",
        ]);
        DB::table('categories')->insert([
            'name' => "Doanh nghiệp",
            'parent_id' => "2",
        ]);
        for ($i = 1; $i < 5; $i++){
            DB::table('posts')->insert([
                'title' => "Khách quốc tế đến Việt Nam không phải xét nghiệm nhanh",
                'body' => "Hành khách trên các chuyến bay quốc tế đến Việt Nam chỉ cần có giấy xét nghiệm PCR, không phải xét nghiệm nhanh trước khi lên và sau khi xuống máy bay.

                Ngày 28/1, Văn phòng Chính phủ truyền đạt chỉ đạo trên của Phó thủ tướng Phạm Bình Minh. Theo đó, Phó thủ tướng đồng ý chủ trương tăng tần suất chuyến bay thương mại thường lệ chở khách đến Nhật Bản, Hàn Quốc, Đài Loan (Trung Quốc); mở rộng địa bàn thí điểm chuyến bay thương mại quốc tế tới châu Âu và Australia, để đáp ứng nhu cầu về nước của người Việt Nam ở nước ngoài dịp Tết Nguyên đán Nhâm Dần 2022.
                
                Bộ Ngoại giao chỉ đạo cơ quan đại diện của Việt Nam tại các nước thúc đẩy đối tác sớm trả lời đề nghị nối lại các chuyến bay thương mại quốc tế thường lệ , đồng thời để người Việt Nam không bị yêu cầu cách ly khi đến các quốc gia như Singapore, Nhật Bản, Hàn Quốc...",
                'category_id' => "10",
                'author_id' => "1",
            ]);
        }
        for ($i = 5; $i < 8; $i++){
            DB::table('posts')->insert([
                'title' => "Người dân không phải cách ly khi về quê'",
                'body' => "Người dân cư trú ở 4 cấp độ dịch không phải cách ly y tế khi về quê đón Tết, ngoại trừ các trường hợp thuộc diện theo dõi sức khỏe hoặc đang ở trong khu phong tỏa, theo giải thích của đại diện Bộ Y tế.

                Ngày 25/1, bà Nguyễn Thị Liên Hương, Cục trưởng Quản lý môi trường Y tế (Bộ Y tế), cho biết thông tin nêu trên.
                
                Trước đó hôm 22/1, Bộ Y tế có văn bản (số 357) gửi các địa phương, nêu rõ hiện nay tỷ lệ tiêm chủng vaccine Covid-19 trên cả nước đã đạt rất cao; tất cả dân số từ 18 tuổi đã được tiêm mũi một; 96% dân số tiêm đủ hai liều; 19% dân số tiêm mũi ba. Trẻ em từ 12-17 tuổi đã tiêm mũi một đạt 94%; tiêm mũi hai đạt 82%.",
                'category_id' => "11",
                'author_id' => "2",
            ]);
        }


    }
}
