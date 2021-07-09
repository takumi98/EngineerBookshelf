<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Comment extends Model
{
    // テーブル名
    protected $table = 'comments';

    // 可変項目
    protected $fillable =
    [
        'user_id',
        'book_id',
        'comment',
        'is_deleted',
    ];

    public function user()
    {
        Log::debug('>>リレーション<<');
        Log::debug('user呼び出し');
        return $this->belongsTo('App\User');
    }
    // booksテーブル、リレーション
    public function book()
    {
        Log::debug('>>リレーション<<');
        Log::debug('book呼び出し');
        return $this->belongsTo('App\Book');
    }
}
