@include("layout.header")

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        @if ($event)
                        <h2>{{$event->title}}</h2>
                        @else
                        <h2>{{$promo->title}}</h2>
                        @endif
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">

                @if ($event)
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <img src="{{Voyager::image($event->thumbnail)}}" alt="blog thumb rajibraj91" class="w-100">
                                            </div>
                                            <div class="post-content">
                                                <h2>{{$event->title}}</h2>
                                              
                                                {!!($event->body)!!}
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @else
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <img src="{{Voyager::image($promo->thumbnail)}}" alt="blog thumb rajibraj91" class="w-100">
                                            </div>
                                            <div class="post-content">
                                                <h2>{{$promo->title}}</h2>
                                              
                                                {!!($promo->body)!!}
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endif
              
              
            </div>
        </div>
    </div>
    <!-- blog section ending here -->





@include("layout.footer")