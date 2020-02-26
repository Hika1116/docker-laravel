

@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
 @parent
 インデックスページ
@endsection


@section('content')
    {{-- DBresult --}}
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                {{-- <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td> --}}
                <td>{{$item->getData()}}</td>
                
                </td>
            </tr>
        @endforeach
    </table>

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