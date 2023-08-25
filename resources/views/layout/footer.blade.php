   <!-- Footer Section Start Here -->
   <footer class="style-2 yellow-color-section">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col">
                    <div class="footer-item our-address">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <img width="250" src="{{ Voyager::image( $contact->logo ) }}" alt="education">
                                </div>
                                <div class="content">
                                    
                                   
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
                                    <h4>Courses</h4>
                                </div>
                                <div class="content">
                                    <p>Binary kiddo is a local company. Binary Kiddo was founded on January 11, 2018 in Indonesia. The reason we founded Binary Kiddo is because we see the lifestyle</p>
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
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul office-address">
                                        <li><i class="icofont-google-map"></i> {{$contact->address}}</li>
                                        <li><i class="icofont-phone"></i> {{$contact->handphone}}</li>
                                        <li><i class="icofont-envelope"></i> {{$contact->email}}</li>
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
                                    <h4>Social Media</h4>
                                </div>
                                <div class="content">
                                   
                                </div>

                                
                                <ul class="lab-ul social-icons text-center">
                                    <li>
                                        <a href="{{$contact->facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
                                    </li>
                                  
                                   
                                    <li>
                                        <a href="{{$contact->instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$contact->youtube}}" class="pinterest"><i class="icofont-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ending Here -->


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
