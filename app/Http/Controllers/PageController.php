<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $request->validate([
            'email' => 'required',
            'pw' => 'required',
        ]);
        
      
        if(Auth::attempt($login)){
            $user = Auth::user();
            Session::put('user',$user);
            return redirect('index')->with('status', 'Successfully');
        }else{
         
            return redirect('login')->with('status', 'Invalid credentials');
        }
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Password is required.',
        ]);
    
        // Your login logic here
    
        return redirect()->route('home');
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        
        echo '
            <script>
                alert("dang ky thanh cong.vui long dang nhap.");
                window.location.assign("login");
            </script>
        ';
    }
}
