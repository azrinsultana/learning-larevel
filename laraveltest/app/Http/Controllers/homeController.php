<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class homeController extends Controller
{
    function index(Request $req){
    	/*$data = ['id'=> 123, 'name'=> 'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '1234')
    			->with('name', 'xyz');*/

    	/*return view('home.index')
    			->withId('1234')
    			->withName('xyz');*/

/*    	$v = view('home.index');
    	$v->withId('123');
    	$v->withName('alamin');
   		return $v;*/

           $id = 123;
        $name = $req->session()->get('username');
        return view('home.index', compact('id', 'name'));

    }
  




    public function create(){
        //
        return view('home.create');
    }

    public function store(Request $req){
        $user = new user();
        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->empname         = $req->empname;
        $user->contactno        = $req->contactno;
        
        //$user->profile_img  = $file->getClientOriginalName();
        if($user->save()){
            return redirect()->route('home.userlist');
        }else{
            return back();
        }

        return redirect('/userlist');
    }

    public function userlist(){
        //$users  = $this->getUserlist();
        $users  = user::all();
        return view('home.userlist')->with('users', $users);
       // return view('home.userlist')->with('users', $users);
    }

    public function show($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function edit($id){
        $user = user::find($id);       
        return view('home.edit', $user);
    }

    public function update($id, Request $req){
        $validation = Validator::make($req->all(), [
            'username' => 'required|min:3',
            'password'=> 'required',
            'empname' => 'required',
            'contactno' => 'required',

        ]);
        $user = user::find($id); 
        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->empname         = $req->empname;
        $user->contactno        = $req->contactno;
        
        $user->save();

        return redirect()
        ->route('home.userlist')
        ->$with('errors',$validation->errors());
    }

    public function delete($id){
        $user = user::find($id);       
        return view('home.delete', $user);
    }

    public function destroy($id){
        $user = user::find($id); 
        $user->delete();
        return redirect()->route('home.userlist');

    }



}
