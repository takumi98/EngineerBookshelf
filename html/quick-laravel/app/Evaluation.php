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
        return $this->hasMany('App\Book');
        // return $this->belongsTo('App\Book');
    }
}
