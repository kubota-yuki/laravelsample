<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
     public function index(Request $request){
        $items = DB::select('select * from hinatatable');
        return view('hello.index',['items' => $items]);
       } 

    public function show(Request $request){
        $id = $request->id;
        $item = DB::table('hinatatable')->where('id', $id)->first();
            return view('hello.show',['item' => $item]);
        }
    

    public function post(Request $request){
        $items = DB::select('select * from hinatatable');
        return view('hello.index',['items' => $items]);
    }

    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'birthplace' => $request->birthplace
        ];
        DB::insert('insert into hinatatable(id, name,birthday,birthplace) values (:id, :name, :birthday, :birthplace)', $param);
        return redirect('/hello');
    }

    public function edit(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from hinatatable where id = :id',$param);
        return view('hello.edit',['from' => $item[0]]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'birthplace' => $request->birthplace
        ];
        DB::update('insert into hinatatable(id, name,birthday,birthplace) values (:id, :name, :birthday, :birthplace)', $param);
        return redirect('/hello');
    }


    public function del(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from hinatatable where id = :id',$param);
        return view('hello.del',['form' => $item[0]]);
    }
    public function remove(Request $request){
        $param = ['id' => $request->id];
        $item = DB::delete('delete from hinatatable where id = :id', $param);
        return redirect('/hello');
    }
}