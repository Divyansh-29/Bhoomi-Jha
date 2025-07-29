<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Assuming Bootstrap CSS and Flaticon CSS are linked elsewhere in your main layout -->

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

        /* --- Footer Customization Styles --- */
        /* Target the footer element directly with its ID and classes for higher specificity */
        #rs-footer.rs-footer.style2 {
            /* Corrected property name and applied gradient */
            background: linear-gradient(13deg, #156e68, #aec944) !important;
            /* Ensure text color is readable, adjust if needed */
            color: #ffffff; /* White text */
        }
        /* Ensure links and text inside the footer widgets are also white */
        #rs-footer.rs-footer.style2 .footer-widget,
        #rs-footer.rs-footer.style2 .footer-widget h3.widget-title,
        #rs-footer.rs-footer.style2 .address-widget .desc,
        #rs-footer.rs-footer.style2 .site-map li a,
        #rs-footer.rs-footer.style2 .copyright p {
            color: #ffffff !important;
        }
        /* Adjust hover color for links to be a lighter shade */
        #rs-footer.rs-footer.style2 .phone-list a:hover,
        #rs-footer.rs-footer.style2 .site-map li a:hover {
            color: #e0f7fa !important; /* Light cyan hover */
        }
        /* --- End Footer Customization Styles --- */

        /* Optional: Add some space between address blocks */
        .address-widget-spacing {
             margin-top: 15px; /* Adjust value as needed */
        }

        /* --- Icon Styles --- */
        /* Style for custom PNG icons */
        .custom-icon {
            width: 16px; /* Adjust width as needed */
            height: 16px; /* Adjust height as needed */
            margin-right: 8px; /* Add space between icon and text */
            vertical-align: middle; /* Align icon vertically with text */
        }
        /* Ensure icons inside list items don't add extra line height issues */
        .address-widget li {
            line-height: 1.6; /* Adjust line height for better text alignment */
        }
        /* --- End Icon Styles --- */

        /* --- Column Padding Adjustment --- */
        /* Reduce padding for footer columns to ensure proper alignment */
        .footer-widget {
            padding: 0 15px; /* Adjust padding as needed */
        }
        /* --- End Column Padding Adjustment --- */
    </style>
</head>
<body>

<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Services Column - Very Left -->
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-30">
                    <h3 class="widget-title">Services</h3>
                    <ul class="site-map">
                         <li><a href="{{route('service','environmental-impacts-assessment')}}">Environmental Impacts Assessment (EIA) Studies</a></li>
                         <li><a href="{{route('service','environmental-monitoring')}}">Environmental Monitoring</a></li>
                         <li><a href="{{route('service','environmental-audits')}}">Environmental Audits</a></li>
                         <li><a href="{{route('service','fc-wc')}}">Forest Clearance (FC), Wildlife Clearance (WC)</a></li>
                         <li><a href="{{route('service','six-monthly-compliance-report-preparation-for-ec-conditions')}}">Six Monthly Compliance Report Preparation For EC Conditions</a></li>
                         <li><a href="{{route('service','socio-economic-impact-assessment')}}">Socio-Economic Impact Assessment</a></li>
                    </ul>
                    <hr>
                </div>

                <!-- Sectors as per QCI/NABET Column - Next -->
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-30">
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

                <!-- Contact Column - Next -->
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-30">
                    <!-- Contact Section -->
                    <h3 class="widget-title">Contact</h3>
                    <ul class="address-widget">
                        <!-- Hardcoded Phone Numbers Section -->
                        <li>
                            <!-- Telephone Icon and Number -->
                            <img src="/assets/images/icons/telephone.png" alt="Telephone" class="custom-icon">
                            <span>Telephone: 011-25-05-6683</span>
                        </li>
                        <li>
                            <!-- Phone 1 Icon and Number -->
                            <img src="/assets/images/icons/phone.png" alt="Phone" class="custom-icon">
                            <span>Phone 1: +91-901-588-7771</span>
                        </li>
                        <li>
                             <!-- Phone 2 Icon and Number -->
                            <img src="/assets/images/icons/phone.png" alt="Phone" class="custom-icon">
                            <span>Phone 2: +91-721-766-8737</span>
                        </li>
                        <li>
                             <!-- Phone 3 Icon and Number -->
                            <img src="/assets/images/icons/phone.png" alt="Phone" class="custom-icon">
                            <span>Phone 3: +91-623-287-2151</span>
                        </li>
                        <!-- End Hardcoded Phone Numbers Section -->
                        <!-- Email Section -->
                        <li>
                            <img src="/assets/images/icons/email.png" alt="Email" class="custom-icon">
                            <span>Email 1: <a href="mailto:info@bhoomijha.com">info@bhoomijha.com</a></span>
                        </li>
                        <li>
                            <img src="/assets/images/icons/email.png" alt="Email" class="custom-icon">
                            <span>Email 2: <a href="mailto:bd@bhoomijha.com">bd@bhoomijha.com</a></span>
                        </li>
                        <!-- End Email Section -->
                    </ul>
                </div>
                <!-- End Contact Column -->

                 <!-- Addresses Column - Very Right -->
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <!-- Working Address Section -->
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <img src="/assets/images/icons/location.png" alt="Location" class="custom-icon">
                            <div class="desc">33, GROUND FLOOR, POCKET-28, SECTOR-24, ROHINI</div>
                        </li>
                    </ul>
                    <ul class="address-widget">
                        <li>
                            <img src="/assets/images/icons/location.png" alt="Location" class="custom-icon">
                            <div class="desc">B2/33, Third Floor, Pashchim Vihar</div>
                        </li>
                    </ul>        
                    
                </div>
                <!-- End Addresses Column -->

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

</body>
</html>