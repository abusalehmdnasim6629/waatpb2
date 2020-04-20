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
                        
                        <li>
                        <form action="{{url('/search')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="text" name="search"  placeholder="Search member">
                        <button type="submit" class="btn btn-primary mt-2" id="search">search</button>
                        <!-- <a href="" class="btn btn-success mt-2" id="search">search</a> -->
                        </form>
                        </li>
                        <!-- data-toggle="modal" data-target="#mymodal" 
                         data-toggle="modal" data-target="#mymodal"-->
                    </ul>
                </div>
                <div class="footer-widget-box">
                    <h4 class="foo-widget-title">Recent Post</h4>
                    <div class="recent-post">
                        <div class="re-post-single">
                            <div class="re-post-img">
                                <img src="{{asset('assets/img/footer/blog-thumb-1.png')}}" alt="thumb">
                            </div>
                            <div class="re-post-desc">
                                <a href="single.html">
                                    <h6>Windows talking</h6>
                                </a>
                                <p>By:athuor <span>14/12/2019</span></p>
                            </div>
                        </div>
                        <div class="re-post-single">
                            <a href="single.html">
                                <div class="re-post-img">
                                    <img src="{{asset('assets/img/footer/blog-thumb-2.png')}}" alt="thumb">
                                </div>
                                <div class="re-post-desc">
                                    <a href="single.html">
                                        <h6>perhaps expense</h6>
                                    </a>
                                    <p>By:athuor <span>18/12/2019</span></p>
                                </div>
                            </a>
                        </div>
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
                    
                        <h4 style=" color:#55acee; ">WELFARE ASSOCIATION OF APPAREL AND TEXTILE PROFESSIONALS OF BANGLADESH</h4>
                        
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
                           <td style=" color:white;"><a href="www.waatpb.com" style="color:#889747;">www.waatpb.com</a></td>
                           </tr>
                        </table>
                        <br>

                        <p style="color:white; padding:5px;margin-bottom:20px; position:relative;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                       
                        </p>
                        <br>
                        <a href="www.waatpb.com"style="color:#889747;">www.waatpb.com</a></td>
                    
                    </div>
                    <div class="col-sm-8" style="background-color: #404040;position :relative;">
                        <!-- <div class="col-md-5 offset-md-4 member-image">
                            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                alt="image" class="w-100">
                        </div> -->
                        <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                alt="image" class="w-100">
                        <p style="color:white; padding:5px;margin-bottom:20px; ">
                            
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>    
                    </div>
                   
                </div>
          </div>
        </div>
       
          <div class="modal-footer">
            <a href="" class="btn btn-danger" data-dismiss="modal">close</a>
             <a  value="close">
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

    }); 
    </script>