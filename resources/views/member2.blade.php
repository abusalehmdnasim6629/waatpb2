@extends('layouts.webview')

@section('content')
<!-- Start breadcrumb
    ============================================= -->
<div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/breadcrumb.png)">
	<h2>Be A Member</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="#">Member</a></li>
			</ul>
		</div>
	</div>
</div>
<!--  End breadcrumb -->


@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="container" style="margin-top: 70px;margin-bottom: 70px;">
	<form action="{{url('/save-member')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="form-horizontal">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Name:</label>
								<input type="text" class="form-control txt" name="name" id="txtName" required="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">NID:</label>
								<input type="text" class="form-control txt numericNumber" name="nid" id="txtNID"
									required="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Contact Number:</label>
								<input type="text" class="form-control txt numericNumber" name="contact"
									id="txtContactNumber" maxlength="11" placeholder="017xxxxxxxx" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="txtEmail">Email: </label>
								<input type="email" class="form-control txt" name="email" id="txtEmail" required="">

							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="txtPresentOrganization">Present
									Organization</label>
								<input type="text" class="form-control txt ui-autocomplete-input" name="po"
									id="txtPresentOrganization" autocomplete="off" required="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Designation:</label>
								<input type="text" class="form-control txt" name="designation" id="txtDesignation"
									required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="txtDepartment">Department:</label>
								<input type="text" class="form-control txt" name="department" id="txtDepartment"
									required="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="txtBloodGroup">Blood Group</label>
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
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Present Address</label>
								<input type="text" class="form-control txt" name="p_a" id="txtPresentAddress"
									required="" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Password</label>
								<input type="password" class="form-control txt" name="pass" id="txtPassword"
									required="">
								<span id="demo"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Retype Password</label>
								<input type="password" class="form-control txt" name="c_pass" id="txtRetypePassword"
									required="">

							</div>
						</div>
						<!-- <div class="col-sm-12 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="email">Upload image</label>
								<input type="file" name="image">
								<span>[Image should be 2Mb or less]</span>

							</div>
						</div> -->
					</div>
					<div class="row">
						<div class="col-sm-offset-2 col-sm-8" style="padding-top:20px;">
							<button type="submit" id="btnSave" class="btn btn-primary"
								style="height:30px;font-size:1.5rem;" >Submit</button>
							<button type="reset" id="btnClear" class="btn btn-info"
								style="height:30px;font-size:1.5rem;">Clear</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script >

    $(document).ready(function(){

		$("#txtPassword").keyup(function(){

              var pass = $('#txtPassword').val();
			 
			  if(pass.length < 8 && pass.search(^[0-9]) == -1)
			  {
				console.log(pass);
				 $('#demo').html('short');
				 return "8";
			  }
			  
               
		})


	});   



</script>
@endsection