<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsernameController extends Controller
{
    //
    public function __invoke($name = 'John')
    {
        return $name;
    }
}
