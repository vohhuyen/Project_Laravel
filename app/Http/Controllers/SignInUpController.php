<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\middleware;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\Users;
use App\Models\User;

class SignInUpController extends Controller
{
    public function getIndexLogin(){
        return view('page.login');
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'pw' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'pw.required' => 'Password is required.',
        ]); 
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw'),
        ];
        if (Auth::attempt($login)) {
            $loggedInUser = auth()->user();
            Session::put('user', $loggedInUser);
            $user = Users::where('Email', $loggedInUser->Email)->first();
            if ($user && isset($user->role)) {
                if($user->lock== 1){
                    if ($user->role == 1) {
                        return redirect('index');
                    } elseif ($user->role == 2) {
                        return redirect('admin');
                    } 
                    else{
                        return redirect('login')->with('status', 'invalid credentials');
                    }
                }
                else {
                    return redirect('login')->with('status', 'Your account has been locked');
                }     
            } else {
                return redirect('login')->with('status', 'invalid credentials');
            }
        }
        else{
            return redirect('login')->with('status', 'invalid credentials');
        }
    }
    public function Logout(){
        Session::forget('user');
        Session::forget('cart');
        return redirect('index');
    }
    public function getIndexCreateAccount(){
        return view('page.createAccount');
    }
    public function createAccount(Request $request){
        $input = $request->validate([
            'Name' => 'required|string',
            'Email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = bcrypt($input['password']);
        Users::create($input);

        return redirect()->route('login')->with('stt', 'Account registration successful, please login');
    }
}
