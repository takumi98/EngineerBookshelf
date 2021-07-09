<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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

    // リレーション
    public function evaluation()
    {
        Log::debug('<<<リレーション>>>');
        Log::debug('evaluation呼び出し');
        // return $this->hasMany('App\Evaluation', 'evaluation_id', 'code');
        return $this->belongsTo('App\Evaluation', 'foreign_key', 'code');
    }
    public function category()
    {
        Log::debug('<<<リレーション>>>');
        Log::debug('categorie呼び出し');
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // 発売日のデータ型を変換
    protected $casts = [
        'release_date' => 'datetime:Y年m月d日'
    ];
    
        public function get_name(){
            return $this->name;
        }
    
        public function set_name($name){
            $this->name = $name;
        }
}
