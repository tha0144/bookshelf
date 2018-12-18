@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h1>既存カテゴリー編集ページ</h1>
            
            <div class="text-right">
            {!! link_to_route('categories.index', 'カテゴリー一覧に戻る', null, ['class' => 'btn btn-success']) !!}
            </div>
            <br>
            
            {!! Form::model($category, ['route' => ['categories.update', 'id' => $category->id], 'method' => 'put']) !!}
                
                <div class="input-group">
                    {!! Form::label('name', 'カテゴリー名', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '必ず入力してください']) !!}
                </div>
                <br>
                
                {!! Form::submit('編集', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
            
            <br>
            
            {!! Form::open(['route' => ['categories.destroy', 'id' => $category->id], 'method' => 'delete']) !!}
                {!! Form::submit('このカテゴリーを削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection