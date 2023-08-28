
    <!--Footer Start-->
    <footer class="main-footer">
        <div class="footer-overlay-bg animate-this">
            <img src="assets/images/footer-overlay.png" alt="Overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-one">
                        <a href="index-2.html">
                            <img src="assets/images/logo.png" alt="Fithub">
                        </a>
                        <p>Etiam suscipit fringilla ullamcorper sed malesuada urna nec odio.</p>
                        <div class="footer-time">
                            <img src="assets/images/clock-2.png" alt="Clock">
                            <div class="footer-time-text-box">
                                <div class="footer-time-text">
                                    <span>Monday - Friday</span>
                                    <span>7:00Am - 10:00Pm</span>
                                </div>
                                <div class="footer-time-text mt-3">
                                    <span>Saturday - Sunday</span>
                                    <span>7:00Am - 2:00Pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-two">
                        <h3 class="h3-title">Our Links</h3>
                        <div class="line"></div>
                        <ul>
                        <?php foreach($navLinks as $i): ?>
                            <li><a href="./<?php echo $i['url'] ?>"><?php echo $i['title'] ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-three">
                        <h3 class="h3-title">Contact Us</h3>
                        <div class="line"></div>
                        <ul>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>1800-121-3637</span>
                                    <span>+91 555 234-8765</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>info@gmail.com</span>
                                    <span>services@gmail.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-four">
                        <h3 class="h3-title">Our Newsletter</h3>
                        <div class="line"></div>
                        <div class="footer-subscribe-form">
                            <input type="email" name="email" class="form-input subscribe-input" placeholder="Email Address" required="">
                            <button type="submit" class="sec-btn"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--Back To Top Start-->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 280.807;"></path>
        </svg>
     </div>
    <!--BAck To Top End-->

    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
           <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
        </button>
        <div class="modal-dialog" role="document">
           <div class="modal-content">
              <form>
                    <input type="text" placeholder="Search here...">
                    <button>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
              </form>
           </div>
        </div>
     </div>
     <!-- modal-search-end -->
    
<!-- Jquery JS Link -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap JS Link -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!-- Custom JS Link -->
<script src="assets/js/custom.js"></script>

<!-- Slick Slider JS Link -->
<script src="assets/js/slick.min.js"></script>

<!-- Wow Animation JS -->
<script src="assets/js/wow.min.js"></script>

<!--Bg Moving Js-->
<script src="assets/js/bg-moving.js"></script>

<!--Magnific Popup JS-->
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/custom-magnific-popup.js"></script>

<!--Progress Bar JS-->
<script src="assets/js/custom-progress-bar.js"></script>

<!--Scroll Count JS-->
<script src="assets/js/custom-scroll-count.js"></script>

<!--BAck To Top JS-->
<script src="assets/js/back-to-top.js"></script>

</body>
</html>