

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
                <div class="col-md-11">
                    <div class="group-select-right">
                        <div class="row g-2 row-cols-lg-4 row-cols-sm-2 row-cols-1">
                            <div class="col">
                                <div class="select-item">
                                    <select>
                                       @foreach ($kategori as $data)
                                       <option value="">{{$data->title}}</option>
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
            </div>
        </div>
    </div>
</div>
<!-- group select section ending here -->


<!-- course section start here -->
<div class="course-section padding-tb ">
    <div class="container">
        <div class="section-wrapper">      
            <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                @foreach ($program as $data)
                <div class="col">
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
            @if ($program->hasPages())
            <ul class="default-pagination lab-ul">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="disabled"><i class="icofont-rounded-left">{{ __('Prev') }}</i></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('Prev') }}</a></li>
                @endif
                
                
                
                {{ "Page " . $paginator->currentPage() . "  of  " . $paginator->lastPage() }}
               
                
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('Next') }}</a></li>
                @else
                    <li class="disabled"><i class="icofont-rounded-right">{{ __('Next') }}</i></li>
                @endif
            </ul>
        @endif
            <ul class="default-pagination lab-ul">
                <li>
                    <a href="#"><i class="icofont-rounded-left"></i></a>
                </li>
                <li>
                    <a href="#">01</a>
                </li>
                <li>
                    <a href="#" class="active">02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li>
                <li>
                    <a href="#"><i class="icofont-rounded-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- course section ending here -->


@include('layout.footer')
