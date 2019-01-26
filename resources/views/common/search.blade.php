@extends('layouts')

@section('content')

    {!! Form::open(['url' => '/result', 'method' => 'post']) !!}
        
        <div class="form-group">
            {!! Form::label('title', '書籍名', ['class' => 'form-group-addon']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('author', '著者名', ['class' => 'form-group-addon']) !!}
            {!! Form::text('author', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('pulisher', '出版社名', ['class' => 'form-group-addon']) !!}
            {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
        </div>
        
        <!--
        <div class="form-group">
            {{-- Form::label('category', 'カテゴリー', ['class' => 'form-group-addon']) --}}
            {{-- Form::text('category', null, ['class' => 'form-control']) --}}
        </div>
        -->
        
        {!! Form::submit('検索', ['class' => 'btn btn-success btn-block']) !!}
    
    {!! Form::close() !!}

@endsection('content')