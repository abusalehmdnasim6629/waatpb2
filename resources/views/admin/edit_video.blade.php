@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/all-video')}}">All video</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a class="text-secondary" href="#">Edit</a></li>
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
				<form action="{{url('/update-video',$result->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Video title</h3>
						<input type="text" class="form-control" name="v_title" value="{{$result->title}}" required="">
					</div>
					
					<div class="form-group">
						<h3>Video link</h3>
						<input type="text" class="form-control" name="link" value="{{$result->video_link}}" required="">
						
						
						
					</div>

					<button type="submit" class="btn btn-info float-right">
						Update
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>

@endsection