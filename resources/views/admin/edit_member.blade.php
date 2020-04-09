@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home / </a>
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Edit member</a>
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
				<form action="{{url('/update-member',$result->member_id)}}" method="POST" enctype="multipart/form-data">
					@csrf
                    <div class="form-group">
						<h3>Member id</h3>
						<input type="text" class="form-control" name="code" value="{{$result->code}}" required="">
					</div>
					<div class="form-group">
						<h3>Name</h3>
						<input type="text" class="form-control" name="name" value="{{$result->member_name}}" required="">
					</div>
					
					<div class="form-group">
						<h3>Email</h3>
						<input type="email" class="form-control" name="email" value="{{$result->email_address}}" required="">
					</div>
                    <div class="form-group">
						<h3>Contact number</h3>
						<input type="text" class="form-control" name="contact" value="{{$result->contact_number}}" required="">
					</div>
                    <div class="form-group">
						<h3>NID</h3>
						<input type="text" class="form-control" name="nid" value="{{$result->nid}}" required="">
					</div>
                    <div class="form-group">
						<h3>Present Organigtion</h3>
						<input type="text" class="form-control" name="p_o" value="{{$result->present_organization}}" required="">
					</div>
                    <div class="form-group">
						<h3>Present Address</h3>
						<input type="text" class="form-control" name="p_a" value="{{$result->present_address}}" required="">
					</div>
                    <div class="form-group">
						<h3>Department</h3>
						<input type="text" class="form-control" name="department" value="{{$result->department}}" required="">
					</div>
                    <div class="form-group">
						<h3>Designation</h3>
						<input type="text" class="form-control" name="designation" value="{{$result->designation}}" required="">
					</div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
                            <h3>Blood group</h3>
								<select id="txtBloodGroup" class="form-control" name="b_g">
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>
							</div>
						</div>
                    <div class="form-group">
						<h3>Skill</h3>
						<textarea name="skill" class="form-control" cols="30" rows="5" >
						{{$result->member_skill}}
						</textarea>
					</div>

                   <div class="form-group">
						<h3>Hobby</h3>
						<textarea name="hobby" class="form-control" cols="30" rows="5">
						{{$result->member_hobby}}
						</textarea>
					</div>
					<div class="form-group">
						<h3>Image</h3>
						<input type="file" class="form-control form-control-bg" name="image">
						<span>[Image should be 2Mb or less]</span>
						<br><br>
						<img src="{{asset($result->image)}}" class="w-100 h-200" alt="">
						
					</div>

					<button type="submit" class="btn btn-info float-right">
						update member
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->

</div>


@endsection