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
					<a href="#">Add job</a>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add job</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-job')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Employee name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="e_name" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Department</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="department" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Position</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="position" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Vacancies</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="vacancies" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Job location</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="job_location" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Joining date</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="joining_date" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Package</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="package" required="" >
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Deadline</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="deadline" required="" >
							  </div>
							</div>
                            <div class="control-group">
                                <label class="control-label">Additional note</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_note" required=" "  rows="3"></textarea>
                                </div>
                            </div>

    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add job</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection