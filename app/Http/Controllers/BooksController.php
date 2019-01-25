<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;
use App\Category;

class BooksController extends Controller
{
    // 登録したデータを一覧表示
    public function index(){
        
    }
    
    // 書籍データを表示
    public function show($id){
        $book = Book::find($id);
        
        return view('books.show', [
            'book' => $book,
        ]);
    }
    
    // 新規登録フォーム
    public function create(){
        $book = new Book;
        $category_list = \App\Category::pluck('name', 'id');
        
        return view('books.create', [
            'book' => $book,
            'category_list' => $category_list,
        ]);
    }
    
    // 新規登録データを保存
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:191',
            'author' => 'max:191',
            'publisher' => 'max:191',
            'category_id' => 'required',
            'comment' => 'max:191',
            'review' => 'max:191',
        ]);
        
        $request->user()->books()->create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'category_id' => $request->category_id,
            'is_open' => $request->is_open,
            'possession' => $request->possession,
            'comment' => $request->comment,
            'review' => $request->review,
        ]);
        
        return redirect('/');
    }
    
    // 
    public function edit($id){
        //
        $book = Book::find($id);
        $category_list = \App\Category::pluck('name', 'id');
        
        return view('books.edit', [
            'book' => $book,
            'category_list' => $category_list,
        ]);
    }
    
    // 
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required|max:191',
            'author' => 'max:191',
            'publisher' => 'max:191',
            'category_id' => 'required',
            'comment' => 'max:191',
            'review' => 'max:191',
        ]);
        
        $request->user()->books()->updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'category_id' => $request->category_id,
            'is_open' => $request->is_open,
            'possession' => $request->possession,
            'comment' => $request->comment,
            'review' => $request->review,
        ]);
        
        return redirect('/');
    }
    
    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        
        return redirect('/');
    }
    
    // 検索
    public function search(Request $request){
        // 公開設定のデータを取得
        $books = Book::where('is_open', true);
        
        // 
        $title = $request->input('title');
        $author = $request->input('author');
        $publisher = $request->input('publisher');
        // $title = $request->input('title');
        
        // タイトルでの検索
        if(!empty($title)){
            $books->where('title', 'like', '%'.$title.'%');
        }
        // 著者名での検索
        if(!empty($author)){
            $books->where('author', 'like', '%'.$author.'%');
        }
        // 出版社での検索
        if(!empty($publisher)){
            $books->where('publisher', 'like', '%'.$publisher.'%');
        }
        /*
        // 
        if($request->xxx != undefined){
            $books->where('xxx', 'like', '%'.$xxx.'%');
        }
        */
        /*
        // https://qiita.com/Ioan/items/a61ad1fe24529c2477e9にあった書き方
        foreach($request->only(['title', 'author', 'publisher']) as $key => $value){
            $books->where($key, 'like', '%'.$value.'%');
        }
        */
        
        $books = $books->paginate(10);
        
        // 
        return view('books.index', [
            'books' => $books,
        ]);
    }
}
