<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Category extends Model
{
    // テーブル名
    protected $table = 'categories';

    // リレーション
    public function books()
    {
        Log::debug('<<<books>>>');
        Log::debug('リレーション:hasMany');
        // return $this->hasMany('App\Book');
        return $this->hasMany('App\Book', 'foreign_key', 'category_id');
    }
}
