@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit category</a>
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
				<form action="{{url('/update-category',$result->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Category</h3>
						<input type="text" class="form-control" name="category" required="" value="{{$result->category}}">
					</div>
					
					<button type="submit" class="btn btn-info float-right">
					  Update category
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
		

@endsection