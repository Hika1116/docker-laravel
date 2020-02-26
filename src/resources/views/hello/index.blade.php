

@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
 @parent
 インデックスページ
@endsection


@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>

    {{-- <p>メッセージ：{{$msg}}</p>
    <p>ビューコンポーザ：{{$view_message}}</p>
    <p>ミドルウェア：{{$data[0]['md_massage']}}</p> --}}


    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい</p>
    @endif
    <form action="/hello" method="POST">
        <table>
            @csrf
            @error('name')
            <tr><th>error</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
            <tr><th>error</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @error('age')
            <tr><th>error</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>


    {{-- <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table> --}}
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection