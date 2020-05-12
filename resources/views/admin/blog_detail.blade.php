@extends('admin.dashboard')
@section('admin_content')

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="breadcrumb">
   <li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/all-blog')}}">All blog</a>
		<i class="fa fa-angle-right"></i>
	</li>
	<li><a class="text-secondary" href="#">Blog detail</a></li>
	
</ul>
<div class="container">
    <div class="row">
    
    <div class="col-md-12">
        
         
            <div class="row">
                <div class="col-md-10 post mx-auto bg-white my-2" style="border-radius:5px">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <h4>
                                <strong><a href="#" class="post-title" >{{$r->title}}</a></strong>
                            </h4>
                        </div>
                    </div>

                        
                    <br>
                    <div class="row">
                        <div class="col-sm-10 mx-auto ">
                            <a href="#">
                                <img src="{{URL::to($r->post_image)}}" alt="" class="img-responsive" style="width:200px;height:200px;">
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-md-10 mx-auto">
                            <p class="text-justify">
                            {{$r->description}}
                            </p>  
                        </div>
             
                    </div>
                </div>
            </div>
           
           
          
        </div>
        
    </div>
</div>

@endsection