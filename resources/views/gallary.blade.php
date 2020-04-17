@extends('layouts.webview')

@section('content')
<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
	<h2>Gallary</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/view-all')}}">Gallary</a></li>
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
<div class="container" style="padding:20px;">
	
	<div class="row">
		<?php foreach($gallary as $g){ ?>
		<div class="col-md-4 text-center px-2 py-2">
			<div class="gallary-img">
				<img src="{{URL::to($g->image)}}" style="width:200px;height:200px;" alt="thumb">
			</div>

		</div>
		<?php  } ?>

	</div>
	<div class="d-flex justify-content-center p-3">
		<nav aria-label="...">
			<ul class="pagination pagination-lg">
				<li class="page-item active" aria-current="page">
					<span class="page-link">
						{{$gallary->links()}}
						<span class="sr-only">(current)</span>
					</span>
				</li>

			</ul>
		</nav>
	</div>
</div>
@endsection