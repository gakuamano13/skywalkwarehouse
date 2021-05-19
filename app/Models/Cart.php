<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    public function products()
     {
         return $this->belongsToMany(
             Product::class,
             'line_items',
         )->withPivot(['id', 'quantity']);
     }
}

// 多対多のリレーションはbelongsToManyメソッドを記述することで定義。

// 第一引数には関係するモデルクラスを指定し、第二引数には中間テーブル名を指定。


