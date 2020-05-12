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
				<form action="{{url('/save-image')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h3>Image title</h3>
						<input type="text" class="form-control" name="i_title"  required="">
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="form-group">
					        <h3>category</h3>
								
								  <select id="selectError3" name="category_id" class="form-control">
                                  <option >Select category</option>

                                  <?php
                                    $all_category = DB::table('gallary_category')
                                                ->get();
                                    foreach($all_category as $c){?>
									<option value="{{$c->id}}">{{ $c->category}}</option>
            	
                                    <?php } ?>
								  </select>
								
					</div>
					</div>
					

					<div class="form-group">
						<h3>Image</h3>
						<input type="file" class="form-control form-control-bg" name="image" required="">
						<span>[ Image should be  200x200 ]</span>
						
						
					</div>

					<button type="submit" class="btn btn-info float-right">
						Add image
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>

@endsection