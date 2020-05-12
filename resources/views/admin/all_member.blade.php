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
							<a class="btn btn-danger btn-sm" href="{{URL::to('/delete-member/'.$ct->member_id)}}">
								<i class="fa fa-trash white trash"></i>
							</a>
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