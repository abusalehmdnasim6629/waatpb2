@extends('layouts.webview')

@section('content')
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
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

<div class="container">
   <div class="row">
      <div class="col-md-12">
       
       <div class="col-md-8 mx-auto">
         <h5 class="my-3 text-center">Edit post</h5>
         <form action="{{url('/update-post',$result->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
           <div class="control-group">
                <input type="text" class="form-control mb-2 mt-5" name="title" placeholder="Enter title" style="border-radius:5px" value="{{$result->title}}">
                <div class="controls mb-3">
                    <textarea class="form-control " id="autoresizing" name="s_post" required="" row="4" placeholder="Write post "  style="border-radius:5px">
                    {{$result->description}}
                    </textarea>
                </div>
                <!-- <input type="file" class="form-control-file mb-2 mt-5" name="image" placeholder="Enter title"> -->
                <div class="file-field">
                    <div class="btn btn-info btn-sm float-left">
                    <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                <img src="{{URL::to($result->post_image)}}" alt="" class="image-responsive h-200 w-200 my-3">
            </div>

            <button type="submit" class="btn-lg btn-primary float-right mb-2">
						Update post
		    </button>
          </form>
       </div>
      
       </div>  
   </div>
</div>


<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->

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