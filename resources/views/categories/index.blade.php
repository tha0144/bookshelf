@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>カテゴリー編集ページ（管理者用）</h1>
            
            <div class="text-right">
            {!! link_to_route('categories.create', '新規カテゴリー作成', null, ['class' => 'btn btn-success']) !!}
            </div>
            <br>
            
            <table class="table">
                <tr>
                    <th>カテゴリーID</th>
                    <th>カテゴリー名</th>
                    <th></th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{!! link_to_route('categories.edit', '編集', ['id' => $category->id]) !!}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection