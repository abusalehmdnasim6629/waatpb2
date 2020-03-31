@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home / </a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit job</a>
				</li>
</ul>

<div class="box span12">
		<div class="box-content">
		   
			<div class="col-md-8 offset-md-2">
				<form action="{{url('/update-job',$result->job_id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Employee Name</h3>
						<input type="text" class="form-control" name="e_name"  value="{{$result->employee_name}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Department</h3>
						<input type="text" class="form-control" name="department"  value="{{$result->department}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Position</h3>
						<input type="text" class="form-control" name="position"  value="{{$result->position}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Vacancies</h3>
						<input type="text" class="form-control" name="vacancies"  value="{{$result->vacancies}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Job location</h3>
						<input type="text" class="form-control" name="job_location"  value="{{$result->job_location}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Joining date</h3>
						<input type="date" class="form-control" name="joining_date"  value="{{$result->joining_date}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Package</h3>
						<input type="text" class="form-control" name="package"  value="{{$result->package}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Deadline</h3>
						<input type="date" class="form-control" name="deadline"  value="{{$result->deadline}}" required="" >
						
					</div>
					<div class="form-group">
						<h3>Additional notes</h3>
						<textarea name="a_note" class="form-control" cols="30" rows="5" required="">
						{{$result->additional_notes}}
						</textarea>
					</div>
					

					

					<button type="submit" class="btn btn-info float-right">
						 Update job
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
			
		
@endsection