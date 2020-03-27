@extends('admin.dashboard')
@section('admin_content')

<<<<<<< HEAD
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Event id</th>
						<th>Event title</th>
						<th>Event image</th>
						<th>Event date</th>
						<th>Action</th>



						

					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->event_id}}</td>
						<td class="center">{{ $ct->event_title}}</td>
						<td><img src="{{URL::to($ct->event_image)}}" alt="about image" style="height:70px; width:70px">
						<td class="center">{{ $ct->event_date}}</td>
						
						<td class="center">
							<div class="btn btn-group">
								<a class="btn btn-info btn-sm" href="{{URL::to('/edit-event/'.$ct->event_id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-event/'.$ct->event_id)}}">
									<i class="fa fa-trash white trash"></i>
								</a>
							</div>
						</td>
					</tr>

=======
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">All Event</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		{{-- <div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div> --}}

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Event id</th>
						<th>Event title</th>
						<th>Event image</th>
						<th>Event date</th>
						<th class="text-center">Total Join</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->event_id}}</td>
						<td class="center">{{ $ct->event_title}}</td>
						<td><img src="{{URL::to($ct->event_image)}}" alt="product image"
								style="height:70px; width:70px"> </td>
						<td class="center">{{ $ct->event_date}}</td>
						<td class="text-center">
							<span>{{ DB::table('tbl_join_event')->where('event_id', $ct->event_id)->count()}}</span>
							<br>
							<a href="{{route('event.people', $ct->event_id)}}">View</a>
						</td>
						<td class="text-center">

							<div class="btn btn-group">
								<a class="btn btn-info btn-sm" href="{{route('event.edit',$ct->event_id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{route('event.delete',$ct->event_id)}}">
									<i class="fa fa-trash white trash"></i>
								</a>
							</div>
						</td>
					</tr>

>>>>>>> f6577f45eb5ec65fd1aa673df51da241b4d03c96
				</tbody>

				@endforeach

			</table>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection