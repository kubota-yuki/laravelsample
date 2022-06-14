<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request){
        $items = DB::select('select * from (table name)');
        return view('hello.index',['items' => $items]);
       }

    public function post(Request $request){
        $items = DB::select('select * from (table name)');
        return view('hello.index',['items' => $items]);
    }

    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $param = [
            'title' => $request->title,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'title4' => $request->title4
        ];
        DB::insert('insert into (table name) (item, item2,item3,item4) values (:item, :item2, :item3, :item4)', $param);
        return redirect('/hello');
    }
}
