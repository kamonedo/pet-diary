@extends('layouts.diaryapp')

@section('title', 'diary.Add')

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
            <form action="url(/diary/add)" method="post">
                {{ csrf_field() }}
                <tr><th>USER_ID: </th><td><input type="text" name="user_id" value="{{old('user_id')}}"></td><td>テスト用</td></tr>
                <tr><th>PET_ID: </th><td><input type="text" name="pet_id" value="{{old('pet_id')}}"></td><td>テスト用</td></tr>
                <tr><th>日付: </th><td><input type="date" name="date" value="{{old('date')}}"></td><td>テスト用</td></tr>
                <tr><th>給餌: </th><td><input type="text" name="type" value="{{old('type')}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
                <tr><th>排泄: </th><td><input type="text" name="type" value="{{old('type')}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
                <tr><th>水換え: </th><td><input type="text" name="type" value="{{old('type')}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
                <tr><th>メモ: </th><td><input type="text" name="type" value="{{old('type')}}"></td><td>例)フトアゴヒゲトカゲ, 文鳥</td></tr>
                <tr><th></th><td><input type="submit" value="登録"></td></tr>
            </form>
        </table>
    </body>
</html>
@endsection