<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    public function showlogin(){
        return view('auth.login');
    }
    public function loginprocess(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $datacheak=$request->only('email','password');

        if (auth()->attempt($datacheak)){
            if(auth()->user()->status==1){
                return redirect()->route('dashboard');
            }

        }else{
            session()->flash('error','Username Or Password Does Not Match');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('/');

    }
    public function userProfile(){
        return view('auth.viewProfile');
    }
}
