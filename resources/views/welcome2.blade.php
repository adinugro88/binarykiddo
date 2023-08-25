<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{setting('site.description')}}">

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

    @include('layout.header')
    <!-- banner section start here -->
    <section class="banner-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-10">
                        <div class="banner-content">
                            <h6 class="subtitle text-uppercase fw-medium">Online education</h6>
                            <h2 class="title"><span class="d-lg-block">Learn The</span> Skills You Need <span
                                    class="d-lg-block">To Succeed</span></h2>
                            <button class="btn primarycolor"><i class="icofont-whatsapp"></i> <span>Contact Us
                                    Now</button>
                            {{-- <form action="/">
                                <div class="banner-icon">
                                    <i class="icofont-search"></i>
                                </div>
                                <input type="text" placeholder="Keywords of your course">
                                <button type="submit">Search Course</button>
                            </form> --}}

                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="banner-thumb">
                            <img src="01-min.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes"></div>
        <div class="cbs-content-list d-none">
            <ul class="lab-ul">
                <li class="ccl-shape shape-1"><a href="#">16M Students Happy</a></li>
                <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>
                <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>
                <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>
                <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li>
            </ul>
        </div>
    </section>
    <!-- banner section ending here -->


    <!-- sponsor section start here -->
    <div class="sponsor-section section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        @foreach ($picture as $data)
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img width="80" class="" src="{{Voyager::image($data->image)}}"
                                        alt="{{$data->keterangan}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->



  
    <!-- category section start here -->
    <div class="category-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Popular Category</span>
                <h2 class="title">Popular Category For Learn</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                   @foreach ($kategori as $data)
                   <div class="col">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            <div class="category-thumb">
                                <img src="{{Voyager::image($data->icon)}}" alt="category">
                            </div>
                            <div class="category-content">
                                <a href="#"><h6>{{$data->title}}</h6></a>
                               
                            </div>
                        </div>
                    </div>
                </div> 
                   @endforeach
                   


                </div>
                <div class="text-center mt-5">
                    <a href="course.html" class="lab-btn"><span>Browse All Categories</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->

    <!-- Course Section Start Here -->
    <div class="course-section style-2 padding-tb section-bg-ash yellow-color-section">
        <div class="container">
            <div class="section-header">
                <span class="subtitle yellow-color">Don’t Miss</span>
                <h2 class="title">Our Courses</h2>
                <div class="course-navigations">
                    <div class="course-navi course-navi-next"><i class="icofont-double-left"></i></div>
                    <div class="course-navi course-navi-prev"><i class="icofont-double-right"></i></div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="swiper-wrapper">
                        @foreach ($program as $data)
                        <div class="swiper-slide">
                            <div class="course-item style-3">
                                <div class="course-inner text-center">
                                    <div class="course-thumb">
                                        <img src="{{Voyager::image($data->picture)}}" alt="course">
                                        <ul class="course-info lab-ul">
                                            <li><span class="course-name">{{$data->kategori}}</span></li>
                                            {{-- <li>
                                                <span class="ratting">
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                </span>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div class="course-content">
                                        <a href="course-single.html">
                                            <h4>{{$data->title}}</h4>
                                        </a>
                                        {{-- <div class="course-details">
                                            <div class="couse-count"><i class="icofont-users-alt-3"></i> 200</div>
                                            <div class="couse-topic"><i class="icofont-speech-comments"></i> 23</div>
                                        </div> --}}
                                        <br>
                                        <a href="course-single.html" class="lab-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Section Ending Here -->


    <!-- student feedbak section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Loved by 200,000+ students</span>
                <h2 class="title">Students Community Feedback</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="{{ Voyager::image( $contact->youtube_thumbnail ) }}" alt="student feedback">
                                <a href="{{ $contact->youtube  }}" class="video-button"
                                    data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->

    <!-- instructor Single Section Starts Here -->
    <section class="instructor-single-section padding-tb section-bg">
		<div class="container">
			<div class="instructor-wrapper">
				<div class="instructor-single-top">

					<div class="instructor-single-item d-flex flex-wrap justify-content-between">
						<div class="instructor-single-thumb">
							<img src="{{Voyager::image($founder->photo)}}" alt="instructor">
						</div>
						<div class="instructor-single-content">
							<h4 class="title">{{$founder->nama}}</h4>
							<p class="ins-dege">{{$founder->title}}</p>
                            {!!($founder->text)!!}
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
    <!-- instructor Single Section Ends Here -->





    <!-- blog section start here -->
    <div class="blog-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">FORM OUR BLOG POSTS</span>
                <h2 class="title">More Articles From Resource Library</h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg"
                                            alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in
                                        straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/02.jpg"
                                            alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in
                                        straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/03.jpg"
                                            alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html">
                                        <h4>Scottish Creatives To Receive Funded Business.</h4>
                                    </a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in
                                        straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

     <!-- sponsor section start here -->
     <div class="sponsor-section section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        @foreach ($picture as $data)
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img width="80" class="" src="{{Voyager::image($data->image)}}"
                                        alt="{{$data->keterangan}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->
    
    @include('layout.footer')

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/progress.js')}}"></script>
    <script src="{{asset('assets/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/js/counter-up.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>

</html>
