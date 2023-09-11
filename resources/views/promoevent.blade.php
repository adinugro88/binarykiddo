@include('layout.header')



<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Promo & Events</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Promo & Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->

<!-- group select section start here -->

<!-- group select section ending here -->

<!-- course section start here -->
<div class="course-section style-3 padding-tb">
    <div class="course-shape one"><img src="assets/images/shape-img/icon/01.png" alt="education"></div>
    <div class="course-shape two"><img src="assets/images/shape-img/icon/02.png" alt="education"></div>
    <div class="container">

        <div class="section-wrapper">
            <div
                class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">

                @foreach ($event as $item)
                <div class="col english">
                    <div class="course-item style-4">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{Voyager::image($item->thumbnail)}}" alt="course">
                                <div class="course-category">
                                    <div class="course-cate">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="course-content">
                                <a href="/promoevent/{{str_replace(' ', '-', $item->title)}}">
                                    <h5>{{$item->title}}</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($promo as $item)
                <div class="col english">
                    <div class="course-item style-4">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{Voyager::image($item->thumbnail)}}" alt="course">
                                <div class="course-category">
                                    <div class="course-cate">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="course-content">
                                <a href="/promoevent/{{str_replace(' ', '-', $item->title)}}">
                                    <h5>{{$item->title}}</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</div>
<!-- course section ending here -->


@include('layout.footer')
