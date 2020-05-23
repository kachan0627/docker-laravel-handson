<?php
namespace App\Http\Controllers\sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'sample-controller'
        ];
        return view('hello.index',$data);
    }
    public function other(Request $request)
    {
        $data = [
            'msg' => 'sample-controller-other'
        ];
        return view('hello.index',$data);
    }
}