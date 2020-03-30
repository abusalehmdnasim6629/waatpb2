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
					<a href="#">Add Event</a>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Event</h2>
						
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
						<form class="form-horizontal" action="{{url('/save-event')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Event title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="e_title" required="" >
							  </div>
							</div>


                            <div class="control-group">
							  <label class="control-label" for="fileInput">Event image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="e_image" id="fileInput" type="file">
							  </div>
                            </div>  
                            
                            <div class="control-group">
							  <label class="control-label" for="date01">Event date</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="e_date" required="" >
							  </div>
							</div>

    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add event</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection