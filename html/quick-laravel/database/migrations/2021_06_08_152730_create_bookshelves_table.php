<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookshelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bookshelves')) {
            Schema::create('bookshelves', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('user_id')->references('id')->on('users');
                $table->unsignedInteger('book_id')->references('id')->on('books');
                $table->boolean('is_deleted')->default(false);
                $table->timestamps();
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookshelves');
    }
}
