<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //
    public function basic()
    {
        return view('welcome');
    }

    public function foo()
    {
            return 'Hello World';
//        return ["k1"=>"v1","k2"=>"v2"];
    }
}
