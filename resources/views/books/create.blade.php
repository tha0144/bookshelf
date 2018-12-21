@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            
            <h1>書籍情報登録</h1>
            
            {!! Form::open(['route' => 'books.store']) !!}
                
                <div class="input-group">
                    {!! Form::label('title', '書籍名', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '必ず入力してください']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('author', '著者名', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('author', old('author'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('publisher', '出版社名', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('publisher', old('publisher'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('category_id', 'カテゴリー', ['class' => 'input-group-addon']) !!}
                    {!! Form::select('category_id', $category_list, null, ['class' => '', 'style' => 'font-size: 16px; width: 100%;']) !!}
                    <!--
                        LaravelcollectiveのFormについて：https://laravelcollective.com/docs/5.0/html
                        ドロップダウンリストは https://laravelcollective.com/docs/5.0/html#drop-down-lists
                        Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S');
                        これだとLarge, Smallが選択肢として表示され、Sに対応するSmallがデフォルト表示される。
                        L, Sがsizeのデータとして送信される。
                        HTMLで書けば
                            <option value="L">Large</option>
                            <option value="S" selected>Small</option>
                        となる。
                    -->
                </div>
                
                <div class="input-group">
                    {!! Form::label('is_open', '公開設定', ['class' => 'input-group-addon']) !!}
                    {!! Form::radio('is_open', 1, true) !!}公開　　
                    {!! Form::radio('is_open', 2) !!}非公開
                </div>
                
                <div class="input-group">
                    {!! Form::label('possession', '所持', ['class' => 'input-group-addon']) !!}
                    {!! Form::radio('possession', 1, true) !!}所持　　
                    {!! Form::radio('possession', 2) !!}非所持
                </div>
                
                <div class="input-group">
                    {!! Form::label('comment', 'コメント', ['class' => 'input-group-addon']) !!}
                    {!! Form::textarea('commnet', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('review', '書評', ['class' => 'input-group-addon']) !!}
                    {!! Form::textarea('review', old('review'), ['class' => 'form-control', 'rows' => '2']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
            
        </div>
        
    </div>
@endsection