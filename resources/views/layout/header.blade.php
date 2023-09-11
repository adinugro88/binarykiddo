<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>{{setting('site.title')}}</title>

    <link rel="shortcut icon" href="{{  Voyager::image(setting('site.logo'))}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        .banner-section {
            background-image: url(bgbanner.jpg);
        }

    </style>
</head>

<body> 
 
 
 <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here udapajsdhasjkd -->


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
                        {{-- <li>
                            <i class="icofont-email"></i> <span>{{$contact->email}}</span>
                        </li> --}}
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
                        <a href="/"><img src="{{ Voyager::image( $contact->logo ) }}" alt="logo" width="100"></a>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                
                                <li>
                                    <a href="/about">About</a>
                                   
                                </li>
                                <li>
                                    <a href="/promo&event">Promo & Event </a>
                                   
                                </li>
                                <li>
                                    <a href="/course">Courses</a>
                                    
                                </li>
                               
                                <li><a href="/contact">Contact</a></li>
                                
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