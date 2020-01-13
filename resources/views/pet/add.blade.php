@extends('layouts.diaryapp')

@section('title', 'Pet.Add')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <table>
            <form action="/pet/add" method="post">
            {{ csrf_field() }}
            <tr><th>USER_ID: </th><td><input type="text" name="user_id" value="{{old('user_id')}}"></td><td>テスト用</td></tr>
            <tr><th>種別: </th><td><input type="text" name="type" value="{{old('type')}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
            <tr><th>ニックネーム: </th><td><input type="text" name="name" value="{{old('name')}}"><td>NNをつけない場合、入力不要です。</td></td></tr>
            <tr><th></th><td><input type="submit" value="登録"></td></tr>
             </form>
        </table>
    </body>
</html>
@endsection