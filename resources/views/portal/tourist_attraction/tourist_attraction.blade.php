<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Halal Aceh - Syariah Trip in Aceh</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="{{{ asset('static/css/base.css') }}}" rel="stylesheet">
    
    <!-- Radio and check inputs -->
    <link href="{{{ asset('static/css/skins/square/grey.css') }}}" rel="stylesheet">
    
    <!-- Range slider -->
    <link href="{{{ asset('static/css/ion.rangeSlider.css') }}}" rel="stylesheet" >
    <link href="{{{ asset('static/css/ion.rangeSlider.skinFlat.css') }}}" rel="stylesheet">
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/.css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/.css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/.css'>
        
    <!--[if lt IE 9]>
      <script src="{{{ asset('static/js/html5shiv.min.js') }}}"></script>
      <script src="{{{ asset('static/js/respond.min.js') }}}"></script>
    <![endif]-->
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

   <!--  <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div> -->
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      </i><strong>+62 852 7054 6820
                        </strong>

                         <b>/</b>       

                        <i class="icon-email">
                            
                        </i><strong>contact@halalaceh.com
                        </strong>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_facebook">
                                                    <i class="icon-facebook"></i>Facebook </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_paypal">
                                                    <i class="icon-paypal"></i>Paypal </a>
                                            </div>
                                        </div>
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="#">Forgot password?</a>
                                        <input type="submit" name="Sign in" value="Sign in" id="Sign_in" class="button_drop">
                                        <input type="submit" name="Sign_up" value="Sign up" id="Sign_up" class="button_drop outline">
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ route('home') }}"><img src="{{{ asset('static/img/logo.png') }}}" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal"></a>
                        <a href="{{ route('home') }}"><img src="{{{ asset('static/img/logo-black.png') }}}" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    
                    @include('portal/menu')

                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                        <strong>
										<a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_3.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

    
<section class="parallax-window" data-parallax="scroll" data-image-src="{{{ asset('static/img/slide02.jpg') }}}" data-natural-width="1400" data-natural-height="470">
    <!-- <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paris Hotels</h1>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div> -->
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('tourist_attraction') }}">Tourist Attraction</a></li>
                    </ul>
        </div>
    </div><!-- Position -->
    
<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div  class="container margin_60">
            
    	<div class="row">
        <aside class="col-lg-3 col-md-3">
           
        
		<div class="box_style_cat">
			<ul id="cat_nav">
				<li><a href="#" id="active"><i class="icon_set_1_icon-93"></i><b>All Halal Spot</b></a></li>
				@foreach ($category as $data)
                <li><a href="{{ route('spot_category', ['id' => $data->id ]) }}"><i class="{{ $data->css_class }}"></i>{{ $data->name }}</a></li>
                @endforeach
			</ul>
		</div>
        
		

		<div class="box_style_2">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<a href="tel://6285270546820" class="phone" style="font-size: 20px;">+62 852 7054 6820</a>
			<small>Monday to Friday 9.00am - 7.30pm</small>
		</div>
		</aside><!--End aside -->
            <div class="col-lg-9 col-md-9">
            
            <div id="tools">
            
           <div class="row">
           	<div class="col-md-3 col-sm-3 col-xs-6">
            	<div class="styled-select-filters">
								<select name="sort_price" id="sort_price">
									<option value="" selected>Sort by price</option>
									<option value="lower">Lowest price</option>
									<option value="higher">Highest price</option>
								</select>
				</div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="styled-select-filters">
								<select  name="sort_rating" id="sort_rating">
									<option value="" selected>Sort by ranking</option>
									<option value="lower">Lowest ranking</option>
									<option value="higher">Highest ranking</option>
								</select>
				</div>
                </div>            	
    
            <div class="col-md-6 col-sm-6 hidden-xs text-right">
            	<a href="all_restaurant_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
            </div>
        	
        	</div>
            </div><!--/tools -->
          
                 @foreach ($tourist_attraction as $data)

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.5s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">
                    	<div class="img_list">
                            <a href="{{ route('get_tourist_attraction', ['slug_url' => $data->slug_url ]) }}">
                                <img src="{{{ asset('media/directory') }}}/{{ unserialize($data->images)[0] }}" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                            <div class="rating"></div>
                    		<h3><strong>{{ $data->name }}</strong></h3>
                            <p>{{ str_limit($data->about, 300) }}</p>
                             
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div>
                        <p><a href="{{ route('get_hotel', ['slug_url' => $data->slug_url ]) }}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->


                 @endforeach
                
                
                <hr>
                
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->
              
        </div><!-- End col lg-9 -->
    </div><!-- End row -->
</div><!-- End container -->
    
@include('portal/footer')

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="{{{ asset('static/js/jquery-1.11.2.min.js') }}}"></script>
<script src="{{{ asset('static/js/common_scripts_min.js') }}}"></script>
<script src="{{{ asset('static/js/functions.js') }}}"></script>

<!-- Specific scripts -->
<!-- Cat nav mobile -->
<script  src="{{{ asset('static/js/cat_nav_mobile.js') }}}"></script>
<script>$('#cat_nav').mobileMenu();</script>
<!-- Check and radio inputs -->
<script src="{{{ asset('static/js/icheck.js') }}}"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{{ asset('static/js/map_restaurants.js') }}}"></script>
<script src="{{{ asset('static/js/infobox.js') }}}"></script>
  </body>
</html>