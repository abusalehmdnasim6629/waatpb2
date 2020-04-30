@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<div class="site-breadcrumb-title" style="height:100px;" >
	<!-- <h2>Profile</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/profile')}}">Profile</a></li>
			</ul>
		</div>
	</div> -->
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
	 
    ?>

<div class="container" style="padding:10px;background-color:#f5f5f5;">
  
	<div class="row m-y-2 pd-2 " >
		<div class="col-sm-8 mx-auto border bg-white mt-5" style="border-color:trasparent;">
		

			<div class="tab-content p-b-3 mt-5">


			   <div class="tab-pane active" id="timeline">
				  <div class="row">
					<div class="col-sm-12">
                    <h6>Searched people</h6>
                    @foreach($searched as $p)
				       <div class="row">
                          <div class="col-sm-3">
                            <img src="{{URL::to($p->image)}}" alt="" style="width:80px;height:70px;padding:10px;">
                          </div>
                          <div class="col-sm-3 ">
                            <h6 class=""><a href="{{url::to('/get-member/'.$p->member_id)}}" class="btn btn-link">{{$p->member_name}}</a></h6>
                          </div>
                          <div class="col-sm-4">
						       <?php
									$con_check = DB::table('connections')
									->where('f_member_id',Session::get('lcheck'))
									->where('s_member_id',$p->member_id)
									->where('status',0)
									->count();

									$con_check3 = DB::table('connections')
									->where('s_member_id',Session::get('lcheck'))
									->where('f_member_id',$p->member_id)
									->where('status',0)
									->count();

									$con_check2 = DB::table('connections')
									->where('f_member_id',Session::get('lcheck'))
									->where('s_member_id',$p->member_id)
									->where('status',1)
									->count();

									$con_check4 = DB::table('connections')
									->where('s_member_id',Session::get('lcheck'))
									->where('f_member_id',$p->member_id)
									->where('status',1)
									->count();
							   ?>
                                @if(Session::get('lcheck') == $p->member_id)
								<h6>Me</h6>
                                @else
								    @if($con_check || $con_check3)
								        
									    <h6>Request sent</h6>
										<a class="btn btn-danger" href="{{url::to('/cancel-request/'.$p->member_id)}}">
										<i class="fa fa-remove" aria-hidden="true"></i>
											cancel request
										</a>
									@elseif($con_check2 || $con_check4)
									<h6 class="mx-auto"><i class="fas fa-user"></i></h6>
											
									
									    
								    @else	
									    <a class="btn btn-primary " href="{{url::to('/send-request/'.$p->member_id)}}">
										<i class="fas fa-user-plus"></i>
											
										</a>
								    @endif		
                                @endif
                          </div>
                       </div>
					   <hr>
					@endforeach	
					
					
					</div>
				   </div>
				</div>
				
				

			</div>
		</div>
		</div>

	</div>

	<!-- placehold.it/150 -->
</div>
<hr>
@endsection