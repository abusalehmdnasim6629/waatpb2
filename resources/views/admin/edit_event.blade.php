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
		<a href="#">Edit Event</a>
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
				<form action="{{url('/update-event',$result->event_id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Event title</h3>
						<input type="text" class="form-control" name="e_title" value="{{$result->event_title}}" required="">
					</div>
					
					<div class="form-group">
						<h3>Event date</h3>
						<input type="date" class="form-control" name="e_date" value="{{$result->event_date}}" required="">
					</div>

					<div class="form-group">
						<h3>Event image</h3>
						<input type="file" class="form-control form-control-bg" name="e_image" required="">
						<span>[ Image should be min 597x877 and max 600x880 ]</span>
						<br><br>
						<img src="{{asset($result->event_image)}}" class="w-100 h-200" alt="">
						
					</div>

					<button type="submit" class="btn btn-info float-right">
						Add event
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>


@endsection