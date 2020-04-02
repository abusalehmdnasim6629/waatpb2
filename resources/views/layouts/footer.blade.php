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
                    </ul>
                </div>
                <div class="footer-widget-box">
                    <h4 class="foo-widget-title">Recent Post</h4>
                    <div class="recent-post">
                        <div class="re-post-single">
                            <div class="re-post-img">
                                <img src="assets/img/footer/blog-thumb-1.png" alt="thumb">
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
                                    <img src="assets/img/footer/blog-thumb-2.png" alt="thumb">
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
            <div class="copyright text-center">
                <p>All rights reserved by Rapples.Copyright © 2020.</p>
            </div>
        </div>
    </div>

</footer>