@extends('layouts.diaryapp')

@section('title', 'Pet.find')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <form action="/pet/find" , method="post">
        {{ csrf_field() }}
            <input type="text" name="input" value="{{$input}}">
            <input type="submit" value="検索"/>
        </form>
        @if (isset($items))
            <table>
                <tr><th>種別</th><th>ニックネーム</th></tr>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->type}}</td>
                    <td>{{$item->name}}</td>
                </tr>
                @endforeach
            </table>
        @endif
    </body>
</html>
@endsection