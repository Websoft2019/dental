@extends('site.template')
@section('content')
    <div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>Contact</span> Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('getHome') }}">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Contact Start -->
     <div class="page-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact info</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Connecting</span> Near & Far </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">For emergency dental care or to schedule an appointment, contact our office at visit our clinic.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact US Info Start -->
                        <div class="contact-us-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('site/images/icon-location.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>visit us on</h3>
                                            <p>Naya Bazar, Pokhara-8 (Infront of GMC Hospital)</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.25s">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('site/images/icon-phone.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Us Content Start -->
                                    <div class="contact-info-content">
                                        <h3>contact us</h3>
                                        <p>(+977) 61 585477 </p>
                                        <p>(+977) 9856056459</p>
                                    </div>
                                    <!-- Contact Us Content End -->
                                    </div>
                                <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.5s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('site/images/icon-clock.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>working hours</h3>
                                            <p>Sun to Fri : 08:30 To 05:45</p>
                                            <p>Sat : 08:30AM To 11:00AM</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.75s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="{{ asset('site/images/icon-mail.svg') }}" alt="">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>email us</h3>
                                            <p>info@paschimanchaldentalhome.com.np</p>
                                            <p>.....@gmail.com</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Contact US Info End -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Google Map Start -->
                    <div class="google-map">
                        <!-- Google Map Iframe Start -->
                        <div class="google-map-iframe">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.7171646033385!2d83.9839426751006!3d28.211516675897297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595b258998c5d%3A0x7bede21c2c40fdd5!2sPaschimanchal%20Dental%20Home!5e1!3m2!1sen!2snp!4v1765870903598!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map Iframe End -->
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
     </div>
    <!-- Page Contact End -->

    <!-- Contact Form Start -->
	<div class="contact-us-form">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Contact Us Image Start -->
					 <div class="contact-us-img">
						<figure class="reveal image-anime">
							<img src="{{ asset('site/images/contact-us-img.jpg') }}" alt="">
						</figure>
					 </div>
					<!-- Contact Us Image End -->
				</div>
				<div class="col-lg-6">
					<div class="contact-form">
						<!-- Section Title Start -->
						<div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch With Us</h2>
                        </div>
                        <!-- Section Title End -->

						<form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                    
                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                    
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                    
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                    
                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Your Message" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                    
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">send message</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form End -->
@stop