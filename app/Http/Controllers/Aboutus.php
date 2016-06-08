<?php namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;

class Aboutus extends Controller
{
	
    public function aboutus(Request $request){
    	return view('about-us');
		
    }


}
