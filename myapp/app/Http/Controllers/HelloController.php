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
}
