<?php

use Illuminate\Database\Seeder;

class BookshelvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DBファサードを使ってデータを入れる
        \DB::table('bookshelves')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'is_deleted' => '0',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
