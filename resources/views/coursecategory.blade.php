@include('layout.header')



<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Archives: Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->

<!-- group select section start here -->
<div class="group-select-section">
    <div class="container">
        <div class="section-wrapper">
            <div class="row align-items-center g-4">
                <div class="col-md-1">
                    <div class="group-select-left">
                        <i class="icofont-abacus-alt"></i>
                        <span>Filters</span>
                    </div>
                </div>
                <form action="/coursecategory" method="get">
                <div class="col-md-11">
                    <div class="group-select-right">
                        <div class="row g-2 row-cols-lg-4 row-cols-sm-2 row-cols-1">
                            
                                <div class="col">
                                    <div class="select-item">
                                        <select name="category">
                                            @foreach ($kategori as $data)
                                            <option value="{{$data->title}}">{{$data->title}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-icon">
                                            <i class="icofont-rounded-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="select-item">
                                        <button class="btn-success">Search</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- group select section ending here -->

<!-- course section start here -->
<div class="course-section style-3 padding-tb">
    <div class="course-shape one"><img src="assets/images/shape-img/icon/01.png" alt="education"></div>
    <div class="course-shape two"><img src="assets/images/shape-img/icon/02.png" alt="education"></div>
    <div class="container">

        <div class="section-wrapper">
            <div
                class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">

                @foreach ($program as $item)
                <div class="col english">
                    <div class="course-item style-4">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{Voyager::image($item->picture)}}" alt="course">
                                <div class="course-category">
                                    <div class="course-cate">
                                        <a href="#">{{$item->kategori}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content">
                                <a href="/course/{{str_replace(' ', '-', $item->title)}}">
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
