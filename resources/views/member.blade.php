<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> pack -  One Page Business And Agency template </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
	<!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bsnav.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/site-animation.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

	
	
	<!-- ========== End Stylesheet ========== -->
  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5/html5shiv.min.js"></script>
	  <script src="assets/js/html5/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>		

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
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/logo/white-logo.png" class="logo-display" alt="thumb">
							<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
						</a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-sm-end">
							<ul class="navbar-nav navbar-mobile ml-auto">
								<li class="nav-item"><a class="nav-link smooth-menu" href="#home" >Home</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#about">About us</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#service" >History</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#team" >Our concern</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/career')}}">Career</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#port-area" >gallery</a></li>
                                <li class="nav-item"><a class="nav-link smooth-menu" href="#port-area" >Event</a></li>
                                <li class="nav-item"><a class="nav-link smooth-menu" href="#port-area" >Contact us</a></li>
                                <?php $l = Session::get('lcheck'); 
								if($l != null ){
								?>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/logout')}}" id="logout" >Logout</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/profile')}}" id="logout" >Profile</a></li>
								<?php }else{ ?>
									<li class="nav-item"><a class="nav-link smooth-menu" href="javascript:void(0)" id="login" >Login</a></li>
								<?php }?>
                                <li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/Registration')}}" >Member</a></li>
								
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
			<div class="hero-slider owl-carousel owl-theme">
				<!-- owl Slider Begin -->
				<div class="hero-single overlay-single" data-background="assets/img/header/hdr2.jpg">
					<div class="row">
						<div class="col-xl-8 offset-xl-2">
							<div class="hero-content text-center">
								<h2><span>We can</span> Provide Extraordinary Projects</h2>
								
								<div class="hro-btn">
									<a href="#" class="theme-btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- single Slider End -->
				<!-- owl Slider Begin -->
				<div class="hero-single overlay-single" data-background="assets/img/header/hdr1.jpg">
					<div class="row">
						<div class="col-xl-8 offset-xl-2">
							<div class="hero-content text-center">
								<h2><span>We Make</span> Your Dream Come True</h2>
								
								<div class="hro-btn">
									<a href="#" class="theme-btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- single Slider End -->
				<!-- owl Slider Begin -->
				<div class="hero-single overlay-single" data-background="assets/img/header/hdr3.jpg">
					<div class="row">
						<div class="col-xl-8 offset-xl-2">
							<div class="hero-content text-center">
								<h2><span>We can</span> Provide Efficient Perfomance</h2>
								
								<div class="hro-btn">
									<a href="#" class="theme-btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- single Slider End -->
			</div>
		
		</div>
		<!-- End hero -->
		
	</main>	
	<h4 style="padding:2%;">BE A MEMBER</h4>

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
                            <input type="text" class="form-control txt numericNumber" name="contact_number" id="txtContactNumber" maxlength="11" placeholder="017xxxxxxxx" required="">
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
                            <input type="text" class="form-control txt ui-autocomplete-input" name="org" id="txtPresentOrganization" autocomplete="off" required="">
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
                            <select id="txtBloodGroup" class="form-control" name="b_group">
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
                            <input type="text" class="form-control txt" name="p_address"id="txtPresentAddress" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Password</label>
                            <input type="password" class="form-control txt" name="pass" id="txtPassword" required="">
                            <span toggle="#txtPassword" class="fa fa-fw fa-eye field-icon toggle-password" ></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Retype Password</label>
                            <input type="password" class="form-control txt" name="re_pass" id="txtRetypePassword" required="">
                            <span toggle="#txtRetypePassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="email">Upload image</label>
                            <input type="file"  name="image" required="">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-8" style="padding-top:20px;">
                        <button type="submit" id="btnSave" class="btn btn-primary">Submit</button>
                        <button type="reset" id="btnClear" class="btn btn-info">Clear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


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
					<p>All rights reserved by kzj.Copyright © 2020.</p>
				</div>
			</div>
		</div>

	</footer>	
	<!-- End Footer-->


	<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" action="{{url('/login-check')}}" method="post" enctype="multipart/form-data"class="form-horizontal">
                   {{ csrf_field()}}
				   <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-12">
                            <input type="password" id="password" name="password" required="" placeholder="Enter password" class="form-control" required="">
                        </div>
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Login
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

	<script>
	
	
	</script>
  	<!-- jQuery Frameworks 
    ============================================= -->
	<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/html5/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/html5/respond.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/count-to.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/bsnav.min.js')}}"></script>
    <script src="{{asset('assets/js/filter.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
	<script>
	  $(function () {
     
       $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
     
      
     $('#login').click(function () {
        $('#ajaxModel').modal('show');
     });
       
      });
	</script>

	
</body>

</html>































