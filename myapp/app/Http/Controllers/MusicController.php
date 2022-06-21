<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    // public function show(Request $request)
    // {
    //     $id = $request->id;
    //     $item = DB::table('データベース')->where('キー', $キー)->first();
    //         return view('hello.check',['item' => $item]);
    // }
    
    public function date(Request $request)
    {
        return view('music.date');
    }
    

    public function check(Request $request)
    {
        return view('music.check');
    }

    public function choose(Request $request)
    {
        return view('music.choose');
    }

    public function time(Request $request)
    {
        return view('music.time');
    }

    public function finish(Request $request)
    {
        return view('music.finish');
    }

    public function login(Request $request)
    {
        $param = ['message' => 'メールアドレスとパスワードを入力してください。'];
        return view('music.loguin',$param);
    }

    public function kaiin(Request $request)
    {
        $param = ['message' => 'メールアドレスとパスワードを登録してください。'];
        return view('music.kaiin',$param);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/music');
    }

     public function main(Request $request){
        return view('music.main');
    }

    public function newcreate(Request $request){
        $param = [
            'id' => $request->id,
            'date' => $request->date,
            'place' => $request->place,
            'time' => $request->time
        ];
        DB::insert('insert into touroku(id,date,place,time) values (:id,:date,:place,:time)', $param);
        return redirect('/show');
    }

    public function show(Request $request){
        $items = DB::select('select * from touroku');
            return view('music.show',['items' => $items]);
        } 

}