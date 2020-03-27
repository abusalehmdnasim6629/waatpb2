<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> WAATPB </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
	<!-- ========== Start Stylesheet ========== -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/bsnav.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/site-animation.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet" />
	<link href="{{asset('style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5/html5shiv.min.js"></script>
	  <script src="assets/js/html5/respond.min.js"></script>
	<![endif]-->


</head>

<body>

	@include('sweetalert::alert')
	@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
	<!-- Start PreLoader
    ============================================= -->
	<div class="se-pre-con"></div>
	<!-- Start PreLoader-->

	<!-- Start header
    ============================================= -->
	<header class="header">
		<div class="container">
			<div class="main-navigation">
				<div
					class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-transparent bsnav-sticky-slide bsnav-scrollspy">
					<div class="container">
						<a class="navbar-brand" href="{{URL::to('/')}}">
							<img src="assets/img/logo/white-logo.png" class="logo-display" alt="thumb">
							<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
						</a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-sm-end">
							<ul class="navbar-nav navbar-mobile ml-auto">
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/')}}">Home</a>
								</li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#about"
										data-scrollspy="about">About</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#service"
										data-scrollspy="service">Services</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#history"
										data-scrollspy="history">History</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#event"
										data-scrollspy="event">Event</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu"
										href="{{URL::to('/career')}}">Career</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#gallary"
										data-scrollspy="gallary">Gallery</a></li>
								<?php 
								$lg = Session::get('lcheck');
								if($lg!=null){								
								?>
								<li class="nav-item"><a class="nav-link smooth-menu"
										href="{{URL::to('/profile')}}">Profile</a></li>

								<li class="nav-item"><a class="nav-link smooth-menu"
										href="{{URL::to('/logout')}}">Logout</a></li>

								<?php }else{ ?>
								<li class="nav-item"><a class="nav-link" href="#port-popup">Login</a></li>
								<?php } ?>
								<li class="nav-item"><a class="nav-link smooth-menu"
										href="{{URL::to('/member-registration')}}">Member</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="bsnav-mobile">
					<div class="bsnav-mobile-overlay"></div>
					<div class="navbar"></div>
				</div>
			</div>
		</div>
	</header>
	<!-- End header -->

	<div class="clearfix"></div>

	<main class="main">

		<!-- Start Slider
		============================================= -->
		<div id="home" class="hero-section">
			<div class="hero-slider">
				<!-- owl Slider Begin -->
				<div class="hero-single overlay-single overlay-shape">
					<div class="container">
						<div class="row">
							<div class="col-xl-6">
								<div class="hero-content">
									<h2>{{$header->header_title ?? ''}}</h2>
									<p class="mb-20">
										{{$header->header_description ?? ''}}
									</p>
									<div class="hro-btn">
										<a href="#about" class="theme-btn smooth-menu">Learn More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="hero-img">
									<img src="assets/img/header/banner_img.webp" alt="thumb">
								</div>
							</div>
						</div>
					</div>
				</div><!-- single Slider End -->
			</div>
		</div>
		<!-- End hero -->

		<!-- Start About
		============================================= -->
		<div id="about" class="about-area de-padding">
			<div class="container">
				<div class="about-wrapper grid-2">
					<div class="about-left">
<<<<<<< HEAD
						 <img src="{{$about->image}}" alt="thumb"> 
=======
						<img src="{{$about->image}}" alt="thumb">
>>>>>>> f6577f45eb5ec65fd1aa673df51da241b4d03c96
					</div>
					<div class="about-right">

						<div class="about-right-content">
							<h2>{{$about->about_title}}</h2>
							<p>
								{{$about->about_description}}
							</p>
							<p>
								Our vision is to be the best group of the country enriched with exemplary human beings
								for whom every countryman feels proud.
							</p>
							<a href="#service" class="theme-btn smooth-menu">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->

		<!-- Start Service
		============================================= -->
		<div id="service" class="service-area bg de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title">
							<h2>Services</h2>
							<p>Our Memeber Facilated With</p>
						</div>
					</div>
				</div>
				<div class="service-wrapper grid-3">
					<div class="single-service pink">
						<i class="fas fa-archive"></i>
						<h3>{{$welfare->service_title}}</h3>
					</div>
					<div class="single-service orange">
						<i class="fas fa-clipboard-list"></i>
						<h3>{{$training->service_title}}</h3>
					</div>
					<div class="single-service pink grn">
						<i class="fas fa-briefcase"></i>
						<h3>{{$job->service_title}}</h3>
					</div>
					<div class="single-service orange">
						<i class="fas fa-flask"></i>
						<h3>{{$research->service_title}}</h3>
					</div>
					<div class="single-service orange">
						<i class="fas fa-burn"></i>
						<h3>{{$blood->service_title}}</h3>
					</div>
					<div class="single-service pearl">
						<i class="fas fa-database"></i>
						<h3>{{$database->service_title}}</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- End Service -->

		<!-- Start History
		============================================= -->
		<div class="history de-padding" id="history">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title">
							<h2>History</h2>
						</div>
					</div>
				</div>
				<div class="history-wrapper">
					<article class="text-center">
						<p>
							{{$history->first_paragraph}}
						</p>

						<a href="{{URL::to('/full-history')}}" class="theme-btn">Read More</a>
					</article>
				</div>
			</div>
		</div>
		<!-- End History -->

		<!-- Start Event
		============================================= -->
		<div class="event-area bg de-padding" id="event">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title">
							<h2>Events</h2>
						</div>
					</div>
				</div>
				<div class="event-wrapper grid-3">
					<?php foreach($event as $e){ ?>
					<div class="event-box text-center">
						<div class="event-img">
							<img src="{{URL::to($e->event_image)}}" alt="thumb">
							<div class="event-date">
								<?php  $time = strtotime($e->event_date);
							Session::put('e_id',$e->event_id);
							?>

								<p class="event-countdown" data-date="{{date("M d, Y 00:00:00" , $time)}}"></p>
								<br />
								<p>{{date("d-F", $time)}}</p>
								{{date("Y", $time)}}
							</div>
						</div>
						<div class="join-btn">
							<a href="{{URL::to('/join')}}" class="theme-btn">Join</a>
						</div>
					</div>
					<?php  } ?>


				</div>
			</div>
			<div class="event-all text-center mt-30">
				<a href="{{URL::to('/view-all-event')}}" class="theme-btn">View All Event</a>
			</div>
		</div>
		<!-- End Event -->

		<!-- start gallery -->
		<div class="event-area bg de-padding" id="gallary">
			<div class="container">

				<div class="container">
					<div class="row">
						<div class="col-xl-8 offset-xl-2">
							<div class="site-title">
								<h2>Gallary</h2>
							</div>
						</div>
					</div>



					<hr class="mt-2 mb-5">

					<div class="row text-center text-lg-left">
						<?php foreach($gallary as $g){ ?>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="{{URL::to($g->image)}}" class="d-block mb-4 h-100">
								<img class="img-fluid img-thumbnail" style="width:200px;height:200px;"
									src="{{URL::to($g->image)}}" alt="image">
							</a>
						</div>
						<?php } ?>


					</div>

				</div>

				<div class="event-all text-center mt-30">
					<a href="{{URL::to('/view-all')}}" class="theme-btn">View All</a>
				</div>
			</div>

			<!-- end gallary -->
	</main>

	<div class="clearfix"></div>

	<!-- Start Footer
	============================================= -->
	<footer>
		<div class="footer-widget">
			<div class="container">
				<div class="footer-widget-wrapper grid-4 de-pt">
					<div class="footer-widget-box">
						<h4 class="foo-widget-title">Community</h4>
						<ul class="foo-list">
							<li><a href="#">Leadership</a></li>
							<li><a href="#">Strategy</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Features</a></li>
						</ul>
					</div>
					<div class="footer-widget-box">
						<h4 class="foo-widget-title">useful links</h4>
						<ul class="foo-list">
							<li><a href="#">About</a></li>
							<li><a href="#">Service</a></li>
							<li><a href="#">works</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms and Conditions</a></li>
						</ul>
					</div>
					<div class="footer-widget-box">
						<h4 class="foo-widget-title">Recent Post</h4>
						<div class="recent-post">
							<div class="re-post-single">
								<div class="re-post-img">
									<img src="assets/img/footer/blog-thumb-1.png" alt="thumb">
								</div>
								<div class="re-post-desc">
									<a href="single.html">
										<h6>Windows talking</h6>
									</a>
									<p>By:athuor <span>14/12/2019</span></p>
								</div>
							</div>
							<div class="re-post-single">
								<a href="single.html">
									<div class="re-post-img">
										<img src="assets/img/footer/blog-thumb-2.png" alt="thumb">
									</div>
									<div class="re-post-desc">
										<a href="single.html">
											<h6>perhaps expense</h6>
										</a>
										<p>By:athuor <span>18/12/2019</span></p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="footer-widget-box contact-us">
						<h4 class="foo-widget-title">Contact us</h4>
						<div class="contact-inputs">
							<form method="post" action="{{route('contact.mail')}}">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="name" id="name"
												placeholder="Enter Name">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email"
												placeholder="Enter Email">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control labelup" id="comments" name="comments"
												rows="5" placeholder="Type Message"></textarea>
										</div>
										<button type="submit" name="submit" class="theme-btn">
											contact
										</button>
										<!-- Alert Message -->
										<div class="alert-notification">
											<div id="message" class="alert-msg"></div>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
				<div class="copyright text-center">
					<p>All rights reserved by Rapples.Copyright © 2020.</p>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer-->
	<!-- start popup -->
	<div class="port-popus">
		<div id="port-popup" class="port-popup">
			<div class="port-content">
				<h2>Login Here</h2>
				<form action="{{url('/login-check')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field()}}
					<fieldset>
						<div class="input">
							<input type="email" placeholder="Email" name="email" class="pop-input">
						</div>
						<div class="input">
							<input type="password" placeholder="Password" name="password" class="pop-input">
						</div>

						<input class="theme-btn" type="submit" value="login">
						<a href="{{URL::to('/forgot-password')}}">Forgot password?</a>
						<a href="#home" class="popup-close"><i class="ti-close"></i></a>
					</fieldset>

				</form>
			</div>
		</div>
	</div>
	<!-- end popup -->
	<!-- jQuery Frameworks 
    ============================================= -->

	<script src=" {{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
	<script src=" {{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src=" {{asset('assets/js/popper.min.js')}}"></script>
	<script src=" {{asset('assets/js/jquery.appear.js')}}"></script>
	<script src=" {{asset('assets/js/html5/html5shiv.min.js')}}"></script>
	<script src=" {{asset('assets/js/html5/respond.min.js')}}"></script>
	<script src=" {{asset('assets/js/jquery.easing.min.js')}}"></script>
	<script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src=" {{asset('assets/js/progress-bar.min.js')}}"></script>
	<script src=" {{asset('assets/js/modernizr.custom.13711.js')}}"></script>
	<script src=" {{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src=" {{asset('assets/js/wow.min.js')}}"></script>
	<script src=" {{asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src=" {{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src=" {{asset('assets/js/count-to.js')}}"></script>
	<script src=" {{asset('assets/js/fontawesome.min.js')}}"></script>
	<script src=" {{asset('assets/js/swiper.min.js')}}"></script>
	<script src=" {{asset('assets/js/YTPlayer.min.js')}}"></script>
	<script src=" {{asset('assets/js/slick.min.js')}}"></script>
	<script src=" {{asset('assets/js/bsnav.min.js')}}"></script>
	<script src=" {{asset('assets/js/filter.js')}}"></script>
	<script src=" {{asset('assets/js/main.js')}}"></script>
	<script src=" {{asset('assets/js/jquery.countdown.js')}}"></script>

	<script>
		$(function() {
			var endDate = $('.event-countdown').data('date');
			
			// $('.event-countdown').countdown({ date: endDate });

			$('.event-countdown').countdown({
			date: endDate,
			render: function(data) {
				$(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
			}
			});
		 });
	</script>

</body>

</html>