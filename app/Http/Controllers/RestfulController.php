<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestfulController extends Controller
{
    //

    public function index()
    {
        return view('restfullVerbs.restfull');
    }

    public function get()
    {
        return "Get";
    }

    public function post()
    {
        return "Post";
    }

    public function put()
    {
        return "Put";
    }

    public function patch()
    {
        return "Patch";
    }

    public function delete()
    {
        return "delete";
    }

    public function options()
    {
        return "options";
    }
}
