<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Paschimanchal Dental Clinic</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/images/favicon.png') }}">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('site/css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('site/css/swiper-bundle.min.css') }}">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('site/css/all.css') }}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('site/css/animate.css') }}" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('site/css/mousecursor.css') }}">
	<!-- Main Custom Css -->
	<link href="{{ asset('site/css/custom.css') }}" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('site/images/loader.svg') }}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="{{ route('getHome') }}">
						<img src="{{ asset('site/images/logo.png') }}" alt="Logo" width="150">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('getHome') }}">Home</a></li>
                                                             
                                <li class="nav-item"><a class="nav-link" href="{{ route('getAboutUs') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('getServices') }}">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('getGallery') }}">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('getBlogs') }}">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('getContactUs') }}">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="">book appointment</a></li>                               
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="" class="btn-default">book appointment</a>
                        </div>
                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('site/images/logo-footer.png') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>The goal our clinic is provide friendly, caring dentistry and highest level of general, cosmetic, and specialist dental treatments.</p>
                         </div>
                         <!-- About Footer Content End -->
                     </div>
                    <!-- About Footer End -->
                </div>
                <div class="col-lg-3 col-md-4">
                    <!-- Footer Quick Links Start -->
                    <div class="footer-links footer-quick-links">
                        <h3>quick links</h3>
                        <ul>                            
                            <li><a href="#">home</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">book apoointment</a></li>
                        </ul>
                    </div>
                    <!-- Footer Quick Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Social Links Start -->
                    <div class="footer-links footer-social-links">
                        <h3>social media</h3>
                        <ul>                            
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">instagram</a></li>
                            <li><a href="#">youtube</a></li>
                            <li><a href="#">twitter</a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Links End -->
                </div>

                <div class="col-lg-2 col-md-4">
                    <!-- Footer Contact Links Start -->
                    <div class="footer-links footer-contact-links">
                        <h3>contact us</h3>
                        <ul>                            
                            <li><a href="#">info@domain.com</a></li>
                            <li><a href="#">+(123) 698-5245</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact Links End -->
                </div>                
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright &copy; {{ date('Y') }} All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('site/js/jquery-3.7.1.min.js') }}"></script>
   
    <!-- Bootstrap js file -->
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('site/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('site/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('site/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('site/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('site/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('site/js/gsap.min.js') }}"></script>
    <script src="{{ asset('site/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('site/js/SplitText.js') }}"></script>
    <script src="{{ asset('site/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('site/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('site/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('site/js/function.js') }}"></script>

</body>

</html>