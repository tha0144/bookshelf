<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // 登録した本一覧
    public function books(){
        return $this->hasMany(Book::class);
    }
    
    /* ユーザーフォロー */
    /*
    // フォローユーザー一覧
    public function following_users(){
        return $this->belongsToMany(User::class, 'follow_user', 'user_id', 'follow_id');
    }
    
    // フォロワー一覧
    public function followed_users(){
        return $this->belongsToMany(User::class, 'follow_user', 'follow_id', 'user_id');
    }
    
    // フォローしているかどうか
    public function followQ_user($userId){
        return $this->following_users()->where('follow_id', $userId)->exists();
    }
    
    // フォロー
    public function follow_user($userId){
        if(!followQ_user($userId) && ($this->id != $userId)){
            $this->following_users()->attach($userId);
        }
    }
    
    // フォロー解除
    public function unfollow_user($userId){
        if(followQ_user($userId) && ($this->id != $userId)){
            $this->following_users()->detach($userId);
        }
    }
    */
    
    /* カテゴリーフォロー */
    /*
    // フォローしているカテゴリー一覧
    public function following_categories(){
        return $this->belongsToMany(Category::class, 'follow_category', 'user_id', 'category_id');
    }
    
    // $categoryIdで指定されるカテゴリーをフォローしているか
    public function followQ_category($categoryId){
        return $this->following_categories()->where('category_id', $categoryId)->exists();
    }
    
    // フォロー
    public function follow_category($categoryId){
        if(!followQ_category($categoryId)){
            $this->following_categories()->attach($categoryId);
        }
    }
    
    // フォロー解除
    public function unfollow_category($categoryId){
        if(followQ_category($categoryId)){
            $this->following_categories()->detach($categoryId);
        }
    }
    */
}
