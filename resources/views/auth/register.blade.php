@extends('layouts')

@section('content')
    <div class="text-center">
        <h1>アカウント作成</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            
            {!! Form::open(['route' => 'signup.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認（もう一度入力してください）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'alt' => 'もう一度入力してください']) !!}
                </div>
                
                {!! Form::submit('アカウントを作成する', ['class' => 'btn btn-primary btn-block']) !!}
            
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection