@extends('layouts.diaryapp')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>ペット一覧</h1>
        <p>種別から曖昧な検索が行えます</p>
        <form action="/pet/find" , method="post">
        {{ csrf_field() }}
            <input type="text" name="input" value="">
            <input type="submit" value="find"/>
        </form>
        <table>
            <tr><th>種別</th><th>ニックネーム</th><th>編集</th><th>削除</th></tr>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->type}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <form method="get" action="pet/edit">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit">編集</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="pet/del">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
@endsection
