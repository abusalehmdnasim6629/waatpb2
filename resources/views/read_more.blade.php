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



<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->
<div class="container ">
    <div class="row">
        <div class="col-md-12">
        
         
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
                            <h4  >
                                <a href="#" class="post-title text-dark" style="font-family: 'Alegreya SC';">{{$r->title}}</a>
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
                            {{$r->description}}
                            </p>
                            <p>
                                
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
                            <p>
                            <a  class="fa fa-comment-o" href="#"><span style="margin-left:2px;">comment</span></a></p>  
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

                            <?php
                             $com = DB::table('comments')
                                 ->join('tbl_member','comments.member_id','=','tbl_member.member_id')
                                 ->select('comments.*','tbl_member.member_name')
                                 ->where('post_id',$r->id)
                                 ->orderBy('created_at','desc')
                                 ->get();
                            ?>
                            
                        </div>
                     
                    
                        @if(Session::get('lcheck') != $r->member_id)
                           <div class="col-sm-10 mx-auto">
                                <h6 class="col-sm fa fa-comments"> All Comments:</h6>
                                <hr>
                                @foreach($com as $c)
                                 @if(Session::get('lcheck') == $c->member_id)
                                    
                                    <div class="col-sm">
                                        <label for=""><a href="{{URL::to('/get-member/'.$c->member_id)}}"><strong>{{$c->member_name}}</strong></a></label><br>
                                        
                                        
                                        <div class="col-sm   text-sm-right"> 
                                            <a href="{{URL::to('/delete-comment/'.$c->id)}}"class="btn btn-link text-danger">
                                            <i class="fas fa-remove"></i>
                                            Delete</a>
                                        </div>
                                        <div class="col-sm">
                                        <p class="fa fa-comment text-justify"> {{$c->comment}}</p>                        
                                        </div>
                                        
                                    </div>
                                    
                                  @else
                                    <div class="col-sm-8">
                                            <label for=""><a href="{{URL::to('/get-member/'.$c->member_id)}}"><strong>{{$c->member_name}}</strong></a></label><br>
                                            <div class="col-sm-8">
                                            <p class="fa fa-comment text-justify"> {{$c->comment}}</p>                        
                                            </div>
                                    </div>
                                   @endif 

                                <hr>
                                @endforeach
                       
                        @else  
                       
                       
                        <div class="col-sm-10 mx-auto">
                                <h6 class="col-sm fa fa-comments"> All Comments:</h6>
                                <hr>
                                @foreach($com as $c)
                                <div class="col-sm">
                                        <label for=""><a href="{{URL::to('/get-member/'.$c->member_id)}}"><strong>{{$c->member_name}}</strong></a></label><br>
                                        
                                        
                                        <div class="col-sm   text-sm-right"> 
                                            <a href="{{URL::to('/delete-comment/'.$c->id)}}"class="btn btn-link text-danger">
                                            <i class="fas fa-remove"></i>
                                            Delete</a>
                                        </div>
                                        <div class="col-sm">
                                        <p class="fa fa-comment text-justify"> {{$c->comment}}</p>                        
                                        </div>
                                        
                                    </div>
                                <hr>
                                @endforeach
                        </div> 
                        @endif  
                       
                    </div>
                </div>
            </div>
           
           
          
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

@endsection