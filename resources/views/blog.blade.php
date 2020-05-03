@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>

<style>
body
{
  background-color:#f5f5f5;  
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

#autoresizing{  
  /* box-sizing: padding-box; */
  overflow:hidden;
  /* demo only: */
  /* padding:10px;
  width:250px;
  font-size:14px;
  margin:50px auto;
  display:block;*/
  border-radius:10px; 
  border:2px solid #556677;
}
</style>
<div class="site-breadcrumb-title" style="height:100px;"  >
	
</div>

<main class="main">  
<?php 
 $mid = Session::get('lcheck');

?>
@if($mid)
<div class="container">
   <div class="row">
      <div class="col-md-12">
       
       <div class="col-md-8 mx-auto">
         <form action="{{url('/save-post')}}" method="POST" enctype="multipart/form-data">
			@csrf
           <div class="control-group">
                <input type="text" class="form-control mb-2 mt-5" name="title" placeholder="Enter title" style="border-radius:5px">
                <div class="controls mb-3">
                    <textarea class="form-control " name="s_post" required=" " placeholder="Write post "  rows="3" style="border-radius:5px"></textarea>
                </div>
                <!-- <input type="file" class="form-control-file mb-2 mt-5" name="image" placeholder="Enter title"> -->
                <div class="file-field">
						<div class="btn btn-light btn-sm float-left">
							<input type="file" class="form-control-file" name="image">
						</div>
					</div>
				</div><br>
                <div class="form-check">
										 
											<input type="checkbox" class="form-check-inline" name="status" value="1"> 
											<label for="">Publish in blog section</label>
										
										
									</div>

				<button type="submit" class="btn-lg btn-outline-secondary float-right mb-2">
					Add post
				</button>
          </form>
       </div>
      
       </div>  
   </div>
</div>
@endif

<?php

// $startDate = Carbon::createFromFormat('Y-m-d H:i:s', '2016-11-05 12:00:00');
// $endDate = Carbon::createFromFormat('Y-m-d H:i:s', '2016-11-08 14:25:00');

// $days = $startDate->diffInDays($endDate);
// $hours = $startDate->copy()->addDays($days)->diffInHours($endDate);
// $minutes = $startDate->copy()->addDays($days)->addHours($hours)->diffInMinutes($endDate);
// echo $days.'day'.$hours.'hr'.$minutes.'min';
?>
<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->
<div class="container ">
    <div class="row">
        <div class="col-md-12">
        
          @foreach($result as $r )
          <?php
               
                $startDate = Carbon::createFromFormat('Y-m-d H:i:s',$r->date);
                $endDate = Carbon::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));

                $days = $startDate->diffInDays($endDate);
                $hours = $startDate->copy()->addDays($days)->diffInHours($endDate);
                $minutes = $startDate->copy()->addDays($days)->addHours($hours)->diffInMinutes($endDate);
            ?>
               <div class="row">
                <div class="col-md-8 post mx-auto bg-white my-2" style="border-radius:5px">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <h4>
                                <strong><a href="#" class="post-title text-dark" style="font-family: 'Alegreya SC';" >{{$r->title}}</a></strong>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        @if($days > 0)
                        <div class="col-md-10 mx-auto post-header-line">
                            <span class="glyphicon glyphicon-user" style="font-family: 'Alegreya Sans SC';"></span>By 
                            @if(Session::get('lcheck') == $r->member_id)
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> you</b></a>
                            @else
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> {{ $r->member_name}}</b></a> 
                            @endif
                            | <span class="glyphicon glyphicon-calendar">
                              <span class="glyphicon glyphicon-comment"></span> | 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$r->id)
                                 ->count();
                            $numOflike = DB::table('likes')
                                 ->where('post_id',$r->id)
                                 ->count();    
                            ?>
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark" ></i> Likes</a> | <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> | <span style="font-family: 'Alegreya Sans SC';">{{$days}} day ago</span>
                        </div>
                        @elseif($days == 0 && $hours > 0)
                        <div class="col-md-10 mx-auto post-header-line">
                            <span class="glyphicon glyphicon-user" style="font-family: 'Alegreya Sans SC';"></span>By 
                            @if(Session::get('lcheck') == $r->member_id)
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> you</b></a>
                            @else
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> {{ $r->member_name}}</b></a> 
                            @endif 
                            
                            | <span class="glyphicon glyphicon-calendar">
                             <span class="glyphicon glyphicon-comment"></span> | 
                            <?php 
                             
                             $numOfcomment = DB::table('comments')
                                 ->where('post_id',$r->id)
                                 ->count();
                                 $numOflike = DB::table('likes')
                                 ->where('post_id',$r->id)
                                 ->count();    
                            ?>
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark"></i> Likes</a> |
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> | <span style="font-family: 'Alegreya Sans SC';">{{$hours}} hr {{$minutes}} min ago</span>
                        </div>
                        @else
                        <div class="col-md-10 mx-auto post-header-line">
                            <span class="glyphicon glyphicon-user" style="font-family: 'Alegreya Sans SC';"></span>By 
                            @if(Session::get('lcheck') == $r->member_id)
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> you</b></a>
                            @else
                            <a href="{{URL::to('/get-member/'.$r->member_id)}}" style="font-family: 'Sofia';"><b> {{ $r->member_name}}</b></a> 
                            @endif 
                            
                            | <span class="glyphicon glyphicon-calendar">
                            <span class="glyphicon glyphicon-comment"></span> | 
                            <?php 
                              $numOfcomment = DB::table('comments')
                              ->where('post_id',$r->id)
                              ->count();
                             $numOflike = DB::table('likes')
                                 ->where('post_id',$r->id)
                                 ->count();    
                            ?>
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOflike}} <i class="fa fa-thumbs-up text-dark"></i> Likes</a> |
                            <a href="#" style="font-family: 'Alegreya Sans SC';">{{$numOfcomment}} <i class="fas fa-comments"></i> Comments</a> | <span style="font-family: 'Alegreya Sans SC';"> {{$minutes}} min ago</span>
                        </div>
                        @endif
                    </div>
                    <div class="row post-content">
                        <div class="col-md-6 mx-auto text-center">
                            <a href="#">
                                <img src="{{URL::to($r->post_image)}}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="row post-content">
                        <div class="col-md-10 mx-auto">
                            <p class="text-justify" style="font-family: 'Advent Pro';">
                            {{substr($r->description, 0,  350)}}
                            </p>
                            <p>
                                <a class="btn-lg btn-secondary" href="{{URL::to('/read-more',$r->id)}}">Read more</a></p>
                                <?php  $p_id = $r->id;
                                        $m_id = Session::get('lcheck');
                                    $lk =   DB::table('likes')->where('post_id',$p_id)
                                         ->where('member_id',$m_id)
                                         ->count();
                                
                                
                                ?>
                                @if($lk == 0 )
                                <p><a class="fa fa-thumbs-o-up" href="{{URL::to('/like',$p_id)}}" >like</a></p> 
                                @else
                                <p><a class="fa fa-thumbs-o-up text-info" href="{{URL::to('/unlike',$p_id)}}" >like</a></p> 
                                @endif
                            <p><a  class="fa fa-comment-o" href="#"><span style="margin-left:2px;">comment</span></a></p>  
                            <div class="col-md-6">
                                    <form action="{{url('/save-comment',$r->id )}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="control-group">
                                            <div class="controls mb-3">
                                                <textarea class="form-control textarea-autosize" name="comment" required=" " placeholder="Write your comment" id="autoresizing" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info float-right">
                                                    Add comment
                                        </button>
                                    </form>
                            </div>
                            <input type="hidden" id="member" value="{{Session::get('lcheck')}}">
                            <input type="hidden" id="post" value="{{$r->id}}">
                            <!-- <span style="margin-left:2px;">like</span> -->
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
<script>
     $(document).ready(function(){
            $('#like').click(function(){

                var m_id = $('#member').val();
                var p_id = $('#post').val();

        
                    $.ajax({
                        url: 'like',
                        type: 'post',
                        data: { m_id: m_id,
                            p_id=p_id },
                        success: function(response)
                        {
                           
                          console.log(response);
                           
                         
                        }
                    });
            });
          
      
    }); 
    </script>
     <script type="text/javascript"> 
               
                var textarea = document.querySelector('#autoresizing');

                textarea.addEventListener('keydown', autosize);
                            
                function autosize(){
                var el = this;
                setTimeout(function(){
                    el.style.cssText = 'height:auto; padding:2';
                    el.style.cssText = 'height:' + el.scrollHeight + 'px';
                },0);
                }
    </script> 
<?php 
       $res = DB::table('tbl_advertisement')
              ->inRandomOrder()
              ->limit(1)
              ->get();
    
    ?>
     <!-- <div class="d-block fixed-bottom  text-right"> -->
     <div class="display-inline fixed-bottom text-white text-right" id="ad">
            <button type="button" class="close" id="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                           @foreach($res as $r)
                           <a href="#" class="d-inline mb-4 h-100">
								<img class="img-fluid img-thumbnail" style="width:200px;height:200px;"
									src="{{URL::to($r->advertisement_image)}}" alt="image">
							</a>
                            @endforeach
     </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
        
	  $(document).ready(function(){

					$("#close").click(function(){
	    	        $("#ad").hide();
					});

			});
        
    </script>