<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo('App\User');
    }
}
