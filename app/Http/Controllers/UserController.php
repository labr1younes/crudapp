<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{   
    public function login(Request $request){
        $incomingfields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]) ;
        
        if (auth()->attempt(['name'=> $incomingfields['loginname'],'password'=>$incomingfields['loginpassword']])) {
            request()->session()->regenerate();
        }
        return redirect ('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function hello(Request $request) {
        $incomingfields = $request->validate([
            'name' => ['required','min:3','max:10', Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required'
        ]) ;
        $incomingfields['password'] = bcrypt($incomingfields['password']);
        $user = User::create($incomingfields);
        auth()->login($user);
        return redirect('/');
    }
}
