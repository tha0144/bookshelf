<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];
    
    // カテゴリーに属する本一覧
    public function books_in_category(){
        return $this->hasMany(Book::class);
    }
    
    /*
    // カテゴリーをフォローしているユーザー一覧
    public function category_following_users(){
        return $this->belongsToMany(User::class, 'category_follow', 'category_id', 'user_id');
    }
    */
}
