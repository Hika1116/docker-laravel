@extends('layouts.helloapp')

@section('title', 'db select')

@section('menubar')
 @parent
 DB SELECT
@endsection


@section('content')
    {{-- DBresult --}}
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th><th>編集</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td><p><a href="/select/edit?id={{$item->id}}">更新</a></p>
                    <p><a href="/select/del?id={{$item->id}}">削除</a></p>
                </td>
            </tr>
        @endforeach
    </table>
    <p><a href="/select/add">追加</a></p>

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