@extends('site.template')
@section('content')
    <div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>Our</span> Services</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('getHome') }}">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">services</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-1.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>general dental care</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-2.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>dental implants</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-3.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>cosmetic dentistry</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-4.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>teeth whitening</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-5.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>pediatric dental care</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-6.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>advanced oral care</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-7.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>comfort dentistry</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('site/images/icon-services-8.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>smile renewal</h3>
                            <p>We are excited to meet you and provide the best dental care for your family.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Diagnosis of</span> Dental Diseases</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 order-1">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('site/images/icon-why-us-1.svg') }}" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>experienced doctor</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-2.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>personalized care</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-3.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>flexible payment options</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>

                <div class="col-lg-4 order-lg-1 order-md-2 order-1">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image wow fadeInUp">
                        <figure>
                            <img src="images/why-choose-us-img.png" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-2">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-4.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>emergency services</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-5.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>positive patient reviews</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-6.svg" alt="">
                            </div>  
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>latest technology</h3>
                                <p>The goal of our clinic is to provide friendly, caring dentistry and the.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Testiminial Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonial</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What our</span> Client Say</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability.  eco-friendly initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Testiminial Image Start -->
                    <div class="testimonial-image">
                        <div class="testimonial-img">
                            <figure class="reveal image-anime">
                                <img src="images/testimonials-img.jpg" alt="">
                            </figure>
                        </div>

                        <!-- Terstimonial Rating Box Start -->
                        <div class="testimonial-rating-box">
                            <!-- Counter Item Start -->
                            <div class="rating-counter-item">
                                <div class="rating-counter-number">
                                    <h3><span class="counter">4.7</span>/5</h3>
                                </div>

                                <div class="rating-counter-content">
                                    <p>This rate is given by user after visiting our location</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                            <!-- Service Rating Start -->
                            <div class="service-rating">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                    <li>for excellence services</li>
                                 </ul>
                            </div>
                            <!-- Service Rating End -->
                        </div>
                        <!-- Terstimonial Rating Box End -->
                    </div>
                    <!-- Testiminial Image End -->                  
                </div>

                <div class="col-lg-7">
                    <!-- Testimonial Slider Start -->
					<div class="testimonial-slider">
						<div class="swiper">
							<div class="swiper-wrapper" data-cursor-text="Drag">
								<!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"I want to say thank you to my doctor Steve! Vivamus sagittis massa vitae bibendum rhoncus. Duis cursus.” “Thank you for helping me overcome my fear of the dentist! Vivamus sagittis massa vitae bibendum rhoncus. Duis cursus."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>robert lee</h3>
                                                <p>software engineer</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"The best dental experience I've ever had! The team was professional and friendly, and the results were amazing. Highly recommend!"Dr. Smith and his staff are fantastic! They made me feel comfortable and at ease during my visit."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>banson doe</h3>
                                                <p>teacher</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">	
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="images/icon-testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"Excellent service and care. The staff is knowledgeable and always willing to answer questions. I wouldn't go anywhere else for my dental needs.""From the moment I walked in, I felt welcomed and cared for. staff is exceptional."</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>thomas linda</h3>
                                                <p>designer</p>
                                            </div>
                                        </div>													
									</div>
								</div>
								<!-- Testimonial Slide End -->
							</div>
							<div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
				                <div class="testimonial-button-next"></div>
                            </div>
						</div>
					</div>
					<!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testiminial End -->
@stop