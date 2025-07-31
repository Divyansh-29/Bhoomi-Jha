<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-3">
                        <div class="logo-part">
                            <a href="{{route('home')}}" class="logo-container">
                                <img src="{{asset('assets/images/logo1.jpg')}}" alt="" width="60px" class="logo-image">
                                <div class="company-name-wrapper">
                                    <span class="company-name">{{ env('SITENAME') }}</span>
                                    <span class="company-tagline">Environmental Consultancy Services</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a href="index.html" class="mobile-logo logo-container">
                                <img src="{{asset('assets/images/logo1.png')}}" alt="logo" class="logo-image">
                                <div class="company-name-wrapper mobile-name">
                                    <span class="company-name">{{ env('SITENAME') }}</span>
                                </div>
                            </a>
                            <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">   
                            <ul class="nav-menu">
                                <li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home nav-item menu-item-37 nav-item">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-54 nav-item">
                                    <a href="#">About Us</a>
                                    <ul class="menu-item-has-children">
                                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item">
                                            <a href="{{route('about-us','about-bhoomija')}}">About Bhoomija</a>
                                        </li>
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item">
                                            <a href="{{route('about-us','message-from-directors')}}">Message From Directors</a>
                                        </li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item">
                                            <a href="{{route('about-us','vision-mission-&-values')}}">Vision, Mission & Values</a>
                                        </li>
                                        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item">
                                            <a href="{{ asset('assets/quality-policy.pdf') }}" target="_blank" rel="noopener noreferrer">Quality Policy</a>
                                        </li>
                                        <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-43 nav-item">
                                            <a href="{{route('about-us','key-professionals')}}">Key Professionals</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-54 nav-item">
                                    <a href="#">Sectors as per QCI/NABET</a>
                                    <ul class="menu-item-has-children">
                                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item">
                                            <a href="{{route('sse','mining-of-minerals')}}">Mining of Minerals</a>
                                        </li>
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item">
                                            <a href="{{route('sse','thermal-power-plant')}}">Thermal Power Plant</a>
                                        </li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item">
                                            <a href="{{route('sse','coal-washeries')}}">Coal Washeries</a>
                                        </li>
                                        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item">
                                            <a href="{{route('sse','mineral-benefication')}}">Mineral Benefication</a>
                                        </li>
                                        <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-43 nav-item">
                                            <a href="{{route('sse','metallurgical-industries')}}">Metallurgical Industries</a>
                                        </li>
                                        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item">
                                            <a href="{{route('sse','cement-plants')}}">Cement Plants</a>
                                        </li>
                                        <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-43 nav-item">
                                            <a href="{{route('sse','building-&-construction-projects')}}">Building & Construction Projects</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-54 nav-item">
                                    <a href="#">Services</a>
                                    <ul class="menu-item-has-children">
                                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item">
                                            <a href="{{route('service','environmental-impacts-assessment')}}">Environmental Impacts Assessment (EIA) Studies</a>
                                        </li>
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item">
                                            <a href="{{route('service','environmental-monitoring')}}">Environmental Monitoring</a>
                                        </li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item">
                                            <a href="{{route('service','environmental-audits')}}">Environmental Audits</a>
                                        </li>
                                        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item">
                                            <a href="{{route('service','fc-wc')}}">Forest Clearance (FC), Wildlife Clearance (WC)</a>
                                        </li>
                                        <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-43 nav-item">
                                            <a href="{{route('service','consent-to-estalish-and-operate')}}">Consent to Establish and Operate (SPBs)</a>
                                        </li>
                                        <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-47 nav-item">
                                            <a href="{{route('service','six-monthly-compliance-report-preparation-for-ec-conditions')}}">Six Monthly Compliance Report Preparation For EC Conditions</a>
                                        </li>
                                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item">
                                            <a href="{{route('service','carbon-foot-print-&-climate-change-studies')}}">Carbon Foot Print & Climate Change Studies</a>
                                        </li>
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item">
                                            <a href="{{route('service','socio-economic-impact-assessment')}}">Socio-Economic Impact Assessment</a>
                                        </li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item">
                                            <a href="{{route('service','design-&-engineering-for-tech')}}">Design & Engineering for Tech (STP, ETP & CPU etc)</a>
                                        </li>
                                        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-48 nav-item">
                                            <a href="{{route('service','annual-environmental-statement')}}">Annual Environmental Statement (Form-V)</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item">
                                    <a href="{{route('clientele')}}">Clientele</a>
                                </li>
                                <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item">
                                    <a href="{{route('career')}}">Careers</a>
                                </li>
                                <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item">
                                    <a href="{{route('approvals')}}">Approvals</a>
                                </li>
                                <li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-54 nav-item">
                                    <a href="#">Quick Links</a>
                                    <ul class="menu-item-has-children">
                                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-42 nav-item">
                                            <a href="https://parivesh.nic.in/">Parivesh</a>
                                        </li>
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-44 nav-item">
                                            <a href="https://cpcb.nic.in/">Central Pollution Control Board</a>
                                        </li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-39 nav-item">
                                            <a href="https://moef.gov.in/">Ministry Of Environmental Forest & Climate Change</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-61 nav-item">
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>                                        
                    </div> <!-- //.main-menu -->                                
                </div>
                <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                    {{-- <div class="toolbar-sl-share">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>

<style>
/* ANIMATED LOGO WITH COMPANY NAME */
.logo-container {
    display: flex !important;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.logo-image {
    transition: transform 0.3s ease;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.company-name-wrapper {
    display: flex;
    flex-direction: column;
    opacity: 0;
    transform: translateX(-20px);
    animation: slideInRight 0.8s ease forwards 0.3s;
}

.company-name {
    font-size: 18px;
    font-weight: 700;
    color: #156e68;
    line-height: 1.2;
    margin-bottom: 2px;
    opacity: 0;
    transform: translateY(-10px);
    animation: fadeInUp 0.6s ease forwards 0.5s;
    text-decoration: none !important;
    white-space: nowrap;
}

.company-tagline {
    font-size: 11px;
    color: #666;
    font-weight: 500;
    line-height: 1.2;
    opacity: 0;
    transform: translateY(10px);
    animation: fadeInUp 0.6s ease forwards 0.7s;
    white-space: nowrap;
}

/* Hover Effects */
.logo-container:hover .logo-image {
    transform: scale(1.05);
}

.logo-container:hover .company-name {
    color: #1a7a73;
    text-decoration: none !important;
}

.logo-container:hover .company-tagline {
    color: #156e68;
}

/* Sticky Header Adjustments */
.sticky-name .company-name {
    font-size: 16px;
}

.sticky-name .company-tagline {
    font-size: 10px;
}

/* Mobile Adjustments */
.mobile-name .company-name {
    font-size: 16px;
}

.mobile-name .company-tagline {
    display: none; /* Hide tagline on mobile for space */
}

/* Animation Keyframes */
@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 991px) {
    .logo-container {
        gap: 10px;
    }
    
    .company-name {
        font-size: 16px;
    }
    
    .company-tagline {
        font-size: 10px;
    }
}

@media (max-width: 767px) {
    .logo-container {
        gap: 8px;
    }
    
    .company-name {
        font-size: 14px;
    }
    
    .company-tagline {
        display: none;
    }
    
    .logo-image {
        width: 50px !important;
    }
}

@media (max-width: 480px) {
    .company-name {
        font-size: 13px;
    }
    
    .logo-image {
        width: 45px !important;
    }
}

/* Ensure no underline on logo links */
.logo-container,
.logo-container:hover,
.logo-container:focus,
.logo-container:active {
    text-decoration: none !important;
}

.company-name,
.company-name:hover,
.company-name:focus,
.company-name:active {
    text-decoration: none !important;
}
</style>
