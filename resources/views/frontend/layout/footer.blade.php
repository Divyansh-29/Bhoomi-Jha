<style type="text/css">
    .hm {
        display: table-column;
        text-align: center;
    }
</style>
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-social mb-20 md-mb-30">
                        <a href="#"><img src="{{ asset('assets/images/logo1.png')}}" alt="" width="100"></a>
                    </div>
                    <div class="textwidget white-color pb-30">
                        <p>We Believe in making the world a better place to live. All our efforts are towards helping
                            create a sustainable environment.
                            However, this depends on YOU too. Let us know how we can work together towards this noble
                            cause. We are eager to hear back from YOU</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>
                    </ul>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel: +91 120-4540584"> +91 120-4540584</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{env('SITEEMAIL')}}"><span class="__cf_email__">{{env('SITEEMAIL')}}</span></a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 10:00 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">Services</h3>
                    <ul class="site-map">
                        <li><a href="{{ route('service','environmental-clearence') }}">Environmental Clearance & EIA Studies</a></li>
                        <li><a href="{{ route('service','ground-water-clearence') }}">Ground Water Clearance</a></li>
                        <li><a href="{{ route('service','consent-to-establish-and-operate') }}">Consent to Establish And Operate</a></li>
                        <li><a href="{{ route('service','periodic-compliance-audits') }}">Periodic Compliance Audits</a></li>
                        <li><a href="{{ route('service','green-building-cetification') }}">Green Building Certification</a></li>
                        <!-- <li><a href="#">Risk Assessment Studies</a></li> -->
                        <li><a href="{{ route('service','design-services') }}">Design Services</a></li>
                        <li><a href="{{ route('service','operations-and-maintenance') }}">Operations & Maintenance</a></li>
                    </ul>
                    <hr>
                    <h3 class="widget-title">Quick Links</h3>
                    <ul class="site-map">
                        <li><a target="__blank" href="{{ asset('assets/privacy_policy.pdf') }}">Privacy Policy</a></li>                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Solutions</h3>
                    <ul class="site-map">
                        <li><a href="{{ route('solutions', 'sewage-treatment-plant') }}">Sewage Treatment Plants</a></li>
                        <li><a href="{{ route('solutions', 'effluent-treatment-plant') }}">Effluent Treatment Plants</a></li>
                        <li><a href="{{ route('solutions', 'water-management') }}">Water Treatment Plants</a></li>
                        <li><a href="{{ route('solutions', 'solid-waste-management') }}">Solid Waste Management</a></li>                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{env('SITEADDRESS')}}</div>
                        </li>                        
                    </ul>                    
                </div>                              
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <!-- <ul class="copy-right-menu">
                            <li><a href="Web%20Development.html">Home</a></li>
                            <li><a href="Web%20Development.html">About</a></li>
                            <li><a href="Web%20Development.html">Blog</a></li>
                            <li><a href="Web%20Development.html">Shop</a></li>
                            <li><a href="Web%20Development.html">FAQs</a></li>
                        </ul> -->
                </div>
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>&copy; 2025 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->
<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>