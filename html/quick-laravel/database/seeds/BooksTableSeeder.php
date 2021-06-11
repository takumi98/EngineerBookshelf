<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DBファサードを使ってデータを入れる
        \DB::table('books')->insert([
            [
                'id' => '1',
                'bookshelf_id' => '1',
                'category_id' => '1',
                'evaluation_id' => '3',
                'name' => '痛快!コンピュータ学',
                'image_file_name' => 'image_01',
                'publisher' => '集英社文庫',
                'release_date' => '2002/03/20',
                'price' => '1773',
                'content' => '僕のコンピュータへの興味の原点',
                'is_published' => '1',
                'is_deleted' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'bookshelf_id' => '1',
                'category_id' => '1',
                'evaluation_id' => '3',
                'name' => 'コンピュータはなぜ動くのか',
                'image_file_name' => 'image_02',
                'publisher' => '日経BP社',
                'release_date' => '2003/06/02',
                'price' => '2640',
                'content' => '当時はコンピュータに対しての知識が少なく、あまり内容が結びつかなかった記憶があります',
                'is_published' => '1',
                'is_deleted' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
