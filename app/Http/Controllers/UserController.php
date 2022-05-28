<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('greeting');
    }
    public function show($id)
    {
        return 'User id is '.$id;
    }
}
