<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>{{ $get_tour->package_name }} | HalalAceh</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- CSS -->
    <link href="{{{ asset('static/css/base.css') }}}" rel="stylesheet">
    
    <link href="{{{ asset('static/css/owl.carousel.css') }}}" rel="stylesheet">
    <link href="{{{ asset('static/css/owl.theme.css') }}}" rel="stylesheet">
     <link href="{{{ asset('static/css/magnific-popup.css') }}}" rel="stylesheet">

    <!-- CSS -->
     <link href="{{{ asset('static/css/date_time_picker.css') }}}" rel="stylesheet">

     <!-- LEAFLET -->
     <link href="{{{ asset('static/plugins/leaflet/leaflet.css') }}}" rel="stylesheet">
    
     <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="{{{ asset('static/js/html5shiv.min.js') }}}"></script>
      <script src="{{{ asset('static/js/respond.min.js') }}}"></script>
    <![endif]-->
    
    <style type="text/css">
    .owl-item img {
        padding: 2px;
    }

    .owl-item img:hover {
         cursor:zoom-in;
    }

    .iframe {
        height: 100px !important ;
    }
    </style>    

</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <!-- <div id="preloader">
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
    <header id="plain">
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
                        <a href="{{ route('home') }}"><img src="{{{ asset('static/img/logo-black.png') }}}" width="160" height="34" alt="City tours"  class="logo_normal"></a>
                        <a href="{{ route('home') }}"><img style="color:black;" src="{{{ asset('static/img/logo-black.png') }}}" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
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
                                        <a href="payment_restaurant.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

   <section class="parallax-window" data-parallax="scroll" data-image-src="{{{ asset('media/tour_package') }}}/{{ unserialize($get_tour->images)[0] }}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>{{ $get_tour->package_name }}</h1>
                    <span>{{ $get_tour->location }}</span>
                   
                </div>
               
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position">
            <div class="container">
                        <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="{{ route('tour_package') }}">Tour Package</a></li>
                        <li>{{ $get_tour->package_name }}</li>
                        </ul>
            </div>
    </div><!-- End Position -->
    
 <div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8" id="single_tour_desc">
        
                
            <div class="owl-carousel">
                @foreach ( unserialize($get_tour->images) as $images)
                <div class="image-link">
                    <img  style="width:250px"  href="{{{ asset('media/tour_package') }}}/{{ $images }}" src="{{{ asset('media/tour_package') }}}/{{ $images }}">
                </div>
                @endforeach
            </div>

            <hr>


            <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                <h4></h4>
                {!! $get_tour->description !!}

                

                </div>




            </div>
            
            <hr>


            <div class="row">
                <div class="col-md-3">
                    <h3>Facilities</h3>
                </div>
                <div class="col-md-9">


                <h4>Inclusions</h4>
                 {!! $get_tour->price_includes !!}

                 <h4>Exclusions</h4>
                 {!! $get_tour->price_excludes !!}

                </div>




            </div>
            
            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>Itinerary</h3>
                </div>
                <div class="col-md-9">
                <h4></h4>
                {!! $get_tour->itinerary !!}

            </div>



            </div>
            
            
            <hr>

            <div class="clear"></div>


            <div class="row">
                <div class="col-md-3">
                    <h3>Review</h3>
                    <!-- <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a> -->
                </div>
                <div class="col-md-9">
                    <h4></h4>
                    <div class="fb-comments" data-href="http://halalaceh.com" data-numposts="20"></div>
                </div>

                
            </div>

            <hr>
            
            
        </div><!--End  single_tour_desc-->
        
        <aside class="col-md-4 hidden-sm hidden-xs">
            <div id="mapid" style="width: 100%; height: 230px; margin-top: 2px;"></div>
            <p></p>
            <!-- check avability -->
            <div class="box_style_1 expose">
            <h3 class="inner">Check Availability</h3>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label><i class="icon-calendar-7"></i> Check in</label>
                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                     <div class="form-group">
                        <label><i class="icon-calendar-7"></i> Check out</label>
                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Adults</label>
                        <div class="numbers-row">
                            <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                        <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Children</label>
                        <div class="numbers-row">
                            <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                        <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
                    </div>
                </div>
            </div>
            <br>
            
            <a class="btn_full" href="cart_hotel.html">Check now</a>
            <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
        </div>
        <!-- end check avability -->
            <div class="box_style_4">
                <i class="icon_set_1_icon-90"></i>
                <h4><span>Book</span> by phone</h4>
                <a href="tel://004542344599" class="phone">+62 852 7054 6820</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </aside>
    </div><!--End row -->
</div><!--End container -->
    
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© Citytours 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
<div id="overlay"></div><!-- Mask on input focus -->   

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
            </div>
            <div class="modal-body">
                <div id="message-review">
                </div>
                <form method="post" action="assets/review_restaurant.php" name="review_restaurant" id="review_restaurant">
                <input name="restaurant_name" id="restaurant_name" type="hidden" value="Mexican Taco Mex">  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control" name="position_review" id="position_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Service</label>
                                <select class="form-control" name="service_review" id="service_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <select class="form-control" name="price_review" id="price_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quality</label>
                                <select class="form-control" name="quality_review" id="quality_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="form-group">
                        <textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
                    </div>
                    <input type="submit" value="Submit" class="btn_1" id="submit-review">
                </form>
            </div>
        </div>
    </div>
</div><!-- End modal review -->

 <!-- Common scripts -->
<script src="{{{ asset('static/js/jquery-1.11.2.min.js') }}}"></script>
<script src="{{{ asset('static/js/common_scripts_min.js') }}}"></script>
<script src="{{{ asset('static/js/functions.js') }}}"></script>

<!-- Specific scripts -->
<script src="{{{ asset('static/js/icheck.js') }}}"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 
<!-- Date and time pickers -->
<script src="{{{ asset('static/js/bootstrap-datepicker.js') }}}"></script>
<script src="{{{ asset('static/js/bootstrap-timepicker.js') }}}"></script>
<script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
</script>

<!--Review modal validation -->
<script src="{{{ asset('static/assets/validate.js') }}}"></script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{{ asset('static/js/map_single_restaurant.js') }}}"></script>
<script src="{{{ asset('static/js/infobox.js') }}}"></script>

<!-- Carousel -->
<script src="{{{ asset('static/js/owl.carousel.min.js') }}}"></script>
<script src="{{{ asset('static/js/jquery.magnific-popup.min.js') }}}"></script>
<script src="{{{ asset('static/plugins/leaflet/leaflet.js') }}}"></script>

<script type="text/javascript">
    
    var mymap = L.map('mapid').setView([{{ $get_tour->latitude }}, {{ $get_tour->longtitude }}], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(mymap);


        L.marker([51.5, -0.09]).addTo(mymap)
            .bindPopup("<b>{{ $get_tour->package_name }}</b>").openPopup();



</script>
<script type="text/javascript">
        
    $('.owl-carousel').owlCarousel({
         items : 3,
         stagePadding: 50
    })

    $('.image-link ').magnificPopup({
    type:'image',
    delegate: 'img',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
  });

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=600800236673952";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  </body>
</html>