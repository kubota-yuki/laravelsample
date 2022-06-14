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
        $item = DB::table('people')->where('id', $id)->first();
            return view('hello.found',['item' => $item]);
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
}
