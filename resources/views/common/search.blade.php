{!! Form::open(['route' => 'books.search', 'method' => 'get']) !!}
    
    <div class="input-group">
        {!! Form::label('name', '書籍名', ['class' => 'input-group-addon']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="input-group">
        {!! Form::label('author', '著者名', ['class' => 'input-group-addon']) !!}
        {!! Form::text('author', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="input-group">
        {!! Form::label('pulisher', '出版社名', ['class' => 'input-group-addon']) !!}
        {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="input-group">
        {!! Form::label('category', 'カテゴリー', ['class' => 'input-group-addon']) !!}
        {!! Form::text('category', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="input-group">
        {!! Form::label('keyword', 'キーワード', ['class' => 'input-group-addon']) !!}
        {!! Form::textarea('keyword', null, ['class' => 'form-control']) !!}
    </div>
    
    {!! Form::submit('検索', ['class' => 'btn btn-success btn-block']) !!}

{!! Form::close() !!}