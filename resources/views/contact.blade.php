

@include('layout.header')

 <!-- Page Header section start here -->
 <div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Get In Touch With Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->

<!-- Map & address us Section Section Starts Here -->
<div class="map-address-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Get in touch with us</span>
            <h2 class="title">We're Always Eager To Hear From You!</h2>
        </div>
        <div class="section-wrapper">
            <div class="row flex-row-reverse">
                <div class="col-xl-4 col-lg-5 col-12">
                    <div class="contact-wrapper">
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/01.png" alt="CodexCoder">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Address</h6>
                                <p>{{$contact->address}}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/02.png" alt="CodexCoder">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>{{$contact->handphone}}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/02.png" alt="CodexCoder">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>{{$contact->handphone2}}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/03.png" alt="CodexCoder">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Send email </h6>
                                <a href="mailto:info@gmail.com">{{$contact->email}}</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="map-area">
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8128144646926!2d106.64903341417207!3d-6.288317963298791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb40b786868b%3A0xac470b8a4869d6cd!2sBinary%20Kiddo!5e0!3m2!1sen!2sid!4v1596110831114!5m2!1sen!2sid" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map & address us Section Section Ends Here -->

@include('layout.footer')
