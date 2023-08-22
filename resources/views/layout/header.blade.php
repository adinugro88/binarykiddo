    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here update -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="icofont-ui-call"></i> <span> {{$contact->handphone}}</span>
                        </li>
                        <li>
                            <i class="icofont-ui-call"></i> <span>{{$contact->handphone2}}</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> {{$contact->address}}
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="#" class="fb"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-youtube"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html"><img src="{{ Voyager::image( $contact->logo ) }}" alt="logo" width="100"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#0">Home</a>
                                </li>
                                
                                <li>
                                    <a href="#0">About</a>
                                   
                                </li>
                                <li>
                                    <a href="#0">Courses</a>
                                    
                                </li>
                               
                                <li><a href="contact.html">Contact</a></li>
                                <li>
                                    <a href="#0">Career</a>
                                    
                                </li>
                            </ul>
                        </div>
                        
                        <a href="login.html" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        {{-- <a href="signup.html" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a> --}}

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->