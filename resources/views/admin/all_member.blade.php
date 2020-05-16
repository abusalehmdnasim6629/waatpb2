@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<ul class="breadcrumb">
	
	<li>
	<div class="text-right">
				<form action="{{url('/search-member')}}" method="POST" enctype="multipart/form-data">
				          	@csrf
				
						
							
							<div class="input-group">
                        
                                <input type="text" class="form-control" style="height:40px;"placeholder="Search member" name="email">
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-primary " id="search">
                                    <i class="fa fa-search"></i>
                                    
                                </button>
        
                            </div>
                            </div>
						
				   </form>
	</div>		   
	</li>
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
					
						<th class="text-center">Sl</th>
						<th class="text-center">Member Id</th>
						<th class="text-center">Member name</th>
						<th class="text-center">Image</th>
						<th class="text-center">Email</th>
						<th class="text-center">Member Type</th>
						<th class="text-center">Action</th>

					
				</thead>
				@php
				$i = 1;

				$a= array();
				@endphp

				@foreach($result as $ct)
				<tbody>
					<tr>
						<td class="text-center">{{$i}}</td>
						<td class="text-center">{{ $ct->code}}</td>
						<td class="text-center">{{ $ct->member_name}}</td>
						<td class="text-center"><img src="{{URL::to($ct->image)}}" alt="member image" style="height:70px; width:70px">
						<td class="text-center">{{ $ct->email_address}}</td>
						<!-- <td class="center">{{ $ct->nid}}</td>
                                <td class="center">{{ $ct->contact_number}}</td>
                                <td class="center">{{ $ct->present_organization}}</td>
                                <td class="center">{{ $ct->designation}}</td>
                                <td class="center">{{ $ct->department}}</td> -->
						<td class="text-center">{{$ct->is_paid == 1 ? 'Paid' : 'Unpaid'}} <br>
							@if ($ct->is_paid == 0)
							<a href="{{route('make.paid',$ct->member_id)}}" class="btn btn-success btn-sm">Make Paid</a>
							@endif

						</td>
						<td class="text-center">
							<a class="btn btn-info btn-sm" href="{{URL::to('/member-info/'.$ct->member_id)}}">
								<i class="fa fa-eye white eye"></i>
							</a>
							<!-- <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-member/'.$ct->member_id)}}">
								<i class="fa fa-trash white trash"></i>
							</a> -->
							
							{{ $ct->member_id }}
							<input type="hidden" name="" id="hi" value="{{ $ct->member_id }}">
							<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" id="open">
							 <i class="fa fa-trash white trash"></i>
							</button>
							<a class="btn btn-info btn-sm"  href="{{URL::to('/member-edit/'.$ct->member_id)}}">
									<i class="fa fa-edit white edit"></i>
							</a>
						</td>
					</tr>

				</tbody>

				@php
				$i++;
				@endphp
				@endforeach

			</table>
	{{$result->links()}}
		</div>
	</div>
	<!--/span-->
	

</div>
<!--/row-->



@endsection


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete conformation</h5>
        <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this?
               
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" data-dismiss="modal" aria-label="Close" >No, cancel</button>
        <button  class="btn btn-danger" >Yes,delete</button>

        <!-- <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-member/'.$ct->member_id)}}">
								<i class="fa fa-trash white trash"></i>
							</a> -->
      </div>

    </div>
  </div>
</div>


<script>
 $(document).ready(function(){

// jQuery methods go here...


   $(#open).on('click',function(){
       
             
            var a = $('#id').val();
            console.log(a);
       
    });

});

</script>