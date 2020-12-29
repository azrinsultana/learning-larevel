<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class productController extends Controller
{
    function index(Request $req){
    	
        return view('product.index');

	}
	
	
    public function create(){
        //
        return view('product.create');
    }
}
