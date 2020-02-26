@extends('layouts.helloapp')

@section('title', 'db add')

@section('menubar')
 @parent
 DB ADD
@endsection


@section('content')

    {{-- DBresult --}}
    <form action="/select/add" method="POST">
    <table>
        @csrf
        <tr><th>name:</th><td><input type="text" name="name"></td></tr>
        <tr><th>mail:</th><td><input type="text" name="mail"></td></tr>
        <tr><th>age:</th><td><input type="text" name="age"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
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