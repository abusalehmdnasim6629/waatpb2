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
                                <label class="control-label">Who we are</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_des" required=" "  rows="3"></textarea>
                                </div>
							</div>
							<div class="control-group">
                                <label class="control-label">Mission</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_mission" required=" "  rows="3"></textarea>
                                </div>
							</div>
							<div class="control-group">
                                <label class="control-label">vission</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_vission" required=" "  rows="3"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Who can be a member</label>
                                <div class="controls">
                                <textarea class="cleditor" name="a_member" required=" "  rows="3"></textarea>
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