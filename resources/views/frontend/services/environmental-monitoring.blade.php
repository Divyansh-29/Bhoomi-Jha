@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/Environmental-Monitoring-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Monitoring</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Environmental Monitoring</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                                <img src="{{asset('assets/images/environmental-monitoring-img.jpg')}}" alt="Environmental Monitoring">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Monitoring
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Environmental Monitoring</strong> is a vital process to evaluate, track, and ensure compliance with environmental regulations. It involves systematic measurement of key environmental parameters—such as air, water, noise, and soil—to assess the impact of industrial, construction, and infrastructure projects on the environment.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}},</strong> we offer <strong>comprehensive environmental monitoring services</strong> that are fully compliant with <strong>MoEF&CC guidelines</strong> and <strong>CPCB/SPCB norms</strong>, supporting industries, developers, and public sector entities in their environmental performance and regulatory obligations.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our environmental monitoring services are designed to provide accurate, reliable data that helps organizations make informed decisions about environmental management, ensuring sustainable operations while maintaining regulatory compliance across all project phases.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Environmental Monitoring Services Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Monitoring Services</span>
                    <h2 class="title">Comprehensive Environmental Monitoring Parameters</h2>
                    <div class="desc mt-10">We monitor all critical environmental parameters to ensure complete regulatory compliance and environmental protection</div>
                </div>

                <div class="row gutter-40">
                    <!-- Air Quality Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/air-quality.webp') }}" alt="Air Quality Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Air Quality Monitoring</h4>
                                <p class="desc">Comprehensive monitoring of ambient air quality parameters including PM2.5, PM10, SO2, NOx, CO, and other pollutants as per CPCB guidelines.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Water Quality Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/water-quality.jpg') }}" alt="Water Quality Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Water Quality Monitoring</h4>
                                <p class="desc">Surface water, groundwater, and effluent quality assessment including physical, chemical, and biological parameters compliance monitoring.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Noise Level Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/noise-monitoring.jpeg') }}" alt="Noise Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Noise Level Monitoring</h4>
                                <p class="desc">Ambient noise level monitoring for industrial, residential, and commercial areas as per Noise Pollution Rules and standards.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Quality Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/soil-monitoring.jpg') }}" alt="Soil Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Soil Quality Monitoring</h4>
                                <p class="desc">Comprehensive soil analysis including physical, chemical, and biological properties assessment for contamination and fertility evaluation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stack Emission Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/stack-emission.jpg') }}" alt="Stack Emission Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Stack Emission Monitoring</h4>
                                <p class="desc">Industrial stack emission testing and continuous monitoring to ensure compliance with emission standards and air pollution control measures.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Biodiversity Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/biodiversity.jpeg') }}" alt="Biodiversity Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Biodiversity Monitoring</h4>
                                <p class="desc">Flora and fauna assessment, ecological impact evaluation, and biodiversity conservation monitoring for development projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Environmental Monitoring Services Section End -->

        <!-- Monitoring Types Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Monitoring Categories</span>
                    <h2 class="title">Types of Environmental Monitoring Services</h2>
                    <div class="desc mt-10">Tailored monitoring solutions for different project phases and regulatory requirements</div>
                </div>
                
                <div class="row gutter-40">
                    <!-- Baseline Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Baseline Environmental Monitoring</h4>
                                <p class="desc">Pre-project environmental condition assessment to establish reference parameters for impact evaluation and EIA studies. Essential for Environmental Clearance applications.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Seasonal monitoring campaigns</li>
                                    <li>Comprehensive parameter coverage</li>
                                    <li>Regulatory compliance documentation</li>
                                    <li>Quality assured data collection</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Compliance Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Compliance Monitoring</h4>
                                <p class="desc">Ongoing monitoring during project operation to ensure adherence to environmental conditions and regulatory standards as mandated by EC conditions.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Regular monitoring schedules</li>
                                    <li>Real-time data analysis</li>
                                    <li>Compliance reporting</li>
                                    <li>Corrective action recommendations</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Phase Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Construction Phase Monitoring</h4>
                                <p class="desc">Specialized monitoring during construction activities to track temporary impacts and ensure mitigation measures are effectively implemented and maintained.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Dust and noise control monitoring</li>
                                    <li>Water quality protection</li>
                                    <li>Waste management compliance</li>
                                    <li>Mitigation effectiveness assessment</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Post-Project Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Post-Project Monitoring</h4>
                                <p class="desc">Long-term environmental monitoring to assess project impacts, validate predictions, and ensure sustainability of environmental protection measures.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Impact validation studies</li>
                                    <li>Long-term trend analysis</li>
                                    <li>Adaptive management support</li>
                                    <li>Environmental performance evaluation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Monitoring Types Section End -->

        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with comprehensive Environmental Monitoring services?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a> 
                    </button>
                    <div class="text-white">With state-of-the-art monitoring equipment and experienced environmental professionals, {{env('SITENAME')}} provides accurate, reliable environmental monitoring services fully compliant with MoEF&CC guidelines and CPCB/SPCB norms. Our comprehensive monitoring solutions support your environmental management and regulatory compliance needs across all project phases.</div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Counter Section Start -->
        <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <h2 class="title white-color">
                        Contact Us
                    </h2>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Video Section End -->
        <div class="rs-video-wrap style2 inner pb-120 md-pb-80">
            <div class="container">
                <div class="row margin-0 gray-color">
                    <div class="col-lg-6">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <h2 class="title pb-38">
                                    About Us
                                </h2>
                                <div class="desc pb-10">
                                    We Believe in making the world a better place to live.
                                </div>
                                <div class="desc pb-10">All our efforts are towards helping create a sustainable environment.</div>
                                <div class="desc pb-10">However, this depends on YOU too.</div>
                                <div class="desc pb-10">Let us know how we can work together towards this noble cause</div>
                                <div class="desc pb-10">We are eager to hear back from YOU</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="rs-requset">
                            <div id="form-messages"></div>
                            <div class="wpcf7 no-js" id="wpcf7-f65-o1" lang="en-US" dir="ltr" data-wpcf7-id="65">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="#wpcf7-f65-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="65" />
                                        <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f65-o1" />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                    </div>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="your_name"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Your Name *" value="" type="text"
                                                            name="your_name" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="your_email"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Email *" value="" type="email"
                                                            name="your_email" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="your_phone"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Phone no. *" value="" type="text"
                                                            name="your_phone" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="your_subject"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Your Subject *" value="" type="text"
                                                            name="your_subject" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <p><span class="wpcf7-form-control-wrap"
                                                        data-name="your_message"><textarea cols="40" rows="10"
                                                            maxlength="2000"
                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Message" name="your_message"></textarea></span>
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <p><button type="submit" value="SEND" id="send"
                                                        class="readon learn-more submit">Submit Now</button>
                                                </p>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Section End -->

<style>
/* Custom styles for environmental monitoring page */
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
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: brightness(0.9);
}

.services-item:hover .sector-icon {
    transform: scale(1.05);
    filter: brightness(1);
}

.services-content {
    text-align: center;
    flex-grow: 1;
}

.services-content.text-left {
    text-align: left;
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
    margin: 0;
}

.services-content ul {
    text-align: left;
    color: #666;
    font-size: 13px;
}

.services-content ul li {
    margin-bottom: 5px;
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
    .col-lg-4, .col-lg-6 {
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
</style>
@endsection