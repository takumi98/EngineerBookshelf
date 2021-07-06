<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    // リレーション
    public function book()
    {
        // return $this->belongsTo('App\Book', 'foreign_key', 'category_id');
        // 反転
        return $this->hasOne('App\Book', 'foreign_key', 'category_id');
    }
}
