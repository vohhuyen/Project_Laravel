<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class PageController extends Controller
{
    public function getIndex(){		
    	return view('page.home');	
    }
    public function getIndexLogin(){		
    	return view('page.login');	
    }
    public function Login(Request $request){		
    	$login = [
            'email' =>$request->input('email'),
            'password'=>$request->input('pw')
        ];
        if(Auth::attempt($login)){
            $user = Auth::user();
            Session::put('user',$user);
            echo '<script>alert("Đăng nhập thành công");windown.location.assign("index");</script>';
        }else{
            echo '<script>alert("Đăng nhập không thành công");windown.location.assign("login");</script>';
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
}
