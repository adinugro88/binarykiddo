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


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>{{$contact->email}}</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> {{$contact->address}}
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                        <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                        <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
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
                                    <ul class="lab-ul">
                                        <li><a href="index.html" class="active">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                        <li><a href="index-5.html">Home Five</a></li>
                                        <li><a href="index-6.html">Home Six</a></li>
                                        <li><a href="index-7.html">Home Seven</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#0">Courses</a>
                                    <ul class="lab-ul">
                                        <li><a href="course.html">Course</a></li>
                                        <li><a href="course-single.html">Course Details</a></li>
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                    <ul class="lab-ul">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-2.html">Blog Style 2</a></li>
                                        <li><a href="blog-3.html">Blog Style 3</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Pages</a>
                                    <ul class="lab-ul">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="instructor.html">Instructor</a></li>
                                        <li>
                                            <a href="#0">Shop Pages</a>
                                            <ul class="lab-ul">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Details Page</a></li>
                                                <li><a href="cart-page.html">Shop Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="search-page.html">Search Page</a></li>
                                        <li><a href="search-none.html">Search None</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        
                        <a href="login.html" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="signup.html" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

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