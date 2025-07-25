<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-3">
                        <div class="logo-part">
                            <a href="{{route('home')}}"><img src="{{asset('assets/images/logo1.png')}}" alt="" width="60px"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 text-right">
                        <ul class="rs-contact-info">
                            {{-- <li class="contact-part">
                                <i class="flaticon-location"></i>
                                <span class="contact-info">
                                    <span>Corporate Office</span>
                                    {{env('SITEADDRESS')}}
                                </span>
                            </li> --}}
                            <li class="contact-part">
                                <i class="flaticon-email"></i>
                                <span class="contact-info">
                                    <span>E-mail</span>
                                    {{-- <a href="#">info@aplinka.in, darpan@aplinka.in</span></a> --}}
                                    <a href="mailto:{{env('SITEEMAIL')}}">{{env('SITEEMAIL')}}</span></a>
                                </span>
                            </li>
                            <li class="contact-part no-border">
                                <i class="flaticon-call"></i>
                                <span class="contact-info">
                                    <span>Phone</span>
                                    +91 120-4540584
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="logo-area">
                    <a href="#">
                        <img class="sticky-logo" src="{{asset('assets/images/logo1.png')}}" alt="logo">
                    </a>
                </div>
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a href="index.html" class="mobile-logo">
                                <img src="{{asset('assets/images/logo1.png')}}" alt="logo">
                            </a>
                            <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">   
                            <ul class="nav-menu"><li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home nav-item menu-item-37 nav-item"><a href="{{route('home')}}">Home</a></li>
                                 <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-60 nav-item"><a href="{{route('about-us')}}">About Us</a></li>
                                 <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-60 nav-item"><a href="{{route('sse')}}">SSE (as per QCI/NABET Sectors)</a></li>
                                 <li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-54 nav-item"><a href="#">Services</a>
                                <ul class="menu-item-has-children">
                                    <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item"><a href="{{route('service','environmental-impacts-assessment')}}">Environmental Impacts Assessment (EIA) Studies</a></li>
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item"><a href="{{route('service','environmental-monitoring')}}">Environmental Monitoring</a></li>
                                    <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item"><a href="{{route('service','environmental-audits')}}">Environmental Audits</a></li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item"><a href="{{route('service','fc-wc')}}">Forest Clearance (FC), Wildlife Clearance (WC)</a></li>
                                    <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-43 nav-item"><a href="{{route('service','consent-to-estalish-and-operate')}}">Consent to Estalish and Operate (SPBs)</a></li>
                                    {{-- <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-40 nav-item"><a href="{{route('service','renewal-application')}}">CTE/CTO Renewal Application</a></li> --}}
                                    <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-47 nav-item"><a href="{{route('service','six-monthly-compliance-report-preparation-for-ec-conditions')}}">Six Monthly Compliance Report Preparation For EC Conditions</a></li>
                                    <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item"><a href="{{route('service','carbon-foot-print-&-climate-change-studies')}}">Carbon Foot Print & Climate Change Studies</a></li>
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item"><a href="{{route('service','socio-economic-impact-assessment')}}">Socio-Economic Impact Assessment</a></li>
                                    <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item"><a href="{{route('service','design-&-engineering-for-tech')}}">Design & Engineering for Tech MBBR, SBR, ASP, MBR, etc (STP, ETP & CPU etc)</a></li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item"><a href="{{route('service','annual-environmental-statement')}}">Annual Environmental Statement (Form-V)</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item"><a href="{{route('clientele')}}">Clientele</a></li>
                            <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item"><a href="{{route('career')}}">Careers</a></li>
                            <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item"><a href="{{route('contact-us')}}">Contact Us</a></li>
                        </ul>
                                {{-- <li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-55 nav-item"><a href="#">Solutions</a>
                                <ul class="menu-item-has-children">
                                    <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-51 nav-item"><a href="{{route('solutions', 'sewage-treatment-plant')}}">Sewage Treatment Plant</a></li>
                                    <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-41 nav-item"><a href="{{route('solutions', 'effluent-treatment-plant')}}">Effluent Treatment Plant</a></li>
                                    <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-53 nav-item"><a href="{{route('solutions', 'water-management')}}">Water Management</a></li>
                                    <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-52 nav-item"><a href="{{route('solutions', 'solid-waste-management')}}">Solid Waste Management</a></li>
                                    {{-- <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-49 nav-item"><a href="{{route('solutions', 'sewage-treatment-plant')}}">Rain Water Harvesting</a></li>
                                    <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-38 nav-item"><a href="{{route('solutions', 'sewage-treatment-plant')}}">Air Pollution Control</a></li>
                                    <li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-46 nav-item"><a href="{{route('solutions', 'sewage-treatment-plant')}}">Online Monitoring</a></li>
                                </ul>
                                </li>
                                <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-45 nav-item"><a href="#">Industries</a></li>
                                <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-60 nav-item"><a href="#">Company</a></li> --}}
                                {{-- <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item"><a href="{{route('feedback-us')}}">Feedback/Complaints</a></li> --}}
                            <!-- <ul class="nav-menu">
                            <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="environmental-clearance.php">Environmental Clearance & EIA Studies</a></li>
                                        <li><a href="cgwa-clearances.php">Ground Water Clearance</a></li>
                                        <li><a href="consent-establish-operate.php">Consent to Establish And Operate</a></li>
                                        <li><a href="periodic-compliance.php">Periodic Compliance Audits</a></li>
                                        <li><a href="green-building.php">Green Building Certification</a></li>
                                        <li><a href="design-services.php">Design Services</a></li>
                                        <li><a href="operations-maintenance.php">Operations & Maintenance</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Solutions</a>
                                    <ul class="sub-menu">
                                        <li><a href="sewage-treatment-plant.php">Sewage Treatment Plants  </a></li>
                                        <li><a href="effluent-treatment-plant.php"> Effluent Treatment Plants  </a></li>
                                            <li><a href="water-treatment.php">Water Treatment Plants  </a></li>
                                            <li><a href="solid-waste-management.php"> Solid Waste Management</a></li>
                                                <li><a href="rain-water-harvesting.php"> Rain Water Harvesting  </a></li>
                                                <li><a href="air-pollution.php"> Air Pollution Control  </a></li>
                                                    <li><a href="online-monitoring.html">Online Monitoring  </a></li>
                                    </ul>
                                </li>
                                <li>
                                <a href="industries.php">Industries</a>
                            </li>
                            <li>
                                <a href="about-us.php">Company</a>
                            </li>
                            <li>
                                <a href="contact-us.php">Contact</a>
                            </li>
                            </ul> //.nav-menu -->
                        </nav>                                        
                    </div> <!-- //.main-menu -->                                
                </div>
                <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                    <!-- <ul>
                        <li class="sidebarmenu-search">
                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                <i class="flaticon-search"></i>
                            </a>
                        </li>
                    </ul> -->
                    <div class="toolbar-sl-share">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>