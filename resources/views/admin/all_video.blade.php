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
	<li><a href="#">Tables</a></li>
</ul>
<div class="container">
<div class="row">
	
		
			<h2><i class="col-sm halflings-icon user"></i><span class="break"></span>Blogs</h2>
			

		<div class="col-sm-12">
			<table class="table table-bordered">
				<thead>
					<tr>
					
						<th>Title</th>
                        <th>Video</th>
						<th>Link</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>

				@foreach($ct as $ct)
				<tbody>
					<tr>
						
						<td class="center">{{ $ct->title}}</td>
						<td>
                        <iframe  width="80px" height="80px" src="https://www.youtube.com/embed/{{$ct->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </td>
						<td class="center">{{ $ct->video_link}}</td>
						<td class="text-center">
							<div class="btn btn-group">
                                <a class="btn btn-primary btn-sm" href="{{URL::to('/edit-video/'.$ct->id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-video/'.$ct->id)}}">
									<i class="fa fa-trash white trash"></i>
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