@extends('layouts')

@section('content')
    
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            
            <h1>アカウント作成</h1>
            
            {!! Form::open(['route' => 'signup.post']) !!}
            
                <div class="input-group">
                    {!! Form::label('name', '名前', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('email', 'メールアドレス', ['class' => 'input-group-addon']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('password', 'パスワード', ['class' => 'input-group-addon']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('password_confirmation', 'パスワード確認', ['class' => 'input-group-addon']) !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'alt' => 'もう一度入力してください']) !!}
                </div>
                
                {!! Form::submit('アカウントを作成する', ['class' => 'btn btn-primary btn-block']) !!}
            
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection