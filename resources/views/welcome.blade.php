<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Binarykiddo</title>

        
        <!-- CSS FILES -->        
        <link href="{{asset("asset/css/bootstrap.min.css")}}" rel="stylesheet">

        <link href="{{asset("asset/css/bootstrap-icons.css")}}" rel="stylesheet">

        <link href="{{asset("asset/css/templatemo-kind-heart-charity.css")}}" rel="stylesheet">


    </head>
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            EduCenter, Jl. Sekolah Foresta, Lengkong Kulon, Pagedangan, Tangerang, Banten 
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@company.com">
                                info@binarykiddo.id
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                       Best Class Program
                        <small>Your Children Future</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#top">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Program</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_3" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Class</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="news.html">Coding Block Class</a></li>
                                <li><a class="dropdown-item" href="news-detail.html">Design Class </a></li>

                                <li><a class="dropdown-item" href="">Office & Business ADm Class  </a></li>
                                <li><a class="dropdown-item" href="">Acceleration Class  </a></li>
                                <li><a class="dropdown-item" href="">Coding Block Class</a></li>
                                <li><a class="dropdown-item" href="">Game Class  </a></li>
                                <li><a class="dropdown-item" href="">Phyton Class</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                                <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($banner as $data)
                                    <div class="carousel-item active">
                                        <img src="/storage/{{$data->gambar}}" class="carousel-image img-fluid" alt="logo binarykiddo">
                                    </div>
                                    @endforeach
                                   

                                   

                                    {{-- <div class="carousel-item">
                                        <img src="asset/images/slide/medium-shot-people-collecting-donations.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div>
                                    </div> --}}
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Selamat datang di BinaryKiddo</h2>
                        </div>
                        @foreach ($point as $data)
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="/storage/{{$data->image}}" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text">{{$data->title}} <strong>{{$data->HIghtlight}}</strong></p>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_2">
                <div class="container">
                    <div class="row">
                        @foreach ($about as $data)
                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="/storage/{{$data->image}}" class="custom-text-box-image img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">Our Story</h2>
                                <h5 class="mb-3">Your Children Future</h5>
                                <p class="mb-0">{!!($data->body)!!}</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Our Mission</h5>
                                        {!!($data->short_body)!!}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="2018" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>
                                            <span class="counter-text">Founded</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="120" data-speed="1000"></span>
                                            </div>
                                            <span class="counter-text">Over Join</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="about-section section-padding">
                <div class="container">
                    <div class="row">
                        @foreach ($founder as $data )
                        <div class="col-lg-6 col-md-5 col-12">
                            <img src="/storage/{{$data->photo}}" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-md-7 col-12">
                            <div class="custom-text-block">
                                <h2 class="mb-0">{{$data->nama}}</h2>
                                <p class="text-muted mb-lg-4 mb-md-4">{{$data->title}}</p>
                                {!!$data->text!!}

                                {{-- <ul class="social-icon mt-4">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Punya Pertanyaan <br> Hubungi Kami</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <a href="#" class="me-4"></a>

                            <a href="#section_4" class="custom-btn btn smoothscroll">Whatsapp Customer Service</a>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Class Program</h2>
                        </div>
                        @foreach ($kelas as $data)
                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="/storage/{{$data->picture}}" class="custom-block-image img-fluid" alt="">
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">{{$data->title}}</h5>
                                        

                                        {!!Str::limit($data->body, 50)!!}
                                        <span class="badge rounded-pill text-bg-warning">{{$data->kategori}}</span>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">read more..</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        


                    </div>
                </div>
            </section>

            <section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2  class="text-white mb-4">Partners</h2>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Volunteer</h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h3 class="mb-4">Become a volunteer today</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="input-group input-group-file">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            
                                            <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div>
                                    </div>
                                </div>

                                <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="asset/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                                <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5">
                            <h2>Latest News</h2>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="asset/images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Lifestyle,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Clothing Donation
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 12, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                32 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based on Bootstrap</p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block mt-3">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="asset/images/news/medium-shot-people-collecting-foodstuff.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Food,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Donation,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Caring
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 20, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                35 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="#" method="get" role="form">
                                <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>

                            <h5 class="mt-5 mb-3">Recent news</h5>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="asset/images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 16, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="asset/images/news/close-up-happy-people-working-together.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 24, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="category-block d-flex flex-column">
                                <h5 class="mb-3">Categories</h5>

                                <a href="#" class="category-block-link">
                                    Drinking water
                                    <span class="badge">20</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Food Donation
                                    <span class="badge">30</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Children Education
                                    <span class="badge">10</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Poverty Development
                                    <span class="badge">15</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Clothing Donation
                                    <span class="badge">20</span>
                                </a>
                            </div>

                            <div class="tags-block">
                                <h5 class="mb-3">Tags</h5>

                                <a href="#" class="tags-block-link">
                                    Donation
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clothing
                                </a>

                                <a href="#" class="tags-block-link">
                                    Food
                                </a>

                                <a href="#" class="tags-block-link">
                                    Children
                                </a>

                                <a href="#" class="tags-block-link">
                                    Education
                                </a>

                                <a href="#" class="tags-block-link">
                                    Poverty
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clean Water
                                </a>
                            </div>

                            <form class="custom-form subscribe-form" action="#" method="get" role="form">
                                <h5 class="mb-4">Newsletter Form</h5>

                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Happy Customers</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entreprenuer</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="asset/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="asset/images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="asset/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="asset/images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                            <div class="contact-info-wrap">
                                <h2>Get in touch</h2>

                                <div class="contact-image-wrap d-flex flex-wrap">
                                    <img src="asset/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0">Clara Barton</p>
                                        <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                    </div>
                                </div>

                                <div class="contact-info">
                                    <h5 class="mb-3">Contact Infomation</h5>

                                    <p class="d-flex mb-2">
                                        <i class="bi-geo-alt me-2"></i>
                                        Akershusstranda 20, 0150 Oslo, Norway
                                    </p>

                                    <p class="d-flex mb-2">
                                        <i class="bi-telephone me-2"></i>

                                        <a href="tel: 120-240-9600">
                                            120-240-9600
                                        </a>
                                    </p>

                                    <p class="d-flex">
                                        <i class="bi-envelope me-2"></i>

                                        <a href="mailto:info@yourgmail.com">
                                            donate@charity.org
                                        </a>
                                    </p>

                                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8128144646926!2d106.64903341417207!3d-6.288317963298791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb40b786868b%3A0xac470b8a4869d6cd!2sBinary%20Kiddo!5e0!3m2!1sen!2sid!4v1596110831114!5m2!1sen!2sid" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="450" frameborder="0"></iframe>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4">
                        <img src="logo.png" class="logo img-fluid" alt="BinaryKiddo">
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel: 120-240-9600" class="site-footer-link">
                                120-240-9600
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                donate@charity.org
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </p>

                        <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                        	Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        </div>
                        
                        <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src={{asset("asset/js/jquery.min.js")}}></script>
        <script src={{asset("asset/js/bootstrap.min.js")}}></script>
        <script src={{asset("asset/js/jquery.sticky.js")}}></script>
        <script src={{asset("asset/js/click-scroll.js")}}></script>
        <script src={{asset("asset/js/counter.js")}}></script>
        <script src={{asset("asset/js/custom.js")}}></script>
    </body>
</html>
