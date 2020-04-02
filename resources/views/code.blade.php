@extends('layouts.webview')

@section('content')

<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
	<h2>History</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/full-history')}}">History</a></li>
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
<div>
	<?php 
			 $code = Session::get('cd') ;
			 Session::put('code',$code);

			 $email = Session::get('email');
			 Session::put('eml',$email);
	 
	 ?>
	<div>
		<h5 style="margin-left:30%;padding:20px;">Enter your 6-digit code</h5>
		<form action="{{url('/submit-code')}}" method="post" enctype="multipart/form-data"
			style="margin-left:30%;padding:20px;">
			{{ csrf_field() }}
			<input type="text" name="code" placeholder="Enter your code" style="text-align:center;">
			<input type="submit" value="submit">
		</form>
	</div>

</div>
@endsection