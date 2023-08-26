

@include('layout.header')

    <!-- Pageheader section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pageheader section ending here -->

    <!-- About Us Section Start Here -->
    <div class="about-section style-3 padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="{{ Voyager::image( $about->image ) }}" alt="about">
                        </div>
                        <div class="abs-thumb">
                            <img src="{{ Voyager::image( $about->image2 ) }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-header">
                            <span class="subtitle">About Our BinaryKiddo</span>
                            <h2 class="title">Good Qualification Services And Better Skills</h2>
                            {!!($about->body)!!}
                        </div>
                        {{-- <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/01.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Skilled Instructors</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/02.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Get Certificate</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="assets/images/about/icon/03.jpg" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>Online Classes</h5>
                                        <p>Distinctively provide acces mutfuncto users whereas communicate leveraged services</p>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section Ending Here -->

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

    
    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb ">
        <div class="container">
            <div class="section-header text-center">
                
                <h2 class="title">Our Instructors</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    
                    @foreach ($teacher as $data)
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="{{Voyager::image($data->image)}}" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href=""><h4>{{$data->nama}}</h4></a>
                                    <p>{{$data->materi}}</p>
                                   
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    @endforeach
                 
                
                </div>
             
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->



@include('layout.footer')
