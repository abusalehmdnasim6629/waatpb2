@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/admin')}}" class="btn btn-link">Home</a>
		<i class="icon-angle-right"></i>
	</li>
</ul>
<div class="container">
<div class="row">
	
		
			<h2><i class="col-sm halflings-icon user"></i><span class="break"></span>Cost</h2>
			

		<div class="col-sm-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Delivary Cost</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->id}}</td>
						<td class="center">{{ $ct->cost}}</td>
						
                         
						<td class="text-center">
							<div class="btn btn-group">  
                            <a class="btn btn-info btn-sm" href="{{URL::to('/edit-cost/'.$ct->id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
							</div>
						</td>
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