<style type="text/css">
    .hm {
        display: table-column;
        text-align: center;
    }
    /* Style for vertical phone list */
    .phone-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .phone-list li {
        margin-bottom: 8px; /* Space between numbers */
    }
    .phone-list li:last-child {
        margin-bottom: 0; /* Remove margin from last item */
    }
    .phone-list a {
        color: inherit; /* Inherit text color */
        text-decoration: none; /* Remove underline */
        display: block; /* Make link block-level for better click area */
        transition: color 0.2s ease; /* Smooth color transition */
    }
    .phone-list a:hover {
        color: #156e68; /* Change color on hover (adjust to your theme) */
        text-decoration: underline; /* Underline on hover */
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
                    {{-- <ul class="footer-social md-mb-30">
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
                    </ul> --}}
                    <ul class="address-widget">
                        <!-- Modified Phone Numbers Section -->
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <!-- Loop through phone numbers from .env -->
                                @php
                                    $phoneNumbers = explode(',', env('SITEPHONE'));
                                @endphp
                                @if(count($phoneNumbers) > 1)
                                    <!-- Display multiple numbers vertically -->
                                    <ul class="phone-list">
                                        @foreach($phoneNumbers as $phoneNumber)
                                            <li>
                                                <a href="tel:{{ str_replace(['+', ' ', '-', '(', ')'], ['', '', '', '', ''], trim($phoneNumber)) }}">
                                                    {{ trim($phoneNumber) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <!-- Display single number (fallback) -->
                                    <a href="tel:{{ str_replace(['+', ' ', '-', '(', ')'], ['', '', '', '', ''], trim($phoneNumbers[0])) }}">
                                        {{ trim($phoneNumbers[0]) }}
                                    </a>
                                @endif
                            </div>
                        </li>
                        <!-- End Modified Phone Numbers Section -->
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
                         <li><a href="{{route('service','environmental-impacts-assessment')}}">Environmental Impacts Assessment (EIA) Studies</a></li>
                         <li><a href="{{route('service','environmental-monitoring')}}">Environmental Monitoring</a></li>
                         <li><a href="{{route('service','environmental-audits')}}">Environmental Audits</a></li>
                         <li><a href="{{route('service','fc-wc')}}">Forest Clearance (FC), Wildlife Clearance (WC)</a></li>
                         <li><a href="{{route('service','six-monthly-compliance-report-preparation-for-ec-conditions')}}">Six Monthly Compliance Report Preparation For EC Conditions</a></li>
                         <li><a href="{{route('service','carbon-foot-print-&-climate-change-studies')}}">Carbon Foot Print & Climate Change Studies</a></li>
                         <li><a href="{{route('service','socio-economic-impact-assessment')}}">Socio-Economic Impact Assessment</a></li>
                         <li><a href="{{route('service','design-&-engineering-for-tech')}}">Design & Engineering for Tech MBBR, SBR, ASP, MBR, etc (STP, ETP & CPU etc)</a></li>
                         <li><a href="{{route('service','annual-environmental-statement')}}">Annual Environmental Statement (Form-V)</a></li>
                    </ul>
                    <hr>
                    <h3 class="widget-title">Quick Links</h3>
                    <ul class="site-map">
                        <li><a target="__blank" href="{{ asset('assets/quality-policy.pdf') }}">Quality Policy</a></li>                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Sectors as per QCI/NABET</h3>
                    <ul class="site-map">
                        <li><a href="{{route('sse','mining-of-minerals')}}">Mining of Minerals</a></li>
                        <li><a href="{{route('sse','thermal-power-plant')}}">Thermal Power Plant</a></li>
                        <li><a href="{{route('sse','coal-washeries')}}">Coal Washeries</a></li>
                        <li><a href="{{route('sse','mineral-benefication')}}">Mineral Benefication</a></li>
                        <li><a href="{{route('sse','metallurgical-industries')}}">Metallurgical Industries</a></li>
                        <li><a href="{{route('sse','cement-plants')}}">Cement Plants</a></li>
                        <li><a href="{{route('sse','building-&-construction-projects')}}">Building & Construction Projects</a></li>
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