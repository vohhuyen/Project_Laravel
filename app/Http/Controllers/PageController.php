<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function getIndex(){		
    	return view('page.home');	
    }
    public function getIndexLogin(){		
    	return view('page.login');	
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
