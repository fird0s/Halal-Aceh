<?php namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;

class AuthCostumController extends Controller
{
	

    public function login(Request $request){
    	if ($request->input('email') && $request->input('password')){
    		$user = DB::table('users')->where('email', $request->input('email'))->first();
    		if ($user && Crypt::decrypt($user->password) == $request->input('password')){
    			$request->session()->put("user", $user->email);
				return redirect("/account/profile");
			}else{
				$request->session()->flash('error', 'Email or password invalid');
			}
			
		}
    	return view('admin/login');
    }


    public function register(Request $request){
    	if ($request->input('name') && $request->input('email') && $request->input('password') && $request->input('password') )
		{

			// create new user and new user profile
			$id = DB::table('users')->insertGetId([
				'name' => $request->input('name'), 
				'email' => $request->input('email'), 
				'password' => Crypt::encrypt($request->input('password'))
				]
			);

			DB::table('user_profile')->insert([
				'user_id' => $id,
				'gender' => 1
				]
			);

			DB::table('user_social_media')->insert([
				'user_id' => $id
				]
			);


			return redirect('account/login');

		}
		return view('admin/register');
    }

}
