<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;
use App\Category;

class UsersController extends Controller
{
    // ユーザー表示
    public function show(){
        if(\Auth::check()){
            $user = User::find(\Auth::id());
            $books = $user->books()->orderBy('created_at', 'desc')->paginate(10);
            
            return view('users.show', [
                'user' => $user,
                'books' => $books,
            ]);
        } else {
            return view('welcome');
        }
    }
    
    /*
    // フォロー一覧
    public function followings($id){
        $user = User::find($id);
        $followings = $user->following_users()->paginate(10);
    }
    
    // フォロワー一覧
    public function followers($id){
        $user = User::find($id);
        $followers = $user->followed_users()->paginate(10);
    }
    */
    
    /*
    */
    
    /*
    // フォローカテゴリ一覧
    public function following_category_listup($id){
        $user = User::find($id);
        $categories = $user->following_categories()->paginate(10);
    }
    */
}
