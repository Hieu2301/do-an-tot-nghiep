<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    //
    public function register(){
        return view('front.auth.register');
    }
    public function register_user(Request $request)
    {
        user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'level' => 0,
        ]);
        return redirect()->back();
    }


   public function login(){
        return view('front.auth.login',[
            'title' => 'Login'
        ]);
    }
    public function store (Request $request)
    {
        // $remember = isset($request->input('remember')) ? true : faise;
        $this->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
       if (Auth::attempt([
           'email'=> $request->input('email'),
           'password'=>$request->input('password'),
           'level' => 1,   ],
           

           $request->input('remember')))
           {
               return redirect()->route('admin');
       }


       Session::flash('error','Email hoặc password không chính xác!');

       return redirect()->back();
    }

}
