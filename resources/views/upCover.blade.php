
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.css" integrity="sha256-M8o9uqnAVROBWo3/2ZHSIJG+ZHbaQdpljJLLvdpeKcI=" crossorigin="anonymous" />
 <?php
 
    $pro = Session::get('profile');
    
 ?>
      
          <div class="container" style="padding:10px;background-color:#f5f5f5;">
<div class="row pd-2">
		<div class="col-sm-8 mx-auto " style="margin-top:2%;">  
		    
			@if($pro->cover_image)
		    <img src="{{$pro->cover_image}}" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
	        @else
			<img src="https://via.placeholder.com/150" style="width:100%;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"  class="position-relative"
				alt="avatar">
			@endif	
			@if($pro->image != null)
			<img src="{{$pro->image}}" style="z-index-1;Left:4%;bottom:0;border:3px solid white;" class=" img-fluid img-responsive w-10  rounded-circle position-absolute "
				alt="avatar">
			@else
			<img src="{{asset('1589365930.png')}}" style="z-index-1;Left:4%;bottom:0;border:3px solid white;" class=" img-fluid img-responsive w-10  rounded-circle position-absolute "
				alt="avatar">
			@endif	
			
				
			
		</div>
	</div>
  @if ($errors->any())
			<div class="alert alert-danger">
						<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
						</ul>
			</div>
  @endif
      <div class="row">
      <div class="col-sm-8 mx-auto">
      <form action="{{url('/cover-upload')}}" method="POST" enctype="multipart/form-data">
					@csrf
       <div class="form-group my-5">
       <label for="">Select cover image:</label>
       <input type="file" class="form-control-file" name="upload_image" id="upload_image"  accept="image/*" />
       </div>
       
       <input type="hidden" name="uploaded_image" id="uploadd_image" accept="image/*" />
     
       <div class="form-group">
       <button type="submit" class="btn btn-sm btn-success">Change</button>
       </div>
       </form>
       <div id="uploaded_image"></div>
       </div>
       </div>
    </div>
 
  

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='https://foliotek.github.io/Croppie/croppie.js'></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js" integrity="sha256-u/CKfMqwJ0rXjD4EuR5J8VltmQMJ6X/UQYCFA4H9Wpk=" crossorigin="anonymous"></script>


