<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        
        return view('categories.index', [
            'categories' => $categories,
        ]);
    }
    
    public function show(){
    }
    
    // 新規カテゴリー作成
    public function create(){ // 新規カテゴリー作成ページを表示
        $category = new Category;

        return view('categories.create', [
            'category' => $category,
        ]);
    }
    
    public function store(Request $request){ // 新規カテゴリーをDBに保存
        $this->validate($request, [
            'name' => 'required|max:191',
        ]);
        
        $category = Category::firstOrCreate([
            'name' => $request->name,
        ]);
        
        return redirect('categories/');
    }
    
    // 既存カテゴリー編集
    public function edit($id){ // 既存カテゴリー編集ページを表示
        $category = Category::find($id);
        
        return view('categories.edit', [
            'category' => $category,
        ]);
    }
    
    public function update(Request $request, $id){ // 既存カテゴリーの変更をDBに保存
        $this->validate($request, [
            'name' => 'required|max:191',
        ]);
        
        $category = Category::updateOrCreate(['id' => $id], [
            'name' => $request->name,
        ]);
        
        return redirect('categories/');
    }
    
    // 既存カテゴリー削除
    public function destroy($id){
        $category = Category::find($id);
        
        $category->delete();
        
        return redirect('categories/');
    }
}
