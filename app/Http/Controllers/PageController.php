<?php

namespace App\Http\Controllers;


use App\Models\Users;
use function PHPUnit\Framework\isNull;
use Illuminate\Contracts\Session\Session;
use Input, File;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slide;
use App\Models\productType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



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
            'password' =>$request->input('pw')
        ];
        if(Auth::attempt($login)){
            $user = Auth::users();
            Session::put('users',$user);
            
            echo'<script>alert("Đăng nhập thành công");window.location.assign("index");</script>';
        }
        else{
            echo'<script>alert("Đăng nhập thất bại");window.location.assign("login");</script>';
           
        }
    }
    
  
    
    
    public function Logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('index');
    }
   
    public function getIndexCreateAccount(){		
    	return view('page.createAccount');	
    }		
}
