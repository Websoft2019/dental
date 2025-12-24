@extends('site.template')
@section('content')
<!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>Teeth</span> Whitening</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home</a></li>
								<li class="breadcrumb-item"><a href="index.html">our services</a></li>
								<li class="breadcrumb-item active" aria-current="page">teeth whitening</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>our services</h3>
                            <ul>
                                <li><a href="#">general dental care</a></li>
                                <li><a href="#">dental implants</a></li>
                                <li><a href="#">cosmetic dentistry</a></li>
                                <li><a href="#">teeth whitening</a></li>
                            </ul>
                        </div>
                        <!-- Service Categories List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Cta Content Start -->
                            <div class="icon-box">
                                <img src="images/icon-cta.svg" alt="">
                            </div>

                            <div class="cta-content">
                                <h3>Need help ?</h3>
                                <p>Schedule your initial consultation today and start your journey towards a pain-free, healthier smile. Contact us now!</p>
                            </div>
                            <!-- Cta Content End -->

                            <!-- Cta Appointment Button Start -->
                            <div class="cta-contact-btn">
                                <a href="#" class="btn-default">contact us</a>
                            </div>
                        <!-- Cta Appointment Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Featured Image Start -->
                        <div class="service-featured-image">
                            <figure class="reveal image-anime">
                                <img src="{{ asset('site/images/service-single-img.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Service Featured Image End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            <h3 class="wow fadeInUp">advanced diagnostic tools</h3>
                            <p> lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                        </div>
                        <!-- Service Entry Content End -->
                    </div>
                    <!-- Service Single Content End -->

                    <!-- Service Accordian Start -->
                    
                    <!-- Service Accordian End -->
                </div>
            </div>
        </div>
    </div>
    @stop