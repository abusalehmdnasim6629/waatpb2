<div class="clearfix"></div>

<!-- Start Footer
	============================================= -->
<footer>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wrapper grid-4 de-pt">
                <div class="footer-widget-box">
                    <h4 class="foo-widget-title">Community</h4>
                    <ul class="foo-list">
                        <li><a href="#">Leadership</a></li>
                        <li><a href="#">Strategy</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Features</a></li>
                    </ul>
                </div>
                <div class="footer-widget-box">
                    <h4 class="foo-widget-title">useful links</h4>
                    <ul class="foo-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">works</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        
                        <!-- <li>
                        <form action="{{url('/search')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" name="search"  placeholder="Search member">
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-primary mt-2" id="search">
                                    <i class="fa fa-search"></i>
                                    search
                                </button>
                                </div>
                            </div>
                       
                        </form>
                        </li> -->
                        <li>
                        <form action="{{url('/search')}}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                           <div class="input-group">
                        
                                <input type="text" class="form-control" style="height:40px;" placeholder="Search member" id="demo" name="search">
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-primary " id="search">
                                    <i class="fa fa-search"></i>
                                    
                                </button>
        
                            </div>
                            </div>
                        </form>
                        </li>
                        <!-- data-toggle="modal" data-target="#mymodal" 
                         data-toggle="modal" data-target="#mymodal"-->
                    </ul>
                </div>
                <?php
                   $result = DB::table('posts')
                           ->join('tbl_member','posts.member_id','=','tbl_member.member_id')
                           ->select('posts.*','tbl_member.member_name')
                           ->orderBy('date', 'desc')
                           ->limit(2)
                           ->get();
                ?>
                <div class="footer-widget-box">
                    <h4 class="foo-widget-title">Recent Post</h4>
                    <div class="recent-post">
                       @foreach($result as $r)
                        <div class="re-post-single">
                            <div class="re-post-img">
                               @if($r->post_image)
                            <img src="{{asset($r->post_image)}}" alt="thumb" width="80" height="70">
                               @endif 
                            </div>
                            <div class="re-post-desc">
                                <a href="single.html">
                                    <h6>{{$r->title}}</h6>
                                </a>
                                <p>By:{{$r->member_name}} <span>{{$r->date}}</span></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="footer-widget-box contact-us">
                    <h4 class="foo-widget-title">Contact us</h4>
                    <div class="contact-inputs">
                        <form method="post" action="{{route('contact.mail')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Name" required="">
                                        <span class="alert alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter Email" required="">
                                        <span class="alert alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control labelup" id="comments" name="comments" rows="5"
                                            placeholder="Type Message" required=""></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="theme-btn">
                                        contact
                                    </button>
                                    <!-- Alert Message -->
                                    <div class="alert-notification">
                                        <div id="message" class="alert-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="social-widget-footer text-center">
                <a href="#" class="fa fa-facebook facebook"></a>
                <a href="#" class="fa fa-twitter twitter"></a>
                <a href="#" class="fa fa-linkedin linkedin"></a>
                <a href="#" class="fa fa-youtube youtube"></a>
            </div>
            <div class="copyright text-center">
                <p>All rights reserved by Rapples.Copyright © 2020.</p>
            </div>
        </div>
    </div>

</footer>
<div class="modal fade" id="mymodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Profile</h5>
                <a href="" class="btn btn-danger" data-dismiss="modal">close</a>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" style="background-color:#6b7c72;">

                            <h4 style=" color:#55acee; ">WELFARE ASSOCIATION OF APPAREL AND TEXTILE PROFESSIONALS OF
                                BANGLADESH</h4>

                            <table style=" margin-left:10px; ">
                                <tr>
                                    <td style="color:white; " id="namemodal">Nasim</td>
                                </tr>
                                <tr>
                                    <td style=" color:white;">web developer</td>
                                </tr>
                                <tr>
                                    <td style="color:white; ">Rapples</td>
                                </tr>
                                <tr>
                                    <td style=" color:white;"><a href="www.waatpb.com"
                                            style="color:#889747;">www.waatpb.com</a></td>
                                </tr>
                            </table>
                            <br>

                            <p style="color:white; padding:5px;margin-bottom:20px; position:relative;">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum."

                            </p>
                            <br>
                            <a href="www.waatpb.com" style="color:#889747;">www.waatpb.com</a></td>

                        </div>
                        <div class="col-sm-8" style="background-color: #404040;position :relative;">
                            <!-- <div class="col-md-5 offset-md-4 member-image">
                            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                alt="image" class="w-100">
                        </div> -->
                            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                alt="image" class="w-100">
                            <p style="color:white; padding:5px;margin-bottom:20px; ">

                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum."
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="" class="btn btn-danger" data-dismiss="modal">close</a>
                <a value="close">
            </div>
        </div>
    </div>
</div>

<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

<script>
    $(document).ready(function(){
            $('#search').click(function(){
                var name = $('#srch').val()
                    $.ajax({
                        url: 'getmember/{txt}',
                        type: 'get',
                        data: { name: name },
                        success: function(response)
                        {
                          console.log(response);  
                          $('#mymodal').modal('show');
                        }
                    });
            });

            $('#search_content').keyup(function(){
                // memberSuggest
                $val = $(this).val();
                $('#show-suggest').html('');
                $.ajax({
                        url: `{{url('/')}}//member-suggest/${$val}`,
                        type: 'GET',
                        success: function(response)
                        {
                                for(var i = 0; i <= response.length ; i++){ 
                                    var output = '<li style="cursor:pointer" class="list-group-item mb-0 py-1 wa-member" onclick="showDetails('+response[i].member_id+')">'+response[i].member_name+'</li>';
                                    $('#show-suggest').html(output);
                                 }
                        }
                    });
            })

            
            

    }); 

    function showDetails(memberId){
                    $.ajax({
                        url: `{{url('/')}}/individual-member/${memberId}`,
                        type: 'GET',
                        success: function(response)
                        {   
                            console.log(response)
                            $('#mymodal').modal('show');
                        }
                     });
                
            }
</script>