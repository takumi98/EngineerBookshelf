<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DBファサードを使ってデータを入れる
        \DB::table('comments')->insert([
           [
               'id' => '1',
               'user_id' => '1',
               'book_id' => '1',
               'comment' => 'いいね',
               'is_deleted' => '0',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'id' => '2',
               'user_id' => '1',
               'book_id' => '1',
               'comment' => 'Hello World',
               'is_deleted' => '0',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
           [
               'id' => '3',
               'user_id' => '1',
               'book_id' => '1',
               'comment' => 'Hello World',
               'is_deleted' => '0',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
           ],
        ]);
    }
}
