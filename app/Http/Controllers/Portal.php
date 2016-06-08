<?php namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;

class Portal extends Controller
{

    public function get_tour_package(Request $request, $slug_url) {
       $get_tour = DB::table('tour_package')->where('slug_url', $slug_url)->first();
       return view('portal/tour/sigle', compact("get_tour"));
    }

    public function tour_package(Request $request) {
       $tour = DB::table('tour_package')->orderBy('id', 'dsc')->get();
       return view('portal/tour/tour', compact("tour"));
    }

    public function Events(Request $request) {
       $events = DB::table('events')->orderBy('id', 'dsc')->get();
       return view('portal/events/events', compact("events"));
    }

    public function spot_category(Request $request, $category){
        $list = DB::table('tourist_location')->where('category_id', $category)->get();
    
        $category = DB::table('category_directory')->get();        

        return view('portal/category', compact("list", "category"));
        
    }

    
    public function ReachMosque(Request $request) {
        return view('portal/reach-mosque');
    }

    public function QiblaDirection(Request $request) {
       return view('portal/reach-mosque');
    }


    public function home(Request $request) {
        $tour = DB::table('tour_package')->orderBy('id', 'dsc')->get();
        return view('index', compact("tour"));
    }

    public function hotel(Request $request){
    	$hotel = DB::table('tourist_location')->where('category_id', 1)->get();
    	return view('portal/hotel/hotel', compact("hotel"));
		
    }

    public function get_hotel(Request $request, $slug_url){
    	$get_hotel = DB::table('tourist_location')->where('slug_url', $slug_url)->first();
    

    	$category = DB::table('category_directory')->get();
    	


    	return view('portal/hotel/sigle', compact("get_hotel", "category"));
		
    }


    public function restaurant(Request $request){
        $restaurant = DB::table('tourist_location')->where('category_id', 2)->get();
        return view('portal/restaurant/restaurant', compact("restaurant"));

    }


    public function get_restaurant(Request $request, $slug_url){
        $get_restaurant = DB::table('tourist_location')->where('slug_url', $slug_url)->first();
    

        $category = DB::table('category_directory')->get();
    

        return view('portal/restaurant/sigle', compact("get_restaurant", "category"));
        
    }


     public function mosque(Request $request){
        $mosque = DB::table('tourist_location')->where('category_id', 3)->get();
        return view('portal/mosque/mosque', compact("mosque"));

    }

    public function get_mosque(Request $request, $slug_url){
        $get_mosque = DB::table('tourist_location')->where('slug_url', $slug_url)->first();
    

        $category = DB::table('category_directory')->get();
    

        return view('portal/mosque/sigle', compact("get_mosque", "category"));
        
    }


     public function tourist_attraction(Request $request){
        $tourist_attraction = DB::table('tourist_location')->where('category_id', 4)->orderBy('id', 'dsc')->get();
        $category = DB::table('category_directory')->orderBy('id', 'dsc')->get();
        return view('portal/tourist_attraction/tourist_attraction', compact("tourist_attraction", "category"));

    }

    public function get_tourist_attraction(Request $request, $slug_url){
        $get_place = DB::table('tourist_location')->where('slug_url', $slug_url)->first();
    

        $category = DB::table('category_directory')->get();
    

        return view('portal/tourist_attraction/sigle', compact("get_place", "category"));
        
    }

}
