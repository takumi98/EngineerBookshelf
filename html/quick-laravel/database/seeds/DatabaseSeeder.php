<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // usersテーブルでseederを実行
        // $this->call(UsersTableSeeder::class);
        // $this->call(EvaluationsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(BookshelvesTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
