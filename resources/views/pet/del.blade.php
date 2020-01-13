@extends('layouts.diaryapp')

@section('title', 'Pet.Del')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <table>
            <form action="/pet/del" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$form->id}}">
                <tr><th>USER_ID: </th><td><input type="text" name="user_id" value="{{$form->user_id}}"></td><td>テスト用</td></tr>
                <tr><th>種別: </th><td><input type="text" name="type" value="{{$form->type}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
                <tr><th>ニックネーム: </th><td><input type="text" name="name" value="{{$form->name}}"><td>NNをつけない場合、入力不要です。</td></td></tr>
                <tr><th></th><td><input type="submit" value="削除"></td></tr>
            </form>
        </table>
    </body>
</html>
@endsection