<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // // テーブル名
    protected $table = 'books';

    // // 可変項目
    protected $fillable = 
    [
        'bookshelf_id',
        'category_id',
        'evaluation_id',
        'name',
        'image_file_name',
        'publisher',
        'release_date',
        'price',
        'content',
        'is_published',
        'is_deleted',
    ];

    // 発売日のデータ型を変換

}
