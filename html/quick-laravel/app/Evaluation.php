<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    // テーブル名
    protected $table = 'evaluations';

    // リレーション
    public function books()
    {
        // return $this->belongsTo('App\Book', 'foreign_key', 'evaluation_id');
        // 反転
        return $this->hasMany('App\Book', 'foreign_key', 'evaluation_id');
    }
}
