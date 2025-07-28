@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/EIA-banner.jpg')}} ) no-repeat; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Impact Assessment (EIA) Studies</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Environmental Impact Assessment (EIA) Studies</li>
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
                                <img src="{{asset('assets/images/eia-studies-img.jpg')}}" alt="EIA Studies">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Impact Assessment (EIA) Studies
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Environmental Impact Assessment (EIA)</strong> is a critical process that evaluates the potential environmental consequences of a proposed project before it is undertaken. It ensures that environmental factors are integrated into project planning and decision-making, in compliance with statutory requirements under the <strong>EIA Notification, 2006</strong>, by the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong> and respective <strong>SEIAA</strong> authorities.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}</strong> we specialize in delivering <strong>comprehensive, scientifically robust, and regulation-compliant EIA studies</strong> across a wide range of industrial, infrastructure, mining, and urban development projects.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-20 fontbold">
                                Our EIA Study Services Include:
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul style="list-style: disc; padding: 0px 26px; margin-bottom: 20px;">
                                        <li><strong>Project Screening and Scoping</strong></li>
                                        <li><strong>Preparation of Form 1, Pre-feasibility Report (PFR), and ToR applications</strong></li>
                                        <li><strong>Baseline Environmental Monitoring</strong> (air, water, soil, noise, ecology, socio-economics, hydrology, etc.)</li>
                                        <li><strong>Impact Prediction and Mitigation Planning</strong></li>
                                        <li><strong>Public Consultation & Stakeholder Engagement</strong></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul style="list-style: disc; padding: 0px 26px;">
                                        <li><strong>Environmental Management Plan (EMP) Development</strong></li>
                                        <li><strong>Risk & Hazard Analysis</strong></li>
                                        <li><strong>Preparation of Draft & Final EIA Reports</strong></li>
                                        <li><strong>Representation before SEAC/SEIAA/MoEF&CC</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc pb-35">
                                Our team of qualified environmental professionals and QCI-NABET certified consultants ensures that all EIA studies are prepared with the highest standards of scientific rigor and regulatory compliance, helping our clients obtain environmental clearances efficiently while minimizing project delays.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- EIA Process Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Methodology</span>
                    <h2 class="title">EIA Study Process & Methodology</h2>
                    <div class="desc mt-10">Our systematic approach ensures comprehensive environmental assessment and regulatory compliance</div>
                </div>

                <div class="row gutter-40">
                    <!-- Screening & Scoping -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/screening.webp') }}" alt="Screening Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Screening & Scoping</h4>
                                <p class="desc">Initial project categorization, regulatory requirement identification, and Terms of Reference (ToR) preparation for comprehensive environmental assessment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Baseline Studies -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/baseline.jpg') }}" alt="Baseline Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Baseline Studies</h4>
                                <p class="desc">Comprehensive monitoring of air, water, soil, noise, biodiversity, and socio-economic parameters to establish pre-project environmental conditions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Impact Assessment -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/impact-assessment.webp') }}" alt="Impact Assessment Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Impact Assessment</h4>
                                <p class="desc">Scientific evaluation of potential environmental impacts using proven methodologies and predictive modeling techniques.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mitigation Planning -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/mitigation.jpg') }}" alt="Mitigation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Mitigation Planning</h4>
                                <p class="desc">Development of comprehensive Environmental Management Plans (EMP) with specific mitigation measures and monitoring protocols.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Public Consultation -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/consultation.jpg') }}" alt="Consultation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Public Consultation</h4>
                                <p class="desc">Stakeholder engagement, public hearings coordination, and community feedback integration as per regulatory requirements.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Regulatory Support -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/regulatory.jpg') }}" alt="Regulatory Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Regulatory Support</h4>
                                <p class="desc">Expert representation before SEAC, SEIAA, and MoEF&CC committees with comprehensive technical documentation and clarifications.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- EIA Process Section End -->

        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with comprehensive EIA Studies?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a> 
                    </button>
                    <div class="text-white">With extensive expertise and a strong team of well qualified and experienced environmental professionals, {{env('SITENAME')}} is at the forefront for providing end to end EIA study solutions as per latest statutory frameworks. Our QCI-NABET certified consultants ensure scientifically robust and regulation-compliant environmental assessments across diverse project categories.</div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Counter Section Start -->
        {{-- <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <h2 class="title white-color">
                        Contact Us
                    </h2>
                </div>
            </div>
        </div> --}}
        <!-- Counter Section End -->

        <!-- Video Section End -->
        {{-- <div class="rs-video-wrap style2 inner pb-120 md-pb-80">
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
        </div> --}}
        <!-- Video Section End -->

<style>
/* Custom styles for EIA studies page */
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
    .col-lg-4 {
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
.rs-services .row {
    display: flex;
    flex-wrap: wrap;
}

.h-100 {
    height: 100%;
}

@media (min-width: 992px) {
    .rs-services .row > [class*="col-"] {
        display: flex;
    }
}
</style>
@endsection