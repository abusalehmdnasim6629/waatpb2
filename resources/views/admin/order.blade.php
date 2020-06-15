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
						<th class="text-center">Order Id</th>
						<th class="text-center">name</th>
						<th class="text-center">Phone</th>
						<th class="text-center">Email</th>
						<th class="text-center">Delivery status</th>
						<th class="text-center">Payment</th>
						<th class="text-center">Action</th>

					
				</thead>
				@php
				$i = 1;

				$a= array();
				@endphp

				@foreach($result as $o)
				<tbody>
					<tr>
						<td class="text-center">{{$i}}</td>
						<td class="text-center">{{ $o->order_id}}</td>
						<td class="text-center">{{ $o->name}}</td>
						<td class="text-center">{{ $o->phone}}</td>
						<td class="text-center">{{ $o->email}}</td>
						<td >
						@if($o->d_status == 0)
						<span class="bg-danger text-white">Pending</span>
						@elseif($o->d_status == 1)
						<span class="bg-warning text-white">Received</span>
						@else
						<span class="bg-success text-white">Done</span>
						@endif
						<a class="btn btn-info btn-sm" href="{{URL::to('/edit-status/'.$o->id)}}">
									<i class="fa fa-edit white edit"></i>
								</a>
						</td>
						<td class="text-center">
                            <div class="btn btn-group">
                                <a class="btn btn-info btn-sm" href="{{URL::to('/payment-detail/'.$o->order_id)}}">
									<i class="fa fa-eye white eye"></i>
								</a>
								
							</div>
                        
                        </td>
						<td class="text-center">
                            <div class="btn btn-group">
                                <a class="btn btn-primary btn-sm" href="{{URL::to('/order-detail/'.$o->id)}}">
									<i class="fa fa-eye white eye"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-order/'.$o->order_id)}}">
									<i class="fa fa-trash white trash"></i>
								</a>
							</div>
                        
                        </td>
						

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

	

<script>
 $(document).ready(function(){

// jQuery methods go here...


   $(#open).on('click',function(){
       
             
            var a = $('#id').val();
            console.log(a);
       
    });

});

</script>