<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbOperation extends Controller
{
    public function index(Request $request){
        // $items = DB::select('select * from people');
        $items = DB::table('people')->get();
        return view( 'db.select', ['items'=>$items]);
    }

    public function post(Request $request){
        $item = DB::select('select * from people');
        return view('db.select' , ['items'=>$item]);
    }

    public function add(Request $request){
        return view('db.add');
    }

    public function create(Request $request){
        $param = [
            'name'=>$request->name,
            'mail'=>$request->mail,
            'age'=>$request->age
        ];
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/select');
    }
    public function edit(Request $request){
        // $param = [
        //     'id'=> $request->id,
        // ];
        // $item = DB::select('select * from people where id = :id', $param);

        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('db.edit', ['form'=>$item]);
    }

    public function update(Request $request){
        $param = [
            'id'=>$request->id,
            'name'=>$request->name,
            'mail'=>$request->mail,
            'age'=>$request->age
        ];
        // error_log($param);
        DB::update( 'update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/select');
    }

    public function del(Request $request){
        $param = ['id'=>$request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('db.del', ['form'=>$item[0]]);
    }

    public function remove(Request $request){
        $param = [
            'id' => $request->id,
        ];
        DB::delete('delete from people where id = :id', $param);
        return redirect('/select');
    }
}
