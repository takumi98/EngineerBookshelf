<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('bookshelf_id');
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('evaluation_id');
                $table->string('name', 100);
                $table->string('image_file_name', 255);
                $table->string('publisher', 100)->nullable();
                $table->dateTime('release_date', 0);
                $table->unsignedInteger('price')->nullable();
                $table->string('content', 1000)->nullable();
                $table->boolean('is_published')->default(true);
                $table->boolean('is_deleted')->default(false);
                $table->timestamps();

                // 外部キー制約
                $table->foreign('bookshelf_id')->references('id')->on('bookshelves')->onDelete('cascade');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                $table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
