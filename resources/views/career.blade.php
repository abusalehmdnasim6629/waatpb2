@extends('layouts.webview')

@section('content')
<div class="clearfix"></div>
<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
	<h2>Career</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="#">Career</a></li>
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
     $result = Session::get('lcheck');
     Session::put('join',$result);
     
if($result != null){
     ?>


<div class="row-fluid sortable" style="padding:20px;">
	<div class="col-sm-10 mx-auto">
			<h2><i class="halflings-icon user"></i><span class="break"></span>Jobs</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Job id</th>
						<th>Employers Name</th>
						<th>Department</th>
						<th>Position</th>
						<th>Vacancies</th>
						<th>Job Location</th>
						<th>Joining Date</th>
						<th>Package</th>
						<th>Deadline</th>
						<th>Additional Notes</th>

					</tr>
				</thead>
				<?php 
                          $result2 = DB::table('tbl_job')
                          ->select('tbl_job.*')
                           ->get();
                          foreach($result2 as $r){
                        ?>

				<tbody>
					<tr>
						<td>{{ $r->job_id}}</td>
						<td class="center">{{ $r->employee_name}}</td>
						<td class="center">{{ $r->department}}</td>
						<td class="center">{{ $r->position}}</td>
						<td class="center">{{ $r->vacancies}}</td>
						<td class="center">{{ $r->job_location}}</td>
						<td class="center">{{ $r->joining_date}}</td>
						<td class="center">{{ $r->package}}</td>
						<td class="center">{{ $r->deadline}}</td>
						<td class="center">{{ $r->additional_notes}}</td>

					</tr>

				</tbody>

				<?php } ?>

			</table>
			
		
	</div>
	<!--/span-->

</div>
<!--/row-->
<?php } else{ ?>
<div style="padding:20px;" class="col-sm-12 col-md-12 col-lg-12">
	<h4>To see the available jobs, please register by clicking the below link</h4>

	<a href="{{url('/member-registration')}}" style="color: #00aeef;"> <i class="fas fa-arrow-circle-right"></i>
		Apply For Membership </a>
	<h4>Or</h4>
	<a href="#port-popup" style="color: #00aeef;" id="here"> <i class="fas fa-arrow-circle-right"></i> Login as a member
	</a>
</div>

<?php } ?>
@endsection