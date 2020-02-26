

@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
 @parent
 追加ページ
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
    
    <form action="/board/add" method="post">
        <table>
            @csrf
            <tr><th>person id:</th><td><input type="number" name="person_id"></td></tr>
            <tr><th>title:</th><td><input type="text" name="text"></td></tr>
            <tr><th>message:</th><td><input type="text" name="message"></td></tr>
            <tr><th></th><td><input type="submit" value="edit"></td></tr>
        </table>
        
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