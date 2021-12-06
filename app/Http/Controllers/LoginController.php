<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(route('dashboard'));
        } else {
            return redirect()->back()->with('msg', 'Email or password incorrect');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
