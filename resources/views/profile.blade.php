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
		    <img src="{{$pro->cover_image}}" style="width:100%;height:60%;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
	    
			<img src="{{$pro->image}}" style="width:300px;height:300px;border-radius:50%;padding:20px;top:20%; left:32%;" class="position-absolute mt-5 m-x-auto img-fluid img-circle"
				alt="avatar">
			
		
			
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
					<a href="{{url::to('/profile')}}"  class="nav-link active">Timeline</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/show-profile')}}" class="nav-link ">Profile</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/friends')}}" class="nav-link ">Friends ({{$count}})</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/friend-request')}}" class="nav-link ">Friend request ({{$count2}})</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/edit')}}" class="nav-link">Edit</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/settings')}}" class="nav-link">Settings</a>
				</li>
			</ul>
		   <?php 
		   
			$post = DB::table('posts')
			   ->where('member_id',Session::get('lcheck'))
			   ->get();
		    ?>

			<div class="tab-content p-b-3 mt-5">


			   <div class="tab-pane active" id="timeline">
				  <div class="row">
					<div class="col-sm-12">
					@foreach($post as $p)
				    <h4 class="m-y-2 " style="padding:10px;">{{$p->title}}</h4>
					    <div class="col-sm-12  post-header-line text-sm-left">
                            <span class="glyphicon glyphicon-calendar">
                            </span>{{$p->date}} | <span class="glyphicon glyphicon-comment"></span> 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$p->id)
                                 ->count();
                            ?>
                            <a href="#">{{$numOfcomment}} Comments</a> 
                        </div>
					     <div class="col-sm-12">
							<div class="row">
								<div class="col-sm-12  post-header-line text-sm-right"> 
									<a href="{{url::to('/edit-post',$p->id)}}"class="btn btn-link">Edit</a> |
									<a href="{{url::to('/delete-post',$p->id)}}"class="btn btn-link">Delete</a>
								</div>
							</div>
						
						@if($p->post_image)
						<img src="{{$p->post_image}}" style="width:200px;height:200px;" class="mx-auto img-fluid img-circle image-responsive"
				           alt="post">
						@endif   
					</div>
					
					
					<div class="col-md-12">
					      
					      <p class="mt-2 text-justify">
						    {{$p->description}}
						  </p>
                    </div>
					
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