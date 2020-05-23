<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index(Request $request)
    {
        
        $data = [
            'msg' => $request->hello,
        ];
        return view('hello.index',$data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye,
        ];
        //web.phpのルーティング設定でindexを
        //name設定でhelloに設定しているため、
        //リダイレクトでindexを呼び出せる。
        //return redirect()->route('hello');
        return view('hello.index',$data);
    }
}
