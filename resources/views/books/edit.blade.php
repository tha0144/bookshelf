@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
            
            <h1>書籍情報更新</h1>
            
            {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('title', '書籍名', ['class' => 'form-group-addon']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '必ず入力してください']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('author', '著者名', ['class' => 'form-group-addon']) !!}
                    {!! Form::text('author', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('publisher', '出版社名', ['class' => 'form-group-addon']) !!}
                    {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('category_id', 'カテゴリー', ['class' => 'form-group-addon']) !!}
                    {!! Form::select('category_id', $category_list, null, ['class' => '', 'style' => 'font-size: 16px; width: 100px;']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('is_open', '公開設定', ['class' => 'form-group-addon']) !!}
                    {!! Form::radio('is_open', 1, true) !!}公開　　
                    {!! Form::radio('is_open', 2) !!}非公開
                </div>
                
                <div class="form-group">
                    {!! Form::label('possession', '所持', ['class' => 'form-group-addon']) !!}
                    {!! Form::radio('possession', 1, true) !!}所持　　
                    {!! Form::radio('possession', 2) !!}非所持
                </div>
                
                <div class="form-group">
                    {!! Form::label('comment', 'コメント', ['class' => 'form-group-addon']) !!}
                    {!! Form::textarea('commnet', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('review', '書評', ['class' => 'form-group-addon']) !!}
                    {!! Form::textarea('review', old('review'), ['class' => 'form-control', 'rows' => '2']) !!}
                </div>
                
                {!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
                
            {!! Form::close() !!}
            
            <br>
            
            {!! Form::open(['route' => ['books.destroy', 'id' => $book->id], 'method' => 'delete']) !!}
                {!! Form::submit('この書籍を削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            
        </div>
        
    </div>
@endsection