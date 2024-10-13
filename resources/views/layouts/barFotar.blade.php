<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<!-- Font Awesome (all.min.css) -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">

<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

<!-- Mean Menu CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">

<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

<!-- Responsive -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/">
								<img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Home</a>	
								</li>
								<li><a href="/product">Product</a></li>
								<li><a href="/category">Categroy</a>
									<ul class="sub-menu">
										<li><a href="/product/{catid?}">Smart Devices & Accessories</a></li>
										<li><a href="about.html">Fashion/Apparel</a></li>
										<li><a href="cart.html">Home Goods/Furniture</a></li>
										<li><a href="checkout.html">Beauty/Cosmetics</a></li>
										<li><a href="contact.html">Health & Wellness Products</a></li>
										<li><a href="news.html">Toys & Games</a></li>
									</ul>
								</li>
								<li><a href="/dashboard">News</a>
								</li>
								<li><a href="/about">About</a></li>
								<li><a href="/contact">Contact us</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
	<!-- end hero area -->
    @yield('content2')

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="/about">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2024 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.instagram.com/3mmarnajar/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/3mmarnajar/" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/3mmarnajar/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.instagram.com/3mmarnajar/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/3mmarnajar/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Count Down -->
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>

<!-- Waypoints -->
<script src="{{ asset('assets/js/waypoints.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!-- Mean Menu -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

<!-- Sticker JS -->
<script src="{{ asset('assets/js/sticker.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>