<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveWireController extends Controller
{
        //
        public function index(): void
        {
            return view('hello.index');
        }
}