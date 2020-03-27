@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{url('/all-event')}}">Event</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">All people in this event</a></li>
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
						<th>Member id</th>
						<th>member name</th>
						<th>Email</th>
						<th>NID</th>
						<th>Contact Number</th>
						<th>Present Org.</th>
						<th>Designation</th>
						<th>Department</th>
						<th>Present Address</th>

					</tr>
				</thead>

				@foreach($people as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->member_id}}</td>
						<td class="center">{{ $ct->member_name}}</td>
						<td class="center">{{ $ct->email_address}}</td>
						<td class="center">{{ $ct->nid}}</td>
						<td class="center">{{ $ct->contact_number}}</td>
						<td class="center">{{ $ct->present_organization}}</td>
						<td class="center">{{ $ct->designation}}</td>
						<td class="center">{{ $ct->department}}</td>
						<td class="center">{{ $ct->present_address}}</td>
					</tr>
				</tbody>
				@endforeach

			</table>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection