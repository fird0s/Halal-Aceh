<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, Halal Aceh, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Halal Aceh - Syariah Trip in Aceh, transfers and tickets.">
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
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="{{{ asset('static/js/html5shiv.min.js') }}}"></script>
      <script src="{{{ asset('static/js/respond.min.js') }}}"></script>
    <![endif]-->
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <i class="icon-phone">
                            
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
                                    <a href="{{ route('account_login') }}" id="access_link">Sign in</a>
                                    
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="{{ route('account_register') }}" ><i span class="icon-plus"></i>Register</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ route('home') }}"><img src="{{{ asset('/static/img/logo.png') }}}" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true" class="logo_normal"></a>
                        <a href="{{ route('home') }}"><img src="{{{ asset('/static/img/logo-black.png') }}}" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true" class="logo_sticky"></a>
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
    
    
<section class="parallax-window" data-parallax="scroll" data-image-src="{{{ asset('static/img/slide02.jpg') }}}" data-natural-width="1400" data-natural-height="600">
</section>
    
<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>About US</li>
                    </ul>
        </div>
</div><!-- End Position -->

<div class="container margin_60">

	<div class="main_title">
        <h2>Out <span>Team </span></h2>
        <p>a much <b>stronger</b> or <b>deeper</b> friendship, and usually refers to someone <b>who is like family</b></p>
    </div>

<div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature">
                    <img style="width: 100px; text-align:center;" src="{{{ asset('/static/img/foto_team/furqan.jpg') }}}">
                    <h3><span >CEO  </span> <br> Furqan Maudhudy </h3>
                    
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="feature">
                    <img style="width: 100px; text-align:center;" src="{{{ asset('/static/img/foto_team/rafiqa.png') }}}">
                    <h3><span>CFO </span> <br> Rafiqa Rosma </h3>
                    
                </div>
            </div>

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature">
                    <img style="width: 100px; text-align:center;" src="{{{ asset('/static/img/foto_team/firdaus.png') }}}">
                    <h3><span>CTO  </span> <br> Muhammad Firdaus </h3>
                    
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="feature">
                    <img style="width: 100px; text-align:center;" src="{{{ asset('/static/img/foto_team/iqbalwahdi.png') }}}">
                    <h3><span>CMO </span> <br> M. Iqbal Wahdi </h3>
                    
                </div>
            </div>

            
        </div><!-- End row -->
        
</div><!-- End container -->

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg">
							<div class="features-img"></div>
						</div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-content">
                        	<h3>"Ex vero mediocrem"</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							<p><a href="#" class=" btn_1 white">Read more</a></p>
						</div>
					</div>
				</div>
			</div><!-- End container-fluid  -->
     
        	<div class="container margin_60">

            <div class="main_title">
                <h2>What <span>customers </span>says</h2>
            </div>
            
            	<div class="row">
                	<div class="col-md-6">
                    		<div class="review_strip">
                                <img src="img/avatar1.jpg" alt="" class="img-circle">
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                </div>
                            </div><!-- End review strip -->
                    </div>
                    
                    <div class="col-md-6">
                    		<div class="review_strip">
                                <img src="img/avatar2.jpg" alt="" class="img-circle">
                                <h4>Frank Rosso</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                </div>
                            </div><!-- End review strip -->
                    </div>
                </div><!-- End row -->
                <div class="row">
                	<div class="col-md-6">
                    		<div class="review_strip">
                                <img src="img/avatar3.jpg" alt="" class="img-circle">
                                <h4>Marc twain</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                      <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                </div>
                            </div><!-- End review strip -->
                    </div>
                    
                    <div class="col-md-6">
                    		<div class="review_strip">
                                <img src="img/avatar1.jpg" alt="" class="img-circle">
                                <h4>Peter Gabriel</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                </div>
                            </div><!-- End review strip -->
                    </div>
            </div><!-- End row -->
            
            <hr>
            
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><span>Get started</span> with CityTours</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
                    <ul class="list_order">
                        <li><span>1</span>Select your preferred tours</li>
                        <li><span>2</span>Purchase tickets and options</li>
                        <li><span>3</span>Pick them directly from your office</li>
                    </ul>
                    <a href="all_tour_list.html" class="btn_1">Start now</a>
                </div>
            </div><!-- End row -->
        </div><!-- End Container -->

@include('portal/footer')

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="{{{ asset('static/js/jquery-1.11.2.min.js') }}}"></script>
<script src="{{{ asset('static/js/common_scripts_min.js') }}}"></script>
<script src="{{{ asset('static/js/functions.js') }}}"></script>

  </body>
</html>