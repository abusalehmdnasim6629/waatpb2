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
						<th>Blog id</th>
						<th>Title</th>
                        <th>Image</th>
						
						<th>Date</th>
						<th>Author</th>
						<th class="text-center">Total likes</th>
						<th class="text-center">Total comments</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td>{{ $ct->id}}</td>
						<td class="center">{{ $ct->title}}</td>
						<td>
                        @if($ct->post_image)
                        <img src="{{URL::to($ct->post_image)}}" alt="about image" style="height:70px; width:70px">
                        @else
                          <span>no image</span>
                        @endif
                        </td>
						<td class="center">{{ $ct->date}}</td>
						<td class="center">{{ $ct->member_name}}</td>
						<td class="text-center">
							<span>{{ DB::table('likes')->where('post_id', $ct->id)->count()}}</span>
						</td>
                        <td class="text-center">
							<span>{{ DB::table('comments')->where('post_id', $ct->id)->count()}}</span>
						</td>
						<td class="text-center">
							<div class="btn btn-group">
                                <a class="btn btn-primary btn-sm" href="{{URL::to('/blog-detail/'.$ct->id)}}">
									<i class="fa fa-eye white eye"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-blog/'.$ct->id)}}">
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