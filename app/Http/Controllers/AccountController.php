<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;

class AccountController extends Controller
{
	public function add_event(Request $request){
		if($request->input('event_name') && $request->input('ticket_price') && $request->input('event_date_start') && $request->input('event_date_end')  && $request->input('contact_person') && $request->input('ticket_price') && $request->input('time_start') && $request->input('time_end') && $request->file('images') && $request->input('location') && $request->input('about') ){
			return "ok";
		}
		return view('admin/event/add_event');
	}

	public function logout(Request $request){
		$request->session()->forget('user');
		return redirect("account/login");
	}
	public function directory(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();

		$directory = DB::table('tourist_location')->where('author_id', $user->id)->get();
		return view('admin/directory/directory', compact("directory"));
	}
	public function add_directory(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
    	$district = DB::table('list_district')->get();
    	$category = DB::table('category_directory')->get();
    	if($request->file('images') && $request->input('directory_name') && $request->input('district') && $request->input('category') && $request->input('address')  && $request->input('youtube') && $request->input('about')   ){
    	
    		$all_images = array();
    		foreach ($request->file('images') as $images) {
    			$imagename = time(). $images->getClientOriginalName();
    			$upload = $images->move("media/directory", $imagename);
    			array_push($all_images, $imagename);
    		}


    		$id = DB::table('tourist_location')->insertGetId([
				'category_id' => $request->input('category'), 
				'location' => $request->input('address'),
				'district_id' => $request->input('district'), 
				'iframe_video' => $request->input('youtube'),
				'about' => $request->input('about'),
				'name' => $request->input('directory_name'),
				'author_id' => $user->id,
				'slug_url' => str_slug($request->input('directory_name')),
				'created_at' => date('Y-m-d')
				]
			);

			DB::table('gallery')->insertGetID([
				'data_id' => $id,
				'image_1' => $all_images[0],
				'image_2' => $all_images[1],
				'image_3' => $all_images[2],
				'image_4' => $all_images[3],
				'image_5' => $all_images[4],
				'image_6' => $all_images[5],
				'image_7' => $all_images[6],
				'image_8' => $all_images[7],
				'image_9' => $all_images[8],
				'image_10' => $all_images[9]
				]
			);


			$request->session()->flash('status', 'Success add new directory');

			return redirect("account/directory");
    	}
    	return view('admin/directory/add_directory', compact("district", "category"));
    }


    public function profile(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$district = DB::table('list_district')->get();

		if ($request->input('email')){
			DB::table('users')->where('id', $user->id)->update
			([
				'email' => $request->input('email'), 
				'name' => $request->input('name'),
			]);

			$request->session()->put("user", $request->input('email'));
			

			DB::table('user_profile')->where('user_id', $user->id)->update
			([
				'full_address' => $request->input('address'),
				'gender' => $request->input('gender'),
				'phone_number' => $request->input('phone'),
				'about_me' => $request->input('about'),
				'district' => $request->input('district')
			]);

			$request->session()->flash('success', 'Your profile successfuly changed');


			return redirect('account/profile');


		}

    	return view('admin/profile', compact("user", "profile", "district"));
    }

    public function social_media(Request $request){
    	$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$social_media = DB::table('user_social_media')->where('user_id', $user->id)->first();
		if ($request->input('submit')){

			DB::table('user_social_media')->where('user_id', $user->id)->update
			([
				'facebook' => $request->input('facebook'),
				'twitter' => $request->input('twitter'),
				'google_plus' => $request->input('google_plus'),
				'instagram' => $request->input('instagram'),
				'bbm' => $request->input('BBM')
			]);

			$request->session()->flash('success', 'Your social media  successfuly changed');

			return redirect('account/social_media');

		}
     	return view('admin/social_media', compact("social_media"));
    }

    public function settings(Request $request){
    	$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		if ( $request->input("current_password") && $request->input("new_password") && $request->input("re_new_password") ){
			if ($user && Crypt::decrypt($user->password) == $request->input('current_password')){
				DB::table('users')->where('id', $user->id)->update([
					'password' => Crypt::encrypt($request->input("new_password"))
				]);

				$request->session()->flash('success', 'Your password successfuly changed');
				return redirect('account/settings');

			}else{
				$request->session()->flash('error', 'Your password wrong or invalid');
				return redirect('account/settings');
			}
		}
    	return view('admin/settings');
    }	

    

}
