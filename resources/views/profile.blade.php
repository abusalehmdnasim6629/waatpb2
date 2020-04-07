@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
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
	<div class="row m-y-2 pd-2">
		<div class="col-lg-4 pull-lg-8 text-xs-center pd-5" style="margin-top:3%;">
			<img src="{{$pro->image}}" style="width:200px;height:200px;" class="m-x-auto img-fluid img-circle"
				alt="avatar">
			<h4 class="m-y-2 " style="margin-top:20px;">{{$pro->member_name}}</h4>
		</div>
		<div class="col-lg-8 push-lg-4">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#profile" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
				</li>
				<li class="nav-item">
					<a href="#edit" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
				</li>
				<li class="nav-item">
					<a href="#setting" data-target="#setting" data-toggle="tab" class="nav-link">Settings</a>
				</li>
			</ul>
			<div class="tab-content p-b-3 mt-5">
				<div class="tab-pane active" id="profile">

					<div class="row">
						<div class="col-md-6">
							<h6>Designation</h6>
							<p>
								{{$pro->designation}}
							</p>
							<h6>Hobbies</h6>
							<p>
								{{$pro->member_hobby}}
							</p>
						</div>
						<div class="col-md-6">
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
								<input class="form-control" type="text" name="p_o"
									value="{{$pro->present_organization}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Designation</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" name="designation"
									value="{{$pro->designation}}">
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
								<input class="form-control" type="text" name="p_a" value="{{$pro->present_address}}"
									placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Contact number</label>
							<div class="col-lg-9">
								<input class="form-control" type="text" name="contact_number"
									value="{{$pro->contact_number}}" placeholder="">
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
							<label class="col-lg-3 col-form-label form-control-label">Image</label>
							<div class="col-lg-9">
								<input class="form-control" type="file" name="image">
								<span>[Image should be 2Mb or less]</span>
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

				<div class="tab-pane" id="setting">
					<h4 class="m-y-2" style="padding:10px;">Change Password</h4>
					<form role="form" action="{{url('/change-password')}}" method="post">
						{{csrf_field()}}
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Old Password</label>
							<div class="col-lg-9">
								<input class="form-control" type="password" name="old_password" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">New Password</label>
							<div class="col-lg-9">
								<input class="form-control" type="password" name="password" required>
							</div>
						</div>

						<button class="btn btn-success btn-lg float-right" type="submit">Change Password</button>

					</form>
				</div>

			</div>
		</div>

	</div>

	<!-- placehold.it/150 -->
</div>
<hr>
@endsection