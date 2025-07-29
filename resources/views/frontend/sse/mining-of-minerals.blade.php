@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        {{-- <div class="rs-breadcrumbs img1"
            style="background: linear-gradient(135deg, rgba(21, 110, 104, 0.85), rgba(13, 75, 70, 0.9)), url({{asset('assets/images/mining-ec-banner-bg.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Clearance for Mining of Minerals</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Mining of Minerals EC</li>
                </ul>
            </div>
        </div> --}}
        <!-- Breadcrumbs End -->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                                <img src="{{asset('assets/images/mining-ec-img.jpg')}}" alt="Environmental Clearance for Mining of Minerals" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Clearance for Mining of Minerals
                                </h2>
                                <div class="desc pb-35">
                                    As per <strong>Schedule 1 (a)</strong> of the <strong>EIA Notification, 2006</strong> issued by the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong>, Government of India, all projects involving the <strong>mining of minerals</strong>, including both <strong>opencast (surface)</strong> and <strong>underground mining</strong>, mandatorily require prior <strong>Environmental Clearance (EC)</strong> before commencement.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we provide expert consultancy services to guide mining projects through the complex EC process, ensuring compliance with all regulatory requirements and facilitating smooth project initiation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
<style>
/* Custom styles for mining EC page - Reusing Forest Clearance styles with minor adjustments */
.services-item {
    border: 1px solid #e8e8e8;
    border-radius: 12px;
    padding: 30px 25px;
    transition: all 0.3s ease;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    height: 100%; /* Ensure cards try to be equal height */
}
.services-item:hover {
    border-color: #156e68;
    box-shadow: 0 10px 30px rgba(21,110,104,0.15);
    transform: translateY(-5px);
}
.services-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}
.services-item:hover::before {
    transform: scaleX(1);
}
.services-icon-wrapper {
    width: 100%;
    height: 180px;
    margin-bottom: 25px;
    overflow: hidden;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #e8e8e8;
    transition: all 0.3s ease;
    display: flex; /* Use flexbox for centering */
    justify-content: center;
    align-items: center;
}
.services-item:hover .services-icon-wrapper {
    border-color: #156e68;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(21,110,104,0.15);
}
.services-icon {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.sector-icon {
    width: 60%; /* Adjust size as needed */
    height: 60%;
    max-width: 100%;
    max-height: 100%;
    /* Ensure the SVG scales nicely */
    /* Remove filter and transform from general .sector-icon hover if conflicting */
}
.services-content {
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.services-content.text-left {
    text-align: left;
}
.services-content.text-left ul {
    flex-grow: 1; /* Push the ul to grow and fill space */
}
.services-content .title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}
.services-item:hover .services-content .title {
    color: #156e68;
}
.services-content .desc {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin: 0 0 15px 0; /* Add bottom margin */
    flex-grow: 1; /* Allow desc to grow */
}
.services-content ul {
    text-align: left;
    color: #666;
    font-size: 13px;
    padding-left: 0; /* Reset default padding */
    margin-top: auto; /* Push the list to the bottom */
}
.services-content ul li {
    margin-bottom: 5px;
    padding-left: 1.5em; /* Space for custom bullet */
    position: relative;
}
/* Custom bullet point */
.services-content ul li::before {
    content: "\2022"; /* Bullet character */
    color: #156e68; /* Bullet color */
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
}

/* Responsive Design */
@media (max-width: 1199px) {
    .services-item {
        padding: 25px 20px;
    }
    .services-icon-wrapper {
        height: 160px;
    }
    .services-content .title {
        font-size: 17px;
    }
}
@media (max-width: 991px) {
    .col-lg-4, .col-lg-6, .col-lg-3 {
        margin-bottom: 30px;
    }
    .services-item {
        padding: 20px 18px;
    }
    .services-icon-wrapper {
        height: 150px;
    }
    .services-content .title {
        font-size: 16px;
        margin-bottom: 12px;
    }
    .services-content .desc {
        font-size: 13px;
    }
}
@media (max-width: 767px) {
    .services-item {
        padding: 25px 20px;
        margin-bottom: 20px;
    }
    .services-icon-wrapper {
        height: 160px;
        margin-bottom: 20px;
    }
    .services-content .title {
        font-size: 17px;
        margin-bottom: 15px;
    }
    .services-content .desc {
        font-size: 14px;
        line-height: 1.5;
    }
}
/* Enhanced section styling */
.sec-title .sub-title {
    color: #156e68;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
}
.sec-title .title {
    color: #333;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 15px;
}
.sec-title .desc {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    max-width: 800px;
    margin: 0 auto;
}
/* Equal height for all cards - SCOPED TO SERVICES SECTION ONLY */
.rs-services .row, .rs-about .row {
    display: flex;
    flex-wrap: wrap;
}
.h-100 {
    height: 100%;
}
@media (min-width: 992px) {
    .rs-services .row > [class*="col-"], .rs-about .row > [class*="col-"] {
        display: flex;
    }
}
/* Specific banner adjustment if needed */
.rs-breadcrumbs.img1 {
    background-size: cover !important;
    background-position: center !important;
}

/* Process Step Indicators */
.process-step-indicator {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #156e68, #aec944);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 18px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Benefits Section - Removed CSS Icon Styles */
/* The CSS icon styles have been removed as requested. */

/* Benefits content text alignment */
.services-item.d-flex.flex-column.align-items-center.text-center .services-content .title,
.services-item.d-flex.flex-column.align-items-center.text-center .services-content .desc {
    text-align: center;
}

/* Ensure benefit cards also try to be equal height */
.rs-services.style2.gray-color .services-item {
    height: 100%;
}
</style>
@endsection