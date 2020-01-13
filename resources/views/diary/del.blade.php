@extends('layouts.diaryapp')

@section('title', 'diary.Del')

@section('content')
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <table>
            <form action="/diary/del" method="post">
                {{ csrf_field() }}
                <tr><th>USER_ID: </th><td><input type="text" name="user_id" value="{{$form->user_id}}"></td><td>テスト用</td></tr>
                <tr><th>PET_ID: </th><td><input type="text" name="pet_id" value="{{$form->pet_id}}"></td><td>テスト用</td></tr>
                <tr><th>日付: </th><td><input type="date" name="date" value="{{$form->date}}"></td><td>テスト用</td></tr>
                <tr><th>給餌: </th><td><input type="text" name="feeding" value="{{$form->feeding}}"></td><td>給餌の有無</td></tr>
                <tr><th>排泄: </th><td><input type="text" name="excreta" value="{{$form->excreta}}"></td><td>排泄の有無</td></tr>
                <tr><th>水換え: </th><td><input type="text" name="water" value="{{$form->water}}"></td><td>水替えしたか</td></tr>
                <tr><th>メモ: </th><td><input type="text" name="memo" value="{{$form->memo}}"></td><td>給餌内容等の事項</td></tr>
                <tr><th></th><td><input type="submit" value="削除"></td></tr>
            </form>
        </table>
    </body>
</html>
@endsection