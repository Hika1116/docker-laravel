

@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
 @parent
 新規作成ページ
@endsection


@section('content')
    {{-- DBresult --}}
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/person/add" method="post">
        @csrf
        <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
        <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>

    <style>
    table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        }

        table tr{
        border-bottom: solid 1px #eee;
        cursor: pointer;
        }

        table tr:hover{
        background-color: #d4f0fd;
        }

        table th,table td{
        text-align: center;
        width: 25%;
        padding: 15px 0;
    }
    </style>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection