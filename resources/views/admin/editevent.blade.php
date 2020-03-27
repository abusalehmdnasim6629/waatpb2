@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="/all-event">Event</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">Edit</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<div class="col-md-8 offset-md-2">
				<form action="{{route('event.update', $event->event_id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Event title</h3>
						<input type="text" class="form-control" name="event_title" value="{{$event->event_title}}">
					</div>
					<div class="form-group">
						<h3>Event Time</h3>
						<input type="date" class="form-control" name="event_date" value="{{$event->event_date}}">
					</div>

					<div class="form-group">
						<h3>Event Image</h3>
						<input type="file" class="form-control form-control-bg" name="event_image">
						<br>
						<img src="{{asset($event->event_image)}}" class="w-100 h-400" alt="">
					</div>

					<button type="submit" class="btn btn-info float-right">
						Update Event
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection