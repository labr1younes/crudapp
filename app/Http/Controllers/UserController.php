<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function hello(Request $request) {
        $incomingfields = $request->validate([
            'fname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]) ;
        return "Hello Younes!!! ";
    }
}
