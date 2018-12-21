@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('books.books', ['books' => $books])
        </div>
    </div>
@endsection