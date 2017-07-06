<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id)
    {
        return 'User '.$id;
    }

    public function postComments($postId, $commentId, Request $request)
    {
        dd($request);
        return "$postId : $commentId";
    }
}
