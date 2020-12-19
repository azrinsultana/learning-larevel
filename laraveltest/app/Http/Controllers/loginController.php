<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }
    public function verify(Request $req){
		
		$user = user::where('username', $req->username)
		->where('password', $req->password)
		->get();
		
       
			if(count($user) > 0){
    		$req->session()->put('username', $req->username);
            $req->session()->put('type', $req->username);
    		return redirect('/home');
    	}else{
    		$req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    		//return view('login.index');
    	}

    }
}
