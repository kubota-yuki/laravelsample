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
        return view('music.loguin');
    }
}