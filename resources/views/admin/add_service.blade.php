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
				<form action="{{url('/save-service')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Service title</h3>
						<input type="text" class="form-control" name="s_title" required="">
					</div>
					
					<button type="submit" class="btn btn-info float-right">
						Add service
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
			
			<!-- <div class="row-fluid sortable">
                
              
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Event</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-service')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Sevice title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="s_title" required="" >
							  </div>
							</div> 
    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Service</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>

			</div> -->

@endsection