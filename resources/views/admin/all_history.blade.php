@extends('admin.dashboard')
@section('admin_content')

           <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>History id</th>
								  <th>First paragraph</th>
                                  <th>Middle paragraph</th>
                                  <th>Last paragraph</th>

							  </tr>
						  </thead>   

						@foreach($result as $ct)
						  <tbody>
							<tr>
								<td>{{ $ct->history_id}}</td>
								<td class="center">{{ $ct->first_paragraph}}</td>
								<td class="center">{{ $ct->middle_paragraph}}</td>
								<td class="center">{{ $ct->last_paragraph}}</td>
                            
								<td class="center">
								

									<a class="btn btn-info" href="{{URL::to('/edit-history/'.$ct->history_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-history/'.$ct->history_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
						  </tbody>

						@endforeach

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection