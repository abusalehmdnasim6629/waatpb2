@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])



<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Paynment detail</h2>
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
						<th class="text-center">Method</th>
						<th class="text-center">Phone</th>
						<th class="text-center">Transaction id</th>
						
				</thead>
				@php
				$i = 1;

				
				@endphp

				
				<tbody>
					<tr>
						<td class="text-center">{{$i}}</td>
						<td class="text-center">{{ $result->order_id}}</td>
						<td class="text-center">{{ $result->method}}</td>
						<td class="text-center">{{ $result->number}}</td>
						<td class="text-center">{{ $result->txt_id}}</td>
						
						

				</tbody>

				
				

			</table>
	
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