@extends('admin.dashboard')
@section('admin_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home></a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">member info</a></li>
</ul>
<div class="container">
            <div class="event-all text-center mt-30 ">
				<h3>Member Details</h3>
			</div>
            <br><br>
    <div class="row">
       <div class="col-md mb-5">
        <img src="{{URL::to($result->image)}}" alt="">
       </div>
       <div class="col-md">
        <table>
           <tr>
           <td><b> Member id : </b></td>
           <td>{{$result->code}}</td>
           </tr>
           <tr>
           <td><b> Name : </b></td>
           <td>{{$result->member_name}}</td>
           </tr>
           <tr>
           <td><b>Email : </b></td>
           <td>{{$result->email_address}}</td>
           </tr>
           <tr>
           <td><b>National ID : </b></td>
           <td>{{$result->nid}}</td>
           </tr>
           <tr>
           <td><b>Present Organization : </b></td>
           <td>{{$result->present_organization}}</td>
           </tr>
           <td><b>Present Address : </b></td>
           <td>{{$result->present_address}}</td>
           </tr>
           <td><b>Department : </b></td>
           <td>{{$result->department}}</td>
           </tr>
           <td><b>Blood group : </b></td>
           <td>{{$result->blood_group}}</td>
           </tr>
           <td><b>Skills : </b></td>
           <td>{{$result->member_skill}}</td>
           </tr>
           <td><b>Hobby : </b></td>
           <td>{{$result->member_hobby}}</td>
           </tr>
          
        
        </table>
        
       </div>
       

    
    
    </div>
    
								<a class="btn btn-success btn-sm pd-2" href="{{URL::to('/accept-member/'.$result->member_id)}}">
									<i>Accept</i>
								</a>
								<a class="btn btn-danger btn-sm pd-2" href="{{URL::to('/reject-member/'.$result->member_id)}}">
									<i > Reject</i>
								</a>
   
</div>
@endsection