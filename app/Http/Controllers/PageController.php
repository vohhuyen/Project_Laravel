<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
