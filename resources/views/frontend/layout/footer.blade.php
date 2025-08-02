<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Footer - Complete</title>
    
    <style type="text/css">
        /* ENHANCED MODERN FOOTER STYLES - COMPLETE VERSION */
        
        /* Remove default margins and ensure proper box-sizing */
        * {
            box-sizing: border-box;
        }
        
        /* Enhanced Footer Container */
        #rs-footer.rs-footer.style2 {
            background: linear-gradient(135deg, #156e68 0%, #1a7a73 50%, #aec944 100%) !important;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Animated Background Elements */
        #rs-footer.rs-footer.style2::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.03) 0%, transparent 70%);
            animation: footerFloat 20s ease-in-out infinite;
            pointer-events: none;
        }
        
        @keyframes footerFloat {
            0%, 100% { transform: translateX(0) translateY(0) scale(1); }
            25% { transform: translateX(-10px) translateY(-15px) scale(1.05); }
            50% { transform: translateX(10px) translateY(-10px) scale(0.95); }
            75% { transform: translateX(-5px) translateY(15px) scale(1.02); }
        }
        
        /* Footer Top Section */
        .footer-top {
            padding: 80px 0 60px;
            position: relative;
            z-index: 2;
        }
        
        /* Enhanced Footer Widget Styling */
        .footer-widget {
            padding: 0 20px;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .footer-widget:nth-child(1) { animation-delay: 0.2s; }
        .footer-widget:nth-child(2) { animation-delay: 0.4s; }
        .footer-widget:nth-child(3) { animation-delay: 0.6s; }
        .footer-widget:nth-child(4) { animation-delay: 0.8s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Widget Titles */
        .widget-title {
            color: #ffffff !important;
            font-size: 1.4rem !important;
            font-weight: 700 !important;
            margin-bottom: 25px !important;
            position: relative;
            padding-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .widget-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #aec944, rgba(174, 201, 68, 0.3));
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        
        .footer-widget:hover .widget-title::after {
            width: 80px;
        }
        
        /* Enhanced Site Map Links - Triangle Removed */
        .site-map {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        
        .site-map li {
            margin-bottom: 12px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        /* REMOVED - No triangle arrows */
        .site-map li::before {
            content: none;
        }
        
        .site-map li a {
            color: rgba(255, 255, 255, 0.9) !important;
            text-decoration: none !important;
            font-size: 0.95rem;
            line-height: 1.6;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }
        
        .site-map li a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #aec944;
            transition: width 0.3s ease;
        }
        
        .site-map li a:hover {
            color: #ffffff !important;
            transform: translateX(8px);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .site-map li a:hover::after {
            width: 100%;
        }
        
        /* FIXED - Enhanced Address Widget with Perfect Alignment */
        .address-widget {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        
        .address-widget li {
            margin-bottom: 15px;
            display: flex;
            align-items: center; /* FIXED - Perfect vertical alignment */
            padding: 12px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            min-height: 50px; /* FIXED - Consistent box height */
        }
        
        .address-widget li:hover {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: #aec944;
            transform: translateX(5px);
        }
        
        /* FIXED - Perfect Icon Alignment */
        .custom-icon {
            width: 20px;
            height: 20px;
            margin-right: 15px; /* FIXED - Optimal spacing */
            filter: brightness(0) invert(1);
            transition: all 0.3s ease;
            flex-shrink: 0; /* FIXED - Prevent icon shrinking */
        }
        
        .address-widget li:hover .custom-icon {
            filter: brightness(0) invert(1) sepia(1) saturate(3) hue-rotate(80deg);
            transform: scale(1.1);
        }
        
        /* FIXED - Perfect Text Alignment */
        .address-widget span,
        .address-widget .desc {
            color: rgba(255, 255, 255, 0.9) !important;
            font-size: 0.95rem;
            line-height: 1.5;
            transition: color 0.3s ease;
            display: flex; /* FIXED - Flex alignment */
            align-items: center; /* FIXED - Vertical centering */
            flex: 1; /* FIXED - Take remaining space */
        }
        
        .address-widget li:hover span,
        .address-widget li:hover .desc {
            color: #ffffff !important;
        }
        
        .address-widget a {
            color: #aec944 !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .address-widget a:hover {
            color: #ffffff !important;
            text-decoration: underline;
        }
        
        /* NEW - Address Labels with Icons */
        .address-label {
            font-weight: 700;
            font-size: 1rem;
            color: #aec944 !important;
            margin-bottom: 10px;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            padding-left: 20px;
        }
        
        .address-label::before {
            content: '📍';
            position: absolute;
            left: 0;
            top: 0;
            font-size: 0.9rem;
        }
        
        .address-label:first-child {
            margin-top: 0;
        }
        
        /* Enhanced Footer Bottom */
        .footer-bottom {
            background: rgba(0, 0, 0, 0.2);
            padding: 25px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
        }
        
        .copyright {
            margin: 0 !important;
        }
        
        .copyright p {
            color: rgba(255, 255, 255, 0.8) !important;
            margin: 0 !important;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .copyright:hover p {
            color: #ffffff !important;
        }
        
        /* HR Styling */
        hr {
            border: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            margin: 30px 0 20px;
        }
        
        /* Enhanced Scroll Up Button */
        #scrollUp {
            background: linear-gradient(135deg, #156e68, #aec944) !important;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 20px rgba(21, 110, 104, 0.3);
            transition: all 0.3s ease;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
        }
        
        #scrollUp:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 10px 30px rgba(21, 110, 104, 0.5);
        }
        
        #scrollUp i {
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }
        
        #scrollUp:hover i {
            transform: translateY(-2px);
        }
        
        /* Responsive Design */
        @media (max-width: 991px) {
            .footer-top {
                padding: 60px 0 40px;
            }
            
            .footer-widget {
                padding: 0 15px;
                margin-bottom: 50px;
                text-align: center;
            }
            
            .widget-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-widget:hover .widget-title::after {
                width: 60px;
            }
            
            .site-map li a:hover {
                transform: none;
            }
            
            .address-widget li:hover {
                transform: none;
            }
        }
        
        @media (max-width: 767px) {
            .footer-top {
                padding: 50px 0 30px;
            }
            
            .footer-widget {
                margin-bottom: 40px;
            }
            
            .widget-title {
                font-size: 1.2rem !important;
                margin-bottom: 20px !important;
            }
            
            .address-widget li {
                padding: 15px;
                min-height: 60px;
            }
            
            .custom-icon {
                margin-right: 12px;
            }
            
            #scrollUp {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }
        
        /* Additional Animation for Page Load */
        #rs-footer.rs-footer.style2 {
            animation: footerReveal 1s ease forwards;
        }
        
        @keyframes footerReveal {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Search Modal Enhancement */
        .search-modal .modal-content {
            background: linear-gradient(135deg, #156e68, #1a7a73);
            border: none;
            border-radius: 15px;
        }
        
        .search-modal .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 10px;
            padding: 15px;
        }
        
        .search-modal .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .search-modal .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #aec944;
            box-shadow: 0 0 20px rgba(174, 201, 68, 0.3);
        }
        
        .search-modal .close {
            color: white;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .search-modal .close:hover {
            opacity: 1;
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<!-- Enhanced Footer Start -->
<footer id="rs-footer" class="rs-footer style2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Services Column -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="widget-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="{{route('service','environmental-impacts-assessment')}}">Environmental Impact Assessment (EIA)</a></li>
                        <li><a href="{{route('service','environmental-monitoring')}}">Environmental Monitoring</a></li>
                        <li><a href="{{route('service','environmental-audits')}}">Environmental Audits</a></li>
                        <li><a href="{{route('service','fc-wc')}}">Forest & Wildlife Clearance</a></li>
                        <li><a href="{{route('service','six-monthly-compliance-report-preparation-for-ec-conditions')}}">Compliance Reporting</a></li>
                        <li><a href="{{route('service','socio-economic-impact-assessment')}}">Socio-Economic Assessment</a></li>
                    </ul>
                    <hr>
                </div>

                <!-- Sectors Column -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="widget-title">Industry Sectors</h3>
                    <ul class="site-map">
                        <li><a href="{{route('sse','mining-of-minerals')}}">Mining & Minerals</a></li>
                        <li><a href="{{route('sse','thermal-power-plant')}}">Thermal Power Plants</a></li>
                        <li><a href="{{route('sse','coal-washeries')}}">Coal Washeries</a></li>
                        <li><a href="{{route('sse','mineral-beneficiation')}}">Mineral Beneficiation</a></li>
                        <li><a href="{{route('sse','metallurgical-industries')}}">Metallurgical Industries</a></li>
                        <li><a href="{{route('sse','cement-plants')}}">Cement Plants</a></li>
                        <li><a href="{{route('sse','building-&-construction-projects')}}">Construction Projects</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="widget-title">Get In Touch</h3>
                    <ul class="address-widget">
                        <li>
                            <img src="{{asset('assets/images/icons/telephone.png')}}" alt="Telephone" class="custom-icon">
                            <span>011-25-05-6683</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/icons/phone.png')}}" alt="Phone" class="custom-icon">
                            <span>+91-901-588-7771</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/icons/phone.png')}}" alt="Phone" class="custom-icon">
                            <span>+91-721-766-8737</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/icons/phone.png')}}" alt="Phone" class="custom-icon">
                            <span>+91-623-287-2151</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/icons/email.png')}}" alt="Email" class="custom-icon">
                            <span><a href="mailto:bd@bhoomijaenvirocare.com">bd@bhoomijaenvirocare.com</a></span>
                        </li>
                    </ul>
                </div>

                <!-- Address Column - FIXED with proper labels -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                    <h3 class="widget-title">Our Locations</h3>
                    
                    <!-- Working Address -->
                    <div class="address-label">Working Address</div>
                    <ul class="address-widget">
                        <li>
                            <img src="{{asset('assets/images/icons/location.png')}}" alt="Location" class="custom-icon">
                            <div class="desc">33, Ground Floor, Pocket-28, Sector-24, Rohini, New Delhi</div>
                        </li>
                    </ul>
                    
                    <!-- Registered Address -->
                    <div class="address-label">Registered Address</div>
                    <ul class="address-widget">
                        <li>
                            <img src="{{asset('assets/images/icons/location.png')}}" alt="Location" class="custom-icon">
                            <div class="desc">B2/33, Third Floor, Pashchim Vihar, New Delhi</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} Bhoomija Envirocare Private Limited. All Rights Reserved. | Designed with ❤️ for Sustainability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Enhanced Footer End -->

<!-- Enhanced Scroll Up Button -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Enhanced Search Modal -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search our services..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
