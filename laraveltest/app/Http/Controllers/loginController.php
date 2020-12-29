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
						if($req->session()->get('username') == "admin"){
									return redirect()->route('home.index');
						}
								else{
									return redirect()->route('product.index');
						}
								}

		else{
    		$req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    		
    	}

    }
}
