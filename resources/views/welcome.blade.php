@extends('layouts.webview')

@section('content')
<main class="main">

	<!-- Start Slider
		============================================= -->
	<div id="home" class="hero-section">
		<div class="hero-slider">
			<!-- owl Slider Begin -->
			<div class="hero-single overlay-single overlay-shape">
				<div class="container">
					<div class="row">
						<div class="col-xl-13 col-sm-12">
							<div class="hero-content">
								<h2 style="color:white;">{{$header->header_title ?? ''}}</h2>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="hero-content">
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
								<img src="{{asset('assets/img/header/banner_img.webp')}}" alt="thumb">
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
			<div class="row text-justify">
				<div class="col-md-6">
					<h2 style="font-size:25px;">Who we are</h2>
					<p>
						{{$about->about_description}}
					</p>

					<h2 style="font-size:25px;">Vision</h2>
					<p>
						{{$about->about_vision}}
					</p>

				</div>
				<div class="col-md-6">
					<h2 style="font-size:25px;">Mission</h2>
					<p>
						{{$about->about_mission}}
					</p>

					<h2 style="font-size:25px;">Who can be a member</h2>
					<p>
						{{$about->about_member}}
					</p>
				</div>
			</div>

			{{-- <div class="about-wrapper grid-2">
					<div class="about-left mx-auto  text-center ">
						 
						 <h2 style="font-size:25px;">Who we are</h2>
							<p>
								{{$about->about_description}}
			</p>
		</div>
		<div class="about-right justify-content-center text-center">


			<h2 style="font-size:25px;">Mission</h2>
			<p>
				{{$about->about_mission}}
			</p>



		</div>

	</div>
	<div class="about-wrapper grid-2">
		<div class="about-left  text-center">

			<h2 style="font-size:25px;">Vision</h2>
			<p>
				{{$about->about_vision}}
			</p>
		</div>
		<div class="about-right  text-center">

			<div class="about-right-content">
				<h2 style="font-size:25px;">Who can be a member</h2>
				<p>
					{{$about->about_member}}
				</p>


			</div>
		</div>

	</div> --}}
	<div class="event-all text-center mt-30">
		<a href="#service" class="theme-btn smooth-menu">Read More</a>
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
					<p class="text-justify">
						{{$history->first_paragraph}}
					</p>

					<a href="{{URL::to('/full-history')}}" class="theme-btn">Read full history</a>
				</article>
			</div>
		</div>
	</div>
	<!-- End History -->
     <!-- start advertisement -->
   
	 <div class="event-area bg de-padding" id="event">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="site-title">
						<h2>Advertisement</h2>
					</div>
				</div>
			</div>
			<div class="event-wrapper grid-3">
				<?php foreach($advertisement as $a){ ?>
				<div class="event-box text-center">
					<div class="event-img">
						<img src="{{URL::to($a->advertisement_image)}}" alt="thumb">
						
					</div>
					
				</div>
				<?php  } ?>


			</div>
		</div>
		
	</div>

	 <!-- ende advertisement -->
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
                
				<div class="row">
				   @foreach($g_category as $gc)
				   <div class="mx-2 col-md text-center bg-white border" style="border-color: transparent; ">
				        <h4 class="mt-5">{{$gc->category}}</h4> 
						<?php 
						   $imageByCategory = DB::table('tbl_gallary')
							  ->where('category_id',$gc->id)
							  ->limit(6)
							  ->get();
						
						?>
						<div class="row">
						@foreach($imageByCategory as $ibc)
						<div class="col-md-6">
							<a href="{{URL::to($ibc->image)}}" class="d-block mb-4 h-100">
								<img class="img-fluid img-thumbnail" style="width:200px;height:200px;"
									src="{{URL::to($ibc->image)}}" alt="image">
							</a>
					   </div>
					   @endforeach
					   </div>
					   
				   </div>
				   
				   @endforeach
				
				</div>

			</div>
			<div class="event-all text-center mt-30 mb-5">
						<a href="{{URL::to('/view-all')}}" class="theme-btn">View All</a>
			</div>
		</div>

		<!-- end gallary -->
</main>
@endsection
