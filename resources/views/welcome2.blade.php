<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{setting('site.description')}}">
        
    <title>{{setting('site.title')}}</title>

    <link rel="shortcut icon" href="{{  Voyager::image(setting('site.logo'))}}" type="image/x-icon" > 
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
                            <h2 class="title"><span class="d-lg-block">Learn The</span> Skills You Need <span class="d-lg-block">To Succeed</span></h2>
                            <button class="btn btn-success"><i class="icofont-whatsapp"></i> <span>Contact Us Now</button>
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
                                    <img width="80" class="" src="{{Voyager::image($data->image)}}" alt="{{$data->keterangan}}">
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
    <div class="category-section padding-tb  style-2">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Popular Category</span>
                <h2 class="title">Popular Category For Learn</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/07.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Computer Science</h6></a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/08.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Civil Engineering</h6></a>
                                    <span>63 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/09.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Business Analysis</h6></a>
                                    <span>63 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/10.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Data Science Analytics</h6></a>
                                    <span>65 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/11.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Learning Management</h6></a>
                                    <span>78 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/12.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Computer Engineering</h6></a>
                                    <span>92 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/13.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Design Architect</h6></a>
                                    <span>68 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/14.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Foreign Language</h6></a>
                                    <span>48 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->

    
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
                                <img src="assets/images/feedback/01.jpg" alt="student feedback">
                                <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/01.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6>Oliver Beddows</h6></a>
                                            <span>UX designer</span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward process and monetze</p>
                                </div>
                            </div>
                        </div>
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/02.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6>Madley Pondor</h6></a>
                                            <span>UX designer</span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Rapidiously buildcollaboration anden deas sharing viaing and with bleedng edgeing nterfaces fnergstcally plagiarize teams anbuling paradgms whereas goingi forward process and monetze</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->

    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">World-class Instructors</span>
                <h2 class="title">Classes Taught By Real Creators</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/01.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team.html"><h4>Emilee Logan</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/02.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team.html"><h4>Donald Logan</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/03.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team.html"><h4>Oliver Porter</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/04.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team.html"><h4>Nahla Jones</h4></a>
                                    <p>Master of Education Degree</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center footer-btn">
                    <p>Want to help people learn, grow and achieve more in life?<a href="team.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->

    <!-- Skill section start here -->
    <div class="skill-section padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <div class="section-header">
                        <h2 class="title">Build Your Project Management Skills Online Anytime</h2>
                        <a href="#" class="lab-btn"><span>Sign Up Now</span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="section-wrpper">
                        <div class="row g-4 justify-content-center row-cols-sm-2 row-cols-1">
                            <div class="col">
                                <div class="skill-item">
                                    <div class="skill-inner">
                                        <div class="skill-thumb">
                                            <img src="assets/images/skill/icon/01.jpg" alt="skill thumb">
                                        </div>
                                        <div class="skill-content">
                                            <h5>Skilled Instructors</h5>
                                            <p>You pick the schedule.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="skill-item">
                                    <div class="skill-inner">
                                        <div class="skill-thumb">
                                            <img src="assets/images/skill/icon/02.jpg" alt="skill thumb">
                                        </div>
                                        <div class="skill-content">
                                            <h5>Get Certificate</h5>
                                            <p>You pick the schedule.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="skill-item">
                                    <div class="skill-inner">
                                        <div class="skill-thumb">
                                            <img src="assets/images/skill/icon/03.jpg" alt="skill thumb">
                                        </div>
                                        <div class="skill-content">
                                            <h5>Online Classes</h5>
                                            <p>You pick the schedule.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="skill-item">
                                    <div class="skill-inner">
                                        <div class="skill-thumb">
                                            <img src="assets/images/skill/icon/04.jpg" alt="skill thumb">
                                        </div>
                                        <div class="skill-content">
                                            <h5>Educator Helps</h5>
                                            <p>You pick the schedule.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill section ending here -->


    <!-- Achievement section start here -->
    <div class="achievement-section style-2 padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">START TO SUCCESS</span>
                <h2 class="title">Achieve Your Goals With Edukon</h2>
            </div>
            <div class="section-wrapper">
                <div class="counter-part">
                    <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="30" data-speed="1500"></span><span>+</span></h2>
                                        <p>Years of Language Education Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="3080" data-speed="1500"></span><span>+</span></h2>
                                        <p>Learners Enrolled in Edukon Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="330" data-speed="1500"></span><span>+</span></h2>
                                        <p>Qualified Teachers And Language Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="2300" data-speed="1500"></span><span>+</span></h2>
                                        <p>Innovative Foreign Language Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievement section ending here -->

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
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
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
                                    <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
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
                                    <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
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
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/01.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/02.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/03.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/04.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/05.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/06.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->

    <!-- footer -->
    <div class="news-footer-wrap">
        <div class="fs-shape">
            <img src="assets/images/shape-img/03.png" alt="fst" class="fst-1">
            <img src="assets/images/shape-img/04.png" alt="fst" class="fst-2">
        </div>
        <!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper">
                    <div class="news-title">
                        <h3>Want Us To Email You About Special Offers And Updates?</h3>
                    </div>
                    <div class="news-form">
                        <form action="/">
                            <div class="nf-list">
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <input type="submit" name="submit" value="Subscribe Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-top padding-tb pt-0">
                <div class="container">
                    <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Site Map</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Documentation</a></li>
                                                <li><a href="#">Feedback</a></li>
                                                <li><a href="#">Plugins</a></li>
                                                <li><a href="#">Support Forums</a></li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Useful Links</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Help Link</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Social Contact</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                                <li><a href="#">YouTube</a></li>
                                                <li><a href="#">Github</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Our Support</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Paid with Mollie</a></li>
                                                <li><a href="#">Status</a></li>
                                                <li><a href="#">Changelog</a></li>
                                                <li><a href="#">Contact Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->

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