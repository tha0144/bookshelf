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
    public function update(Request $request){
        $this->validate($request, [
            'title' => 'required|max:191',
            'author' => 'max:191',
            'publisher' => 'max:191',
            'category_id' => 'required',
        ]);
        
        $book = Book::find($id);
        
        return redirect('/');
    }
    
    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        
        return redirect('/');
    }
    
    // 検索
    public function search(Request $request){
        $books = Book::where('is_open', true);
    }
}
