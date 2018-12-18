@extends('layouts')

@section('content')
    <div class="tect-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            
            {!! Form::open(['route' => 'login.post']) !!}
            
                <div class="input-group">
                    {!! Form::label('email', 'メールアドレス', ['class' => 'input-group-addon']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    {!! Form::label('password', 'パスワード', ['class' => 'input-group-addon']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection