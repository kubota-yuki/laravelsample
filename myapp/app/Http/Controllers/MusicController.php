<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    public function show(Request $request){
        $id = $request->id;
        $item = DB::table('データベース')->where('キー', $キー)->first();
            return view('hello.check',['item' => $item]);
        }
}
