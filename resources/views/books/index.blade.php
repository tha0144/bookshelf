@extends('layouts')

@section('content')
    
    <table class="table">
    @foreach($books as $book)
        <?php $user = $book->user; ?>
        <tr>
            <td>
                <div>
                    <!--
                        <span style="font-size: 16px; font-weight: bold;">
                        {{-- link_to_route('books.edit', $book->title, ['id' => $book->id]) --}}
                        </span>
                    -->
                        <span style="font-size: 16px; font-weight: bold;">
                        {{ $book->title }}
                        </span>
                </div>
                @if($book->author != null)
                <div>
                    著者： {{ $book->author }}
                </div>
                @endif
                @if($book->publisher != null)
                <div>
                    出版社： {{ $book->publisher }}
                </div>
                @endif
                <div>
                    カテゴリー： {{ $book->category->name }}
                </div>
            </td>
        </tr>
    @endforeach
    </table>
    {!! $books->render() !!}

@endsection