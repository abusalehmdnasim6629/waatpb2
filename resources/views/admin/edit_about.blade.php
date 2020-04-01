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
					<a href="#">Edit about</a>
				</li>
</ul>
			
			
				@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
				@endif
	<div class="box span12">
		<div class="box-content">
		   
			<div class="col-md-8 offset-md-2">
				<form action="{{url('/update-about',$result->about_id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<h3>Who we are</h3>
						<textarea name="a_des" class="form-control" cols="30" rows="5" required="">
						{{$result->about_description}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Mission</h3>
						<textarea name="a_mission" class="form-control" cols="30" rows="5" required="">
						{{$result->about_mission}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Vision</h3>
						<textarea name="a_vision" class="form-control" cols="30" rows="5" required="">
						{{$result->about_vision}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Who can be a member</h3>
						<textarea name="a_member" class="form-control" cols="30" rows="5" required="">
						{{$result->about_member}}
						</textarea>
					</div>
					
					<button type="submit" class="btn btn-info float-right">
						Update About
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
			
@endsection