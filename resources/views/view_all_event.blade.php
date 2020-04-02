@extends('layouts.webview')

@section('content')

<div class="clearfix"></div>
<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
	<h2>Events</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/view-all-event')}}">Events</a></li>
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
<div style="padding:20px;">
	<?php 
     $event =  DB::table('tbl_event')->where('event_date', '>', \Carbon\Carbon::now())
      ->get();
    
    
    ?>
	<div class="event-wrapper grid-3 pd-2 mb-5">
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
@endsection