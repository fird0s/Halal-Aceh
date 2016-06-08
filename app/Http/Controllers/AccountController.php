<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;
use File;

class AccountController extends Controller
{

	 public function delete_tour_package(Request $request, $id){
        $tour_package = DB::table('tour_package')->where('id', $id)->first();
        if ($tour_package){
            $images = unserialize($tour_package->images);
            foreach (range(0, sizeof($images) - 1 ) as $get_image) {
                @unlink("media/tour_package/".$images[$get_image])."";
            }
            $directory = DB::table('tour_package')->where('id', $id)->delete();
            return redirect()->route('tour_package');
        }else{
        	return redirect()->route('tour_package');
        }   
        
    }

	public function edit_tour_package(Request $request, $id){
		$email = $request->session()->get('user');
        $user = DB::table('users')->where('email', $email)->first();
        $profile = DB::table('user_profile')->where('user_id', $user->id)->first();
        $tour = DB::table('tour_package')->where('id', $id)->first();


        if ( $request->hasFile('images') ){
    		// remove all images
    		$images = unserialize($tour->images);
    		foreach (range(0, sizeof($images) - 1 ) as $get_image) {
    			@unlink("media/tour_package/".$images[$get_image])."";
    		}

    		// add all images
    		$all_images = array();
    		foreach ($request->file('images') as $images) {
    			$imagename = time(). $images->getClientOriginalName();
    			$upload = $images->move("media/tour_package", $imagename);
    			array_push($all_images, $imagename);
    		}

    		DB::table('tour_package')->where('id', $id)->update([
			 	'images' => serialize($all_images)
			 ]);


    	}

    	if ($request->input('tour_name') && $request->input('duration') && $request->input('group_size') && $request->input('price_per_person') && $request->input('include') && $request->input('exclude') && $request->input('description') ){

    		DB::table('tour_package')->where('id', $id)->update([
			 	'author_id' => $user->id,	
			 	'package_name' => $request->input('tour_name'),
			 	'package_duration' => $request->input('duration'),
			 	'description' => $request->input('description'),
			 	'group_size' => $request->input('group_size'),
			 	'price_includes' => $request->input('include'),
			 	'price_excludes' => $request->input('exclude'),
			 	'price_per_person' => $request->input('price_per_person'),
			 	'itinerary' => $request->input('itinerary'),
			 	'latitude' => $request->input('latitude'),
			 	'longtitude' => $request->input('longtitude'),
			 	'slug_url' => str_slug($request->input('tour_name'))
			 ]);

    		return redirect()->route('edit_tour_package', ['id' => $id]);
    	}

        return view('admin/tour_package/edit_tour', compact("tour", "profile"));	
	}

	


	public function tour_package(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$tour_package = DB::table('tour_package')->where('author_id', $user->id)->orderBy('id', 'dsc')->get();

		return view('admin/tour_package/tour', compact("tour_package", "profile"));
	}

	public function add_tour_package (Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();

		if ($request->input('tour_name') && $request->input('duration') && $request->input('group_size') && $request->input('price_per_person') && $request->input('include') && $request->input('exclude') && $request->input('description') && $request->hasFile('images') ){

		 $all_images = array();
    		foreach ($request->file('images') as $images) {
    			$imagename = time(). $images->getClientOriginalName();
    			$upload = $images->move("media/tour_package", $imagename);
    			array_push($all_images, $imagename);
    		}

		 $id = DB::table('tour_package')->insertGetId([
		 	'author_id' => $user->id,	
		 	'package_name' => $request->input('tour_name'),
		 	'package_duration' => $request->input('duration'),
		 	'description' => $request->input('description'),
		 	'group_size' => $request->input('group_size'),
		 	'price_includes' => $request->input('include'),
		 	'price_excludes' => $request->input('exclude'),
		 	'price_per_person' => $request->input('price_per_person'),
		 	'itinerary' => $request->input('itinerary'),
		 	'images' => serialize($all_images),
		 	'latitude' => $request->input('latitude'),
		 	'longtitude' => $request->input('longtitude'),
		 	'slug_url' => str_slug($request->input('tour_name'))
		 ]);

		 $request->session()->flash('status', 'Success add tour package');
		 return redirect()->route('account_tour_package');


		}

		return view('admin/tour_package/add_tour', compact("profile"));	
	}

	public function delete_event(Request $request, $id){
		$event = DB::table('events')->where('id', $id)->delete();
		@unlink("media/event/".$event->image_poster)."";
		$request->session()->flash('status', 'Success delete event');
		return redirect()->route('account_event');
	}

	public function edit_event(Request $request, $id){

		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$event = DB::table('events')->where('id', $id)->first();

		if($request->input('event_name') && $request->input('ticket_price') && $request->input('event_date_start') && $request->input('event_date_end')  && $request->input('contact_person') && $request->input('ticket_price') && $request->input('time_start') && $request->input('time_end') && $request->input('location') && $request->input('about') ){
			
			// $imagename = time().$request->file('images')->getClientOriginalName();
   //  		$upload = $request->file('images')->move("media/event", $imagename);

			DB::table('events')->where('id', $id)->update
			([
				'author_id' => $user->id,
				'event_name' => $request->input('event_name'),
				'ticket_price' => $request->input('ticket_price'),
				'date_start' => $request->input('event_date_start'),
				'date_end' => $request->input('event_date_end'),
				'time_start' => $request->input('time_start'),
				'time_end' => $request->input('time_end'),
				'contact_person' => $request->input('contact_person'),
				'location' => $request->input('location'),
				'about' => $request->input('about'),
				'viewer' => 1,
				'slug_url' => str_slug($request->input('event_name')),
				'created_at' => date('Y-m-d'),
				'author_id' => $user->id
				]
			);

			$request->session()->flash('success', 'Event berhasil dirubah');
			return redirect()->route('account_edit_event', ['id' => $id]);
			
		}

		return view('admin/event/edit_event', compact("event", "profile"));
	}	

	public function event(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$events = DB::table('events')->where('author_id', $user->id)->orderBy('id', 'dsc')->paginate(1);
		return view('admin/event/event', compact("events", "profile"));
	}

	public function add_event(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		if($request->input('event_name') && $request->input('ticket_price') && $request->input('event_date_start') && $request->input('event_date_end')  && $request->input('contact_person') && $request->input('ticket_price') && $request->input('time_start') && $request->input('time_end') && $request->file('images') && $request->input('location') && $request->input('about') ){
			
			$imagename = time().$request->file('images')->getClientOriginalName();
    		$upload = $request->file('images')->move("media/event", $imagename);

			$id = DB::table('events')->insertGetId([
				'author_id' => $user->id,
				'event_name' => $request->input('event_name'),
				'ticket_price' => $request->input('ticket_price'),
				'date_start' => $request->input('event_date_start'),
				'date_end' => $request->input('event_date_end'),
				'time_start' => $request->input('time_start'),
				'time_end' => $request->input('time_end'),
				'contact_person' => $request->input('contact_person'),
				'location' => $request->input('location'),
				'about' => $request->input('about'),
				'viewer' => 1,
				'slug_url' => str_slug($request->input('event_name')),
				'created_at' => date('Y-m-d'),
				'author_id' => $user->id,
				'image_poster' => $imagename
				]
			);

			$request->session()->flash('status', 'Success add new event');
			return redirect()->route('account_event');
		}
		return view('admin/event/add_event', compact("profile"));
	}

	public function logout(Request $request){
		$request->session()->forget('user');
		return redirect("account/login");
	}
	public function directory(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$directory = DB::table('tourist_location')->where('author_id', $user->id)->orderBy('id', 'dsc')->paginate(10);
		return view('admin/directory/directory', compact("directory", "profile"));
	}


	public function add_directory(Request $request){

		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
    	$district = DB::table('list_district')->get();
    	$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
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
				'created_at' => date('Y-m-d'),
				'images' => serialize($all_images)
				]
			);




			$request->session()->flash('status', 'Success add new directory');

			return redirect("account/directory");
    	}
    	return view('admin/directory/add_directory', compact("district", "category", "profile"));
    }


    public function delete_directory(Request $request, $id){
    	$directory = DB::table('tourist_location')->where('id', $id)->first();
    	if ($directory){
    		$images = unserialize($directory->images);
			foreach (range(0, sizeof($images) - 1 ) as $get_image) {
				@unlink("media/directory/".$images[$get_image])."";
			}
			$directory = DB::table('tourist_location')->where('id', $id)->delete();
			return redirect("account/directory");
    	}else{
    		return redirect("account/directory");
    	}	
    	
    }

    public function edit_directory(Request $request, $id){
    	$district = DB::table('list_district')->get();
    	$category = DB::table('category_directory')->get();
    	$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
    	$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
    	$directory = DB::table('tourist_location')->where('id', $id)->first();

    	if ( $request->hasFile('images') ){
    		$images = unserialize($directory->images);
    		
    		// remove all images
    		foreach (range(0, sizeof($images) - 1 ) as $get_image) {
    			@unlink("media/directory/".$images[$get_image])."";
    		}

    		// add images
    		$all_images = array();
    		foreach ($request->file('images') as $images) {
    			$imagename = time(). $images->getClientOriginalName();
    			$upload = $images->move("media/directory", $imagename);
    			array_push($all_images, $imagename);
    		}

    		DB::table('tourist_location')->where('id', $id)->update
    		([
				'images' => serialize($all_images)
			]);
    	}


    	if( $request->input('directory_name') && $request->input('district') && $request->input('category') && $request->input('address')  && $request->input('youtube') && $request->input('about')   ){
    	

    		DB::table('tourist_location')->where('id', $id)->update
    		([
				'category_id' => $request->input('category'), 
				'location' => $request->input('address'),
				'district_id' => $request->input('district'), 
				'iframe_video' => $request->input('youtube'),
				'about' => $request->input('about'),
				'name' => $request->input('directory_name'),
				'slug_url' => str_slug($request->input('directory_name')),
				'updated_at' => date('Y-m-d')
				]
			);


			$request->session()->flash('status', 'Success edit directory');

			return redirect("account/directory/edit/".$id);
    	}

    	return view('admin/directory/edit_directory', compact("directory", "category", "district", "profile"));
    }


    public function profile(Request $request){
		$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
		$district = DB::table('list_district')->get();

		if ($request->hasFile('img_profile') ){
			
			@unlink("media/user/".$profile->photo_profile)."";

			$imagename = time().$request->file('img_profile')->getClientOriginalName();
    		$upload = $request->file('img_profile')->move("media/user/", $imagename);
    		DB::table('user_profile')->where('user_id', $user->id)->update
			([
				'photo_profile' => $imagename
			]);
		}


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
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
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
     	return view('admin/social_media', compact("social_media", "profile"));
    }

    public function settings(Request $request){
    	$email = $request->session()->get('user');
		$user = DB::table('users')->where('email', $email)->first();
		$profile = DB::table('user_profile')->where('user_id', $user->id)->first();
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
    	return view('admin/settings', compact("profile"));
    }	

    

}
