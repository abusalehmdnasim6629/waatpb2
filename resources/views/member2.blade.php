<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>WAATPB</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
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
	<link href="{{asset('assets/style.css')}}" rel="stylesheet">
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
				<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-transparent bsnav-sticky-slide bsnav-scrollspy">
					<div class="container">
						<a class="navbar-brand" href="{{URL::to('/')}}">
							<img src="assets/img/logo/white-logo.png" class="logo-display" alt="thumb">
							<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
						</a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-sm-end">
							<ul class="navbar-nav navbar-mobile ml-auto">
                                <li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/')}}">Home</a></li>
								
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/full-history')}}">History</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/view-all-event')}}">Event</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/career')}}">Career</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/view-all')}}" >Gallery</a></li>
								<?php 
								$lg = Session::get('lcheck');
								if($lg!=null){								
								?>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/profile')}}" >Profile</a></li>
								
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/logout')}}" >Logout</a></li>

								<?php }else{ ?>
								<li class="nav-item"><a class="nav-link" href="#port-popup">Login</a></li>
								<?php } ?>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/member-registration')}}" >Member</a></li>
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
	
	<!-- Start breadcrumb
    ============================================= -->
    <div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
		<h2>Be A Member</h2>
		  <div class="main-breadcrumb">
			<div class="container">
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="#">Member</a></li>
				</ul>
			</div>
		</div>
    </div>
    <!--  End breadcrumb -->
	

	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	@endif
	<div class="container" style="margin-top: 70px;margin-bottom: 70px;">
    <form action="{{url('/save-member')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Name:</label>
                            <input type="text" class="form-control txt" name="name" id="txtName" required="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">NID:</label>
                            <input type="text" class="form-control txt numericNumber" name="nid" id="txtNID" required="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Contact Number:</label>
                            <input type="text" class="form-control txt numericNumber" name="contact" id="txtContactNumber" maxlength="11" placeholder="017xxxxxxxx" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="txtEmail">Email:  </label>
                            <input type="email" class="form-control txt" name="email" id="txtEmail" required="">

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="txtPresentOrganization">Present Organization</label>
                            <input type="text" class="form-control txt ui-autocomplete-input" name="po" id="txtPresentOrganization" autocomplete="off" required="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Designation:</label>
                            <input type="text" class="form-control txt" name="designation" id="txtDesignation" required="">
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="txtDepartment">Department:</label>
                            <input type="text" class="form-control txt" name="department" id="txtDepartment" required="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="txtBloodGroup">Blood Group</label>
                            <select id="txtBloodGroup" class="form-control" name="b_g">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Present Address</label>
                            <input type="text" class="form-control txt" name="p_a"id="txtPresentAddress" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Password</label>
                            <input type="password" class="form-control txt" name="pass" id="txtPassword" required="">
                            <span>[Password must in 6 character]</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Retype Password</label>
                            <input type="password" class="form-control txt" name="c_pass" id="txtRetypePassword" required="">
                            
                        </div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Upload image</label>
                            <input type="file"  name="image" required="">
							<span>[Image should be 200x200]</span>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-8" style="padding-top:20px;">
                        <button type="submit" id="btnSave" class="btn btn-primary" style="height:30px;font-size:1.5rem;">Submit</button>
                        <button type="reset" id="btnClear" class="btn btn-info" style="height:30px;font-size:1.5rem;">Clear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
	
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
									<a href="single.html"><h6>Windows talking</h6></a>
									<p>By:athuor <span>14/12/2019</span></p>
								</div>
							</div>
							<div class="re-post-single">
								<a href="single.html">
									<div class="re-post-img">
										<img src="assets/img/footer/blog-thumb-2.png" alt="thumb">
									</div>
									<div class="re-post-desc">
										<a href="single.html"><h6>perhaps expense</h6></a>
										<p>By:athuor <span>18/12/2019</span></p>
									</div>
								</a>	
							</div>
						</div>
					</div>
					<div class="footer-widget-box contact-us">
						<h4 class="foo-widget-title">Contact us</h4>
						<div class="contact-inputs">
							<form class="contact-form" method="post" action="assets/mail/contact.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
										<span class="alert alert-error"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
										<span class="alert alert-error"></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control labelup" id="comments" name="comments" rows="5" placeholder="Type Message"></textarea>
									</div>
									<button type="submit" name="submit" class="theme-btn" id="submit">
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
    	<!-- Modal 
    ============================================= -->
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
<!-- end modal -->
	
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
	
</body>

</html>