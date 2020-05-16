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
<div class="container" style="padding:10px;background-color:#f5f5f5;">
  
<div class="row pd-2">
		<div class="col-sm-8 mx-auto " style="margin-top:2%;">  
		    
			@if($pro->cover_image)
		    <img src="{{$pro->cover_image}}" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
	        @else
			<img src="https://via.placeholder.com/150" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
			@endif	
			@if($pro->image != null)
			<img src="{{$pro->image}}" style="z-index-1;Left:4%;bottom:0;border:3px solid white;" class=" img-fluid img-responsive w-10  rounded-circle position-absolute "
				alt="avatar">
			@else
			<img src="{{asset('1589365930.png')}}" style="z-index-1;Left:4%;bottom:0;border:3px solid white;" class=" img-fluid img-responsive w-10  rounded-circle position-absolute "
				alt="avatar">
			@endif	
			
		 
			
		</div>
	</div>
	<?php 
		   
           
		   $count = DB::table('connections')
		   ->where(function($startQuery) {
				 $startQuery
				 ->where(function($thisYearQuery) {
					 $thisYearQuery
					 ->where('s_member_id',Session::get('lcheck'));
					 
						 })
						 ->orwhere('f_member_id',Session::get('lcheck'));
						 })
		   ->where('connections.status',1)
		   ->count();
		   
		   $count2 = DB::table('connections')
		   ->where('s_member_id',Session::get('lcheck'))
		   ->where('connections.status',0)
		   ->count();	
         
		    ?>
	<div class="row m-y-2 pd-2 " >
		<div class="col-sm-8 mx-auto border bg-white mt-5" style="border-color:trasparent;">
		<ul class="nav nav-tabs">
			    <li class="nav-item">
					<a href="{{url::to('/profile')}}"  class="nav-link ">
					<i class="fas fa-newspaper"></i>
					Timeline</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/show-profile')}}" class="nav-link active">
					<i class="fas fa-user-circle"></i>
					Profile</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/friends')}}" class="nav-link ">
					<i class="fas fa-user-friends"></i>
					 ({{$count}})</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/friend-request')}}" class="nav-link ">Friend request ({{$count2}})</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/edit')}}" class="nav-link">
					<i class="fas fa-edit"></i>
					Edit</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/settings')}}" class="nav-link">
					<i class="fa fa-cog fa-fw"></i>
					Settings</a>
				</li>
			</ul>
		   <?php 
		   
			$post = DB::table('posts')
			   ->where('member_id',Session::get('lcheck'))
			   ->get();
		    ?>

			<div class="tab-content p-b-3 mt-5">


			   
				<div class="tab-pane active" id="profile">

					<div class="row">
					    <div class="col-md-12">
						<h4 class="m-y-2 text-center" style="margin-top:30px;">{{$pro->member_name}}</h4>
						</div>
						<div class="col-md-6">
							<h6>Designation</h6>
							<p>
								{{$pro->designation}}
							</p>
							<h6>Hobbies</h6>
							<p>
								{{$pro->member_hobby}}
							</p>
					
						
							<h6>Skills</h6>
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
											<strong>Member id: </strong>{{$pro->code}}
										</td>
									</tr>
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
				

				

			</div>
		</div>
		</div>

	</div>

	<!-- placehold.it/150 -->
</div>
<hr>
@endsection