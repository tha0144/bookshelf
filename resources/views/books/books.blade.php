<table class="table">
@foreach($books as $book)
    <?php $user = $book->user; ?>
    <tr>
        <td>
            <div>
                @if($book->user_id === \Auth::id())
                    <span style="font-size: 16px; font-weight: bold;">
                    {!! link_to_route('books.edit', $book->title, ['id' => $book->id]) !!}
                    </span>
                    @if($book->possession == 1)
                        <span class="label label-success">所持</span>
                    @else
                        <span class="label label-warning">未所持</span>
                    @endif
                @else
                    <span style="font-size: 16px; font-weight: bold;">
                    {{ $book->title }}
                    </span>
                @endif
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