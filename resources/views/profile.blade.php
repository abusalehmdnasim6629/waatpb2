@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
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
	   
			Session::put('profile',$pro);
			
		
    
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
		    
			@if($pro->cover_image != null)
		    <img src="{{$pro->cover_image}}" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
	        @else
			<img src="{{asset('https://via.placeholder.com/150')}}" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
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
					<a href="{{url::to('/profile')}}"  class="nav-link active">
					<i class="fas fa-newspaper"></i>
					Timeline</a>
				</li>
				<li class="nav-item">
					<a href="{{url::to('/show-profile')}}" class="nav-link ">
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
			   ->orderBy('date', 'desc')
			   ->get();
		    ?>

			<div class="tab-content p-b-3 mt-5">


			   <div class="tab-pane active" id="timeline">

			   
					<div class="row">
						<div class="col-md-12">
						<h4 class="col-sm" style="font-family: 'Alegreya Sans SC';" >Create post</h4>
						<div class="col-md-8 ">
							<form action="{{url('/save-post')}}" method="POST" enctype="multipart/form-data">
								@csrf
							<div class="control-group">
									<input type="text" class="form-control mb-2 mt-5" name="title" placeholder="Enter title" style="border-radius:5px">
									<div class="controls mb-3">
										<textarea class="form-control " name="s_post" required=" " placeholder="Write post "  rows="3" style="border-radius:5px"></textarea>
									</div>
									<!-- <input type="file" class="form-control-file mb-2 mt-5" name="image" placeholder="Enter title"> -->
									<div class="file-field">
										<div class="btn btn-light btn-sm float-left">
										<input type="file" class="form-control-file" name="image">
										</div>
									</div><br>
									<div class="form-check">
										 
											<input type="checkbox" class="form-check-inline" name="status" value="1"> 
											<label for="">Publish in blog section</label>
										
										</div>
									</div>

								<button type="submit" class="btn-lg btn-outline-secondary float-right mb-3">
											Add post
								</button>
							</form>
						</div>
						
						</div>  
					</div>
					<br>
					<hr>
				  <div class="row">
					<div class="col-sm-12">
					@foreach($post as $p)
					<?php
						$startDate = Carbon::createFromFormat('Y-m-d H:i:s',$p->date);
						$endDate = Carbon::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));
						$days = $startDate->diffInDays($endDate);
						$hours = $startDate->copy()->addDays($days)->diffInHours($endDate);
						$minutes = $startDate->copy()->addDays($days)->addHours($hours)->diffInMinutes($endDate);
					?>
				    <h5 class="col-sm" style="font-family: 'Alegreya Sans SC';">{{$p->title}}</h5>
					    
						@if($days > 0)
						<div class="col-sm-12  post-header-line text-sm-left">
                            <span class="glyphicon glyphicon-calendar">
                            <span style="font-family: 'Alegreya Sans SC';"><strong>{{$days}}</strong> day ago</span>
							<b>|</b><span class="glyphicon glyphicon-comment"></span> 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$p->id)
                                 ->count();
								 $numOflike = DB::table('likes')
                                 ->where('post_id',$p->id)
                                 ->count();    
                            ?>
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark"></i> Likes</a> |
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> 
							<b>|</b>
							@if($p->status == 1)
							 <span style="font-family: 'Alegreya Sans SC';"><strong>Published</strong></span>
							@else
							<a href="{{url::to('/publish-post',$p->id)}}" class="btn btn-sm btn-info">Publish</a>
							@endif
                        </div>
                        @elseif($days == 0 && $hours > 0)
                        <div class="col-sm-12  post-header-line text-sm-left">
                            <span class="glyphicon glyphicon-calendar">
                            <span style="font-family: 'Alegreya Sans SC';"><strong> {{$hours}}</strong> hr <strong>{{$minutes}}</strong> min ago</span> <b>|</b><span class="glyphicon glyphicon-comment"></span> 
                            <?php 
                             
							 $numOfcomment = DB::table('comments')
							 ->where('post_id',$p->id)
							 ->count();
							 $numOflike = DB::table('likes')
							 ->where('post_id',$p->id)
							 ->count();    
						   ?>
						<a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark"></i> Likes</a> |
						<a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> 
							<b>|</b>
							@if($p->status == 1)
							 <span style="font-family: 'Alegreya Sans SC';"><strong>Published</strong></span>
							@else
							<a href="{{url::to('/publish-post',$p->id)}}" class="btn btn-sm btn-info">Publish</a>
							@endif
                        </div>
                        @else
                        <div class="col-sm-12  post-header-line text-sm-left">
                            <span class="glyphicon glyphicon-calendar">
                            <span style="font-family: 'Alegreya Sans SC';"> <strong>{{$minutes}}</strong> min ago</span> <b>|</b><span class="glyphicon glyphicon-comment"></span> 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$p->id)
                                 ->count();
								 $numOflike = DB::table('likes')
                                 ->where('post_id',$p->id)
                                 ->count();    
                            ?>
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark"></i> Likes</a> |
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> 
							<b>|</b>
							@if($p->status == 1)
							 <span style="font-family: 'Alegreya Sans SC';"><strong>Published</strong></span>
							@else
							<a href="{{url::to('/publish-post',$p->id)}}" class="btn btn-sm btn-info">Publish</a>
							@endif
                        </div>
                        @endif
					     <div class="col-sm-12">
							<div class="row">
								<div class="col-sm-12  post-header-line text-sm-right"> 
									<a href="{{url::to('/edit-post',$p->id)}}"class="btn btn-link">
									<i class="fas fa-edit"></i>
									Edit</a> |
									<a href="{{url::to('/delete-post',$p->id)}}"class="btn btn-link text-danger">
									<i class="fas fa-remove"></i>
									Delete</a>
								</div>
							</div>
						
						@if($p->post_image)
						<img src="{{$p->post_image}}" style="width:200px;height:200px;" class="mx-auto img-fluid img-circle image-responsive"
				           alt="post">
						@endif   
					</div>
					
					
					<div class="col-md-12">
					      
					      <p class="mt-2 text-justify" style="font-family: 'Advent Pro';">
						    {{ substr($p->description, 0,  425)}}
						  </p>
						  <a class="btn-lg btn-secondary" href="{{URL::to('/read-more',$p->id)}}">show details</a></p>
						
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