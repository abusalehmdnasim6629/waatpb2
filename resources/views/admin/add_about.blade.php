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
					<a href="#">Add about</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
                
                <p class="alert-success">
                   <?php
                      $m = Session::get('messege');
                      echo $m;
                      Session::put('messege',null);
                   
                   
                   ?>
                </p>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add About</h2>
						
					</div>
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-about')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">About title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="a_title" required="" >
							  </div>
							</div>
                            <div class="control-group">
                                <label class="control-label">About Description</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_des" required=" "  rows="3"></textarea>
                                </div>
                            </div>

                            <div class="control-group">
							  <label class="control-label" for="fileInput">About image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="a_image" id="fileInput" type="file">
								<span>[ Image should be  800x530 ]</span>
							  </div>
                            </div>  
                            
                          

    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add about</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection