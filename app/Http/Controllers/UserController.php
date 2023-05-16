<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['name'] = "Lenora West";
        $data['email'] = "kes@efu.pn";
        $data['site'] = "http://mohiw.sy/iha";

        return view('post.index', $data);
    }
}
