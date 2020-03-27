@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="/all-header">Header</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">Edit</a></li>
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
			<div class="col-md-8 offset-md-2">
				<form action="{{route('header.update', $header->header_id)}}" method="POST">
					@csrf
					<div class="form-group">
						<h3>Header title</h3>
						<textarea name="header_title" class="form-control" cols="10" rows="2" required>
							{{$header->header_title}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Header description</h3>
						<textarea name="header_description" class="form-control" cols="10" rows="5" required>
							{{$header->header_description}}
						</textarea>
					</div>

					<button type="submit" class="btn btn-info float-right">
						Update Header
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection