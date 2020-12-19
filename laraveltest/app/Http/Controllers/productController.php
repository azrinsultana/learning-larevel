<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class productController extends Controller
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
        return view('product.index', compact('id', 'name'));

    }
}
