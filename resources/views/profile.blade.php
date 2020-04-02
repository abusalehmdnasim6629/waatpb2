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
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
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
						<a class="navbar-brand" href="{{URL::to('/')}}">
							<img src="assets/img/logo/white-logo.png" class="logo-display" alt="thumb">
							<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
						</a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-sm-end">
							<ul class="navbar-nav navbar-mobile ml-auto">
							<li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/')}}" >Home</a></li>
								
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/full-history')}}">History</a></li>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/view-all-event')}}">Event</a></li>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/career')}}">Career</a></li>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/view-all')}}" >Gallery</a></li>
								<?php 
								$lg = Session::get('lcheck');
								if($lg!=null){								
								?>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/profile')}}">Profile</a></li>
								
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/logout')}}" >Logout</a></li>

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
	<div class="site-breadcrumb-title col-md" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
		<h2>Profile</h2>
		  <div class="main-breadcrumb">
			<div class="container">
				<ul class="breadcrumb-menu clearfix">
					<li><a href="{{URL::to('/')}}">Home</a></li>
					<li class="active"><a href="{{URL::to('/profile')}}">Profile</a></li>
				</ul>
			</div>
		</div>
    </div>

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
    <?php 
      $mid = Session::get('lcheck');
	  $pro=  DB::table('tbl_member')
			->select('tbl_member.*')
			->where('member_id',$mid)
			->first();

			
		
    
    ?>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	@endif
    <div class="container" style="padding:10px;">
    <div class="row m-y-2" >
	    <div class="col-lg-4 pull-lg-8 text-xs-center mb-5" style="margin-top:3%;">
            <img src="{{$pro->image}}" style="width:200px;height:200px;"class="m-x-auto img-fluid img-circle" alt="avatar">
			<h3 class="m-y-2 mb-5" style="margin-top:20px;">{{$pro->member_name}} <hr> </h3>
        </div>
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content p-b-3 mt-5">
                <div class="tab-pane active" id="profile">					
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Designation</h5>
                            <p>
                                {{$pro->designation}}
                            </p>
                            <h5>Hobbies</h5>
                            <p>
                                {{$pro->member_hobby}}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5>Skills</h5>
                            <p>
                                {{$pro->member_skill}}
                            </p>
                            <hr>
                           
                        </div>
                        <div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span>About</h4>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Department: </strong> {{$pro->department}} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Email: </strong>{{$pro->email_address}} 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Present Organization: </strong>{{$pro->present_organization}} 
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Present Address: </strong>{{$pro->present_address}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Nationl ID: </strong>{{$pro->nid}} 
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Blood group: </strong>{{$pro->blood_group}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="edit">
                    <h4 class="m-y-2" style="padding:10px;">Edit Profile</h4>
                    <form role="form" action="{{url('/update-member')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="name" value="{{$pro->member_name}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" value="{{$pro->email_address}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Present Organization</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="p_o" value="{{$pro->present_organization}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Designation</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="designation" value="{{$pro->designation}}">
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Department</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="department" value="{{$pro->department}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Present Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"name="p_a" value="{{$pro->present_address}}" placeholder="">
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Contact number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="contact_number" value="{{$pro->contact_number}}" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Blood group</label>
                            <div class="col-lg-9">
                                <select id="user_time_zone" class="form-control" name="b_g" size="0">
                                    <option value="A+">A+</option>
                                    <option value="A+">A-</option>
                                    <option value="A+">O+</option>
                                    <option value="A+">O-</option>
                                    <option value="A+">AB+</option>
                                    <option value="A+">AB-</option>
                                    <option value="A+">B+</option>
                                    <option value="A+">B-</option>      
                                </select>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Hobby</label>
                            <div class="col-lg-9">
							<textarea class="form-control" name="member_hobby" required="" rows="3">
							{{$pro->member_hobby}}
							</textarea>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Skill</label>
                            <div class="col-lg-9">
							<textarea class="form-control" name="member_skill" required="" rows="3">
							{{$pro->member_skill}}
							</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">National ID</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="nid" value="{{$pro->nid}}">
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Set new password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="pass">
                            </div>
                        </div>
                        

						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Image</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="image" >
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <!-- placehold.it/150 -->
</div>
<hr>
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
					<p>All rights reserved by Rapples.Copyright © 2020.</p>
				</div>
			</div>
		</div>

	</footer>	
	<!-- End Footer-->


     

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
</body>

</html>































