<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> WAATPB </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bsnav.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/site-animation.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
    <style>
     .bg-area {
            height: 800px;
        }

        .bg-area::before {
            position: absolute;
            content: '';
            top: 0;
            RIGHT: 0;
            height: 100%;
            width: 75%;
            background-color: #404040;
            z-index: -2;
        }

        .bg-area::after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 35%;
            background-color: #6b7c72;
            z-index: -2;
        }

        .member-image {
            height: 565px;
            width: 100%;
            margin-top: 80px;
        }

        .member-text-area {
            position: absolute;
            top: 0;
            left: 0;

        }
        .cl{
            margin-left:5%;
            background-color:#f3f3f3;
            border-radius:8px;
            margin-top:20px;
            margin-bottom:20px;
        }
        .cl2{
            padding:10px;
            background-color:#e4e4e4;
        }
        .cl p{
            font-size:30px;
        }
        .cl p span{
            font-size:23px;
        }
        .pay a{
            height:50px;
            font-size:20px;
            padding:7px;
            font-weight:bold;
        }
    
       .or a{
        font-size:20px;
            padding:7px;
            font-weight:bold;
       }
       .bkash{
           height:80px;
           width:120px;
           box-shadow:0 2px 5px rgb(0,0,153);
           border-radius:10px;
           background:white;
           margin-top:10px;
       }
       .bkash:hover{
           cursor:pointer;
       }
    </style>
    
</head>

<body>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    
    <div class="se-pre-con"></div>
    
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    
@include('layouts.topbar')

<div class="clearfix"></div>
<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
<div class="site-breadcrumb-title" style="background: url(image/mango.jpg)">
	<h2  style="font-family: 'Alegreya SC';"><i  class="fas fa-cart-plus"></i> Bunon Basket</h2>
	<div class="main-breadcrumb">
		
	</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 max-auto">
        </div>
    </div>
</div>  

<div class="container">
    <div class="row">
        <div class="col-sm-12 mx-auto">
           <div class="row">
              <div class="col-sm cl">
               <p class="mt-3">Mango Order</p>
               <form action="{{url('/order')}}"method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            
                        </div>
                        <div class="form-group">
                            <label for="mntype">Mango Type</label>
                                @php
                                  $type =  DB::table('mangotype')
                                       ->get();
                                @endphp
                                <select class="form-control"  name="type" id="mntype" >
                                <option value="">Select..</option>
                                @foreach($type as $t)
                                <option value="{{$t->name}}">{{$t->name}}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Measurement</label>
                                @php
                                  $mes =  DB::table('ordermeasure')
                                       ->get();
                                @endphp
                                <select class="form-control" name="measurement" id="mes">
                                <option value="">Select..</option>
                                @foreach($mes as $m)
                                <option value="{{$m->value}}">{{$m->value}}</option>
                                @endforeach

                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">City</label>
                                @php
                                  $city=DB::table('delivarycity')
                                          ->get();
                                @endphp
                                <select class="form-control" id="city" name="city">
                                <option>Select..</option>
                                @foreach($city as $c)
                                <option value="{{$c->city}}">{{$c->city}}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea name="" id="address"name="address" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                       
                </form>

                
              </div>
            
              <div class="col-sm">
                    <div class="col-sm-12 cl">
                        <div class="row">
                            <p class="col-sm mt-3">Conformation</p>
                            
                                <div class="col-sm-12 mx-auto cl2">                            
                                    <table align="center" class="col-sm">
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><span id="nm"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td><span id="ph"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><span id="em"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td><span id="ad"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Mango Type</td>
                                            <td>:</td>
                                            <td><span id="mnt"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Measument</td>
                                            <td>:</td>
                                            <td><span id="me"></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Unit Price</td>
                                            <td>:</td>
                                            <td><span id="ppu"></span> BDT</td>
                                        </tr>
                                        <tr>
                                            <td>Total Price</td>
                                            <td>:</td>
                                            <td><span id="mesu"></span> x <span id="pr"></span> = <span id="total"></span></td>
                                        </tr>
                                        <tr>
                                        @php
                                        $cost=DB::table('delivarycost')
                                                ->first();
                                        @endphp
                                            <td>Delivery Cost</td>
                                            <td>:</td>
                                            <td><span id="cost">{{$cost->cost}}</span> BDT</td>
                                        </tr>
                                        <tr>
                                            <td>Grand Total Price</td>
                                            <td>:</td>
                                            <td><span id="gtp"></span></td>
                                        </tr>

                                    </table>
                                </div>
                        
                            <p class="col-sm-12 mt-5">Payment Information: <span>Select method</span></p>
                            <br>
                            <div class="col-sm-12 mb-5 pay text-center">
                           
                            <a><img src="{{asset('cash.png')}}" id="cash" class="bkash" data-toggle="cash" title="Cash on Delivery"></a>
                            <a><img src="{{asset('bkash.png')}}" id="bkash"class="bkash" data-toggle="bkash" title="Pay by bkash"></a>
                            <a><img src="{{asset('rocket.png')}}"id="rocket" class="bkash" data-toggle="rocket" title="Pay by rocket"></a>
                            
                            </div>
                            <div class="col-sm-12 mb-5 or" id="or">
                            <label for=""><span id="agent"></span> <span id="nam"></span></label>
                            <label for=""><span id="method"></label>
                            <input type="text" class="form-control" name="number" id="number" aria-describedby="emailHelp" placeholder="Enter your number">
                            <br>
                            <input type="text" class="form-control" name="txid" id="txid" aria-describedby="emailHelp" placeholder="Enter your transaction id">   
                            </div>

                            
                            
                            <div class="col-sm-12 mb-5 text-center or">
                            <a  type="submit" id="order" class="col-sm-12 btn btn-primary mx-auto text-center">Order</a>
                            </div>

                            
                        </div>
                        
                </div>
                </div> 

           </div>
        </div>
    </div>
</div>  


    @include('layouts.footer')





    


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
        <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/login-check')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required="">
                        </div>

                        
                        <a href="{{URL::to('/forgot-password')}}" class="btn btn-link">Forgot password?</a>
                        
                    </fieldset>

               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
    

   

    <script src=" {{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src=" {{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/js/popper.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.appear.js')}}"></script>
    <script src=" {{asset('assets/js/html5/html5shiv.min.js')}}"></script>
    <script src=" {{asset('assets/js/html5/respond.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src=" {{asset('assets/js/progress-bar.min.js')}}"></script>
    <script src=" {{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src=" {{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src=" {{asset('assets/js/wow.min.js')}}"></script>
    <script src=" {{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/count-to.js')}}"></script>
    <script src=" {{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src=" {{asset('assets/js/swiper.min.js')}}"></script>
    <script src=" {{asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src=" {{asset('assets/js/slick.min.js')}}"></script>
    <script src=" {{asset('assets/js/bsnav.min.js')}}"></script>
    <script src=" {{asset('assets/js/filter.js')}}"></script>
    <script src=" {{asset('assets/js/main.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.countdown.js')}}"></script>
 
    <script type="text/javascript">
        
        $(document).ready(function(){
                    $("#name").keyup(function(){
                        var name = $("#name").val();
                         $("#nm").text(name);
                        
                    });

                    $("#phone").keyup(function(){
                        var name = $("#phone").val();
                         $("#ph").text(name);
                        
                    });
                    $("#email").keyup(function(){
                        var name = $("#email").val();
                         $("#em").text(name);
                        
                    });
                    $("#address").keyup(function(){
                        var name = $("#address").val();
                         $("#ad").text(name);
                        
                    });
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#mntype').on('change',function(){

                        var mango_type = $("#mntype option:selected").text();
                        $("#mnt").text(mango_type);


                        $.ajax({
                        type:'get',
                        url:"{{ url('/price') }}",
                        data:{mango_type:mango_type
                           },
                        success:function(data){
                            console.log(data);
                            $("#ppu").text(data);
                            $("#pr").text(data);

                                
                        },
                        error:function (error) {
                                   
                         }
                        });
  
                    });

                       
                    $('#mes').on('change',function(){
                        
                        var measurement = $("#mes option:selected").text();
                        $("#me").text(measurement);
                        var price = $("#ppu").text();
                        var cost = $("#cost").text();
                        var total = parseInt(measurement)*parseInt(price);
                        var gtp = total+parseInt(cost);
                        $("#mesu").text(measurement);
                        $("#total").text(total);
                        $("#gtp").text(gtp);
                        
                    });
                    $("#or").hide();
                    $("#bkash").click(function(){
                        $("#agent").text("Bkash Number(Agent) : ");
                        $("#method").text("bkash");
                        $("#method").hide();
                        $("#nam").text("017xxxxxxxx");
                        $("#or").toggle(1000);

                        
                    });
                    $("#rocket").click(function(){
                        $("#agent").text("Rocket Number(Agent) : ");
                        $("#method").text("rocket");
                        $("#method").hide();
                        $("#nam").text("017xxxxxxxx");
                        $("#or").toggle(1000);

                    });
                    $("#cash").click(function(){
                        $("#agent").text("Cash on delivery");
                        $("#method").text("cash on");
                        $("#method").hide();
                        $("#number").hide();
                        $("#txid").hide();
                        $("#nam").text("");
                        $("#or").toggle(1000);

                    });

                    $('[data-toggle="cash"]').tooltip();
                    $('[data-toggle="bkash"]').tooltip(); 
                    $('[data-toggle="rocket"]').tooltip(); 
                    
                    
        });
        </script>	
        
        <script>
         $(function() {
        			var endDate = $('.event-countdown').data('date');
        			
        		
        
        			$('.event-countdown').countdown({
        			date: endDate,
        			render: function(data) {
        				$(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
        			}
        			});
        		 });




     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $("#order").click(function(e){
  
        e.preventDefault();
   
        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var type = $("#mnt").text();
        var measurement = $("#mes").val();
        var address = $("#address").val();
        var city = $("#city").val();
        var method = $("#method").text();
        if(method == 'cash on'){
            var number = 'N/A';
            var txid = 'N/A';
        }else{
            var number = $("#number").val();
            var txid = $("#txid").val();
        }
        

       
       
   
        $.ajax({
           type:'get',
           url:"{{ url('/order') }}",
           data:{name:name,
            phone:phone,
            email:email,
            type:type,
            measurement:measurement,
            address:address,
            city:city,
            method:method,
            number:number,
            txid:txid},
           success:function(data){
              console.log(data);
              
                if (data) {
                    $("#name").val("");
                    $("#phone").val("");
                    $("#email").val("");
                    
                    $("#address").val("");
                    $("#city").val("");

                    $("#nm").text("");
                    $("#ph").text("");
                    $("#em").text("");
                    $("#mnt").text("");
                    $("#mes").text("");
                    $("#ad").text("");
                    $("#gtp").text("");
                    $("#method").text("");
                    $("#number").val("");
                    $("#txid").val("");
                    alert("Order completed");
                }
           },
           error:function (error) {
                    $("#name").val("");
                    $("#phone").val("");
                    $("#email").val("");
                    
                    $("#address").val("");
                    $("#city").val("");

                    $("#nm").text("");
                    $("#ph").text("");
                    $("#em").text("");
                    
                    
                    $("#ad").text("");
                   
                    $("#gtp").text("");
                alert("Error !! please fill the all sections");
            }
        });
  
	});
                 
        </script>
</body>

</html>






