<!--footer section start-->
<footer class="footer-wrap">
    <div class="footer footer-top section section-md bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a class="footer-brand mr-lg-5 d-flex 2x" href="{{URL::to('/')}}">
                        <img src="{{asset('storage/assets3/img/logo.png')}}" class="mr-3" alt="Footer logo">
                    </a>
                    <p class="my-4">Interactively unleash interactive best practices before technically sound portals.</p>
                    {{-- <div class="btn-wrapper mt-4">
                        <button class="btn btn-icon-only btn-pill btn-twitter mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                            <span aria-hidden="true" class="fab fa-twitter"></span>
                        </button>
                        <button class="btn btn-icon-only btn-pill btn-facebook mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                            <span aria-hidden="true" class="fab fa-facebook-f"></span>
                        </button>
                        <button class="btn btn-icon-only btn-pill btn-youtube mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                            <span aria-hidden="true" class="fab fa-youtube"></span>
                        </button>
                        <button class="btn btn-icon-only btn-pill btn-dribbble icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                            <span aria-hidden="true" class="fab fa-dribbble"></span>
                        </button>
                    </div> --}}
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="mb-4">Company</h5>
                    <ul class="links-vertical">
                        <li><a target="_blank" href="#">About Us</a></li>
                        <li><a target="_blank" href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="mb-4">Resources</h5>
                    <ul class="links-vertical">
                        <li><a target="_blank" href="#">Privacy Policy</a></li>
                        <li><a target="_blank" href="#">Terms of Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h5 class="mb-4">Support</h5>
                    <ul class="links-vertical">
                        <li><a target="_blank" href="tel:01XXX XXXXXX">01302-360474</a></li>
                        <li><a target="_blank" href="mailto:help@efabd.xyz">help@efabd.xyz</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer py-3 bg-primary text-white border-top border-variant-default">
        <div class="container">
            <div class="row">
                <div class="col p-3">
                    <div class="d-flex text-center justify-content-center align-items-center">
                        <p class="copyright pb-0 mb-0">Copyrights © {{date('Y')}}. All
                            rights reserved by
                            <a href="{{URL::to('/')}}" target="_blank">EFA</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->
<!--scroll bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-hand-point-up"></span>
</button>
<!--scroll bottom to top button end-->
<!--build:js-->
<script src="{{asset('storage/assets3/js/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/popper.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/mixitup.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/headroom.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/smooth-scroll.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/wow.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/jquery.waypoints.min.js')}}"></script>
<!--<script src="assets/js/vendors/countUp.min.js"></script>-->
<script src="{{asset('storage/assets3/js/vendors/jquery.countdown.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/vendors/validator.min.js')}}"></script>
<script src="{{asset('storage/assets3/js/app.js')}}"></script>
@stack('js')
<!--endbuild-->
</body>


<!-- Mirrored from corporx.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jun 2022 10:45:26 GMT -->
</html>