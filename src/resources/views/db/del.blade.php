@extends('layouts.helloapp')

@section('title', 'db delete')

@section('menubar')
 @parent
 DB DELETE
@endsection


@section('content')
    {{-- DBresult --}}
    <form action="/select/del" method="POST">
        @csrf
        <table>
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>name:</th><td><input type="text" name="name" value="{{$form->name}}" readonly></td></tr>
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{$form->mail}}" readonly></td></tr>
            <tr><th>age:</th><td><input type="text" name="age" value="{{$form->age}}" readonly></td></tr>
            <tr><th></th><td><input type="submit" value="delete"></td></tr>

        </table>
        
    </form>

    <style>
    input[readonly] {
        background-color: gray
    }
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