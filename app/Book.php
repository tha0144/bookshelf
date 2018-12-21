<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title', 'author', 'publisher', 'user_id', 'category_id', 'possession', 'is_open', 'comment', 'review',
    ];
    
    // 登録したユーザーを取得
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // 属するカテゴリーを取得
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    // ふぁぼしたユーザー一覧を取得
    /*
    public function favorite_users(){
        return $this->belongsToMany(User::class, 'favorites', 'book_id', 'user_id');
    }
    */
}
