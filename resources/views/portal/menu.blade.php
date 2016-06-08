   <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{ route('home') }}" class="show-submenu">Home </a>
                                
                            </li>

                            <li class="submenu">
                                <a href="{{ route('tour_package') }}" class="show-submenu">Book Tour </a>
                            </li>  

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Halal Spot <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="{{ route('spot_category', ['id' => 1]) }}">Hotel</a></li>
                                    <li><a href="{{ route('events') }}">Event</a></li>
                                    <li><a href="{{ route('spot_category', ['id' => 2]) }}">Kuliner</a></li>
                                    <li><a href="{{ route('spot_category', ['id' => 3]) }}">Mosque</a></li>
                                    <li><a href="{{ route('spot_category', ['id' => 4]) }}">Tourist Attraction</a></li>
                                </ul>
                            </li>
                                
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Travel Tools <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="{{ route('qibladirection') }}">Qibla Direction</a></li>
                                    <li><a href="{{ route('reachmosque') }}">Reach Mosque</a></li>
                                </ul>
                            </li>

                          

                            <li class="submenu">
                                <a href="{{ route('aboutus') }}" class="show-submenu">About Us </a>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->