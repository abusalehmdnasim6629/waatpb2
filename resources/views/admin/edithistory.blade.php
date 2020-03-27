@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="/all-history">History</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a href="#">Edit</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">
			<div class="col-md-8 offset-md-2">
				<form action="{{route('history.update', $history->history_id)}}" method="POST">
					@csrf
					<div class="form-group">
						<h3>First Paragraph</h3>
						<textarea name="first_paragraph" class="form-control" cols="30" rows="5">
							{{$history->first_paragraph}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Middle Paragraph</h3>
						<textarea name="middle_paragraph" class="form-control" cols="30" rows="5">
							{{$history->middle_paragraph}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Last Paragraph</h3>
						<textarea name="last_paragraph" class="form-control" cols="30" rows="5">
							{{$history->last_paragraph}}
						</textarea>
					</div>
					<button type="submit" class="btn btn-info float-right">
						Update History
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
@endsection