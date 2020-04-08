@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<style>
body
{
    
}
a:hover { text-decoration:none; }
.btn
{
    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}
.btn-read-more
{
    padding: 5px;
    text-align: center;
    border-radius: 0px;
    display: inline-block;
    border: 2px solid #662D91;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    color:#662D91;
}

.btn-read-more:hover
{
    color: #FFF;
    background: #662D91;
}
.post { border-bottom:1px solid #DDD;padding:5px}
.post-title {  color:#662D91; }
.post .glyphicon { margin-right:5px; }
.post-header-line { border-top:1px solid #DDD;border-bottom:1px solid #DDD;padding:5px 0px 5px 15px;font-size: 12px; }
.post-content { padding-bottom: 15px;padding-top: 15px;}
</style>
<div class="site-breadcrumb-title" style="height:100px;"  >
	<!-- <h2>Profile</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/profile')}}">Profile</a></li>
			</ul>
		</div>
	</div> -->
</div>

<main class="main">  
<?php 
 $mid = Session::get('lcheck');

?>
@if($mid)
<div class="container">
   <div class="row">
       <div class="col-md-6">
         <form action="{{url('/save-post')}}" method="POST" enctype="multipart/form-data">
			@csrf
           <div class="control-group">
                <input type="text" class="form-control mb-2 mt-5" name="title" placeholder="Enter title">
                <div class="controls mb-3">
                    <textarea class="form-control " name="s_post" required=" " placeholder="Write post "  rows="3"></textarea>
                </div>
                <input type="file" class="form-control mb-2 mt-5" name="image" placeholder="Enter title">
            </div>
            <button type="submit" class="btn btn-info float-right">
						Add post
		    </button>
          </form>
       </div>
   </div>
</div>
@endif
<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          @foreach($result as $r )
            <div class="row">
                <div class="col-md-12 post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <strong><a href="#" class="post-title" >{{$r->title}}</a></strong></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 post-header-line">
                            <span class="glyphicon glyphicon-user"></span>by <a href="#"><b> {{ $r->member_name}}</b></a> | <span class="glyphicon glyphicon-calendar">
                            </span>{{$r->date}} | <span class="glyphicon glyphicon-comment"></span> | 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$r->id)
                                 ->count();
                            ?>
                            <a href="#">{{$numOfcomment}} Comments</a> 
                        </div>
                    </div>
                    <div class="row post-content">
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{URL::to($r->post_image)}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <p>
                            {{$r->description}}
                            </p>
                            <p>
                                <a class="btn btn-read-more" href="#">Read more</a></p>
                                <p><a class="fa fa-thumbs-o-up" href="#"><span style="margin-left:2px;">like</span></a></p>   
                            <p><a  class="fa fa-comment-o" href="#"><span style="margin-left:2px;">comment</span></a></p>  
                            <div class="col-md-6">
                                    <form action="{{url('/save-comment',$r->id )}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="control-group">
                                            <div class="controls mb-3">
                                                <textarea class="form-control " name="comment" required=" " placeholder="" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info float-right">
                                                    Add comment
                                        </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
        
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
   


@endsection