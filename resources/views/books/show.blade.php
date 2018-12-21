@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped">
                <tr>
                    <th>書籍名</th>
                    <td>{{ $book->name }}</td>
                </tr>
                <tr>
                    <th>著者</th>
                    <td>@if($book->author != null){{ $book->author }}@endif</td>
                </tr>
                <tr>
                    <th>出版社</th>
                    <td>@if($book->publisher != null){{ $book->publisher }}@endif</td>
                </tr>
            </table>
        </div>
    </div>
@endsection