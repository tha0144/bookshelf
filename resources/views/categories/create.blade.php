@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h1>新規カテゴリー作成ページ</h1>
            
            <div class="text-right">
            {!! link_to_route('categories.store', 'カテゴリー一覧に戻る', null, ['class' => 'btn btn-success']) !!}
            </div>
            <br>
            
            {!! Form::open(['route' => 'categories.store']) !!}
                
                <div class="input-group">
                    {!! Form::label('name', 'カテゴリー名', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '必ず入力してください']) !!}
                </div>
                <br>
                
                {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection