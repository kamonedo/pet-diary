@extends('layouts.diaryapp')

@section('title', 'diary.find')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <form action="/diary/find" , method="post">
        {{ csrf_field() }}
            <input type="text" name="input" value="{{$input}}">
            <input type="submit" value="検索"/>
        </form>
        @if (isset($items))
            <table>
                <tr><th>日付</th><th>給餌</th><th>排泄</th><th>水換え</th><th>メモ</th><th>編集</th><th>削除</th></tr>
                @foreach ($items as $item)
                <tr>
                <td>{{$item->date}}</td>
                <td>{{$item->feeding}}</td>
                <td>{{$item->excreta}}</td>
                <td>{{$item->water}}</td>
                <td>{{$item->memo}}</td>
                <td>
                <form method="get" action="diary/edit">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit">編集</button>
                </form>
                </td>
                <td>
                <form method="get" action="diary/del">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit">削除</button>
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        @endif
    </body>
</html>
@endsection