<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;


class HelloController extends Controller
{
    public function index(Request $request){
        $md_data = $request->data;
        $data = [
            'data'=> $md_data,
            'msg'=> '入力して送信してください'
        ];
        return view('hello.index', $data);
    }

    public function post(HelloRequest $request){
        return view('hello.index', ['msg'=>'正しく入力されました。']);
        // $validate_rule = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150'
        // ];

        // $this->validate($request, $validate_rule);
        // return view('hello.index', ['msg'=>'正しく入力されました']);
    }
}
