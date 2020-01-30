<?php

namespace App\Http\Controllers;

use Cassandra\Session;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function registration(){
        return view('auth.registration');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard');
        }
        return Redirect('login');

    }

    public function postRegistration(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('dashboard');

    }

    public function dashboard(){

        if(Auth::check()) {
            return view('auth.dashboard');
        }
        return redirect('login');

    }

    public function logout(){
        Auth::logout();
        return redirect('login');

    }
}
