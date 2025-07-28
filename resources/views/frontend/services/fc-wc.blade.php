@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/Forest-Clearance-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Forest Clearance & Wildlife Clearance</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Forest Clearance & Wildlife Clearance</li>
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
                                <img src="{{asset('assets/images/forest-clearance-img.webp')}}" alt="Forest Clearance & Wildlife Clearance">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Forest Clearance & Wildlife Clearance
                                </h2>
                                <div class="desc pb-35">
                                    Projects involving <strong>diversion of forest land</strong> or located near protected areas must undergo stringent environmental scrutiny. These clearances are critical regulatory requirements that ensure sustainable development while protecting India's rich biodiversity and forest ecosystems.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we assist clients in securing <strong>Forest Clearance (FC)</strong> under the <strong>Forest (Conservation) Act, 1980</strong> and <strong>Wildlife Clearance</strong> as per guidelines from the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong> and respective <strong>State Forest Departments</strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our forest and wildlife clearance services provide comprehensive support from initial assessment to final approval, ensuring compliance with all regulatory frameworks. We help organizations navigate complex approval processes, prepare detailed documentation, and implement compensatory measures that meet statutory requirements while facilitating project execution.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Forest Clearance Types Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Clearance Services</span>
                    <h2 class="title">Comprehensive Forest & Wildlife Clearance Solutions</h2>
                    <div class="desc mt-10">We provide specialized clearance services for various project types and regulatory categories</div>
                </div>

                <div class="row gutter-40">
                    <!-- Forest Clearance Stage-I -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/forest-clearance-stage1.png') }}" alt="Forest Clearance Stage-I Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Forest Clearance Stage-I</h4>
                                <p class="desc">In-principle approval for diversion of forest land including site inspection, impact assessment, and preliminary documentation as per Forest Conservation Act, 1980.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Forest Clearance Stage-II -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/forest-clearance-stage2.jpeg') }}" alt="Forest Clearance Stage-II Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Forest Clearance Stage-II</h4>
                                <p class="desc">Final approval for forest land diversion with detailed project implementation plan, compensatory afforestation scheme, and monitoring framework.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Wildlife Clearance -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/wildlife-clearance.jpg') }}" alt="Wildlife Clearance Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Wildlife Clearance</h4>
                                <p class="desc">Clearance for projects near protected areas, national parks, and wildlife sanctuaries including impact assessment on wildlife corridors and habitats.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Compensatory Afforestation -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/compensatory-afforestation.jpeg') }}" alt="Compensatory Afforestation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Compensatory Afforestation</h4>
                                <p class="desc">Planning and implementation of compensatory afforestation schemes, including species selection, plantation design, and long-term maintenance planning.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Forest Survey & Assessment -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/forest-survey.jpeg') }}" alt="Forest Survey Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Forest Survey & Assessment</h4>
                                <p class="desc">Comprehensive forest land survey, biodiversity assessment, tree enumeration, and ecological impact evaluation for clearance applications.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Compliance Monitoring -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/compliance-monitoring.jpeg') }}" alt="Compliance Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Compliance Monitoring</h4>
                                <p class="desc">Post-clearance compliance monitoring, periodic reporting to regulatory authorities, and implementation of mitigation measures as per approved plans.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forest Clearance Types Section End -->

        <!-- Clearance Process Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Methodology</span>
                    <h2 class="title">Forest & Wildlife Clearance Process</h2>
                    <div class="desc mt-10">Our systematic approach ensures efficient processing and successful approval of forest and wildlife clearances</div>
                </div>
                
                <div class="row gutter-40">
                    <!-- Pre-Application Assessment -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Pre-Application Assessment</h4>
                                <p class="desc">Comprehensive site evaluation, regulatory framework analysis, and feasibility assessment to determine clearance requirements and project viability.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Forest land classification verification</li>
                                    <li>Protected area proximity analysis</li>
                                    <li>Regulatory applicability assessment</li>
                                    <li>Project categorization review</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Documentation & Application -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Documentation & Application Preparation</h4>
                                <p class="desc">Detailed preparation of clearance applications, supporting documents, technical studies, and compliance reports as per regulatory guidelines.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Application form preparation</li>
                                    <li>Forest survey & enumeration reports</li>
                                    <li>Wildlife impact assessment studies</li>
                                    <li>Compensatory measures planning</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Regulatory Consultation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Regulatory Consultation & Review</h4>
                                <p class="desc">Coordination with forest departments, wildlife authorities, and regulatory bodies for application review, query resolution, and approval facilitation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Stakeholder consultation meetings</li>
                                    <li>Technical query responses</li>
                                    <li>Site inspection coordination</li>
                                    <li>Committee presentation support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Implementation Support -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Implementation & Compliance</h4>
                                <p class="desc">Post-approval implementation support, compliance monitoring, and periodic reporting to ensure adherence to clearance conditions and regulatory requirements.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Mitigation measure implementation</li>
                                    <li>Compensatory afforestation execution</li>
                                    <li>Compliance reporting & monitoring</li>
                                    <li>Regulatory liaison & coordination</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clearance Process Section End -->

        <!-- Benefits Section Start -->
        <div class="rs-services style2 gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Value Addition</span>
                    <h2 class="title">Benefits of Professional Clearance Services</h2>
                    <div class="desc mt-10">Professional forest and wildlife clearance services ensure regulatory compliance while minimizing project delays and risks</div>
                </div>

                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to Forest Conservation Act and Wildlife Protection Act, avoiding legal complications and penalties.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Faster Approvals -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Faster Approvals</h4>
                                <p class="desc">Expert handling of clearance processes reduces approval timelines and minimizes project delays through efficient documentation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Risk Mitigation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Risk Mitigation</h4>
                                <p class="desc">Proactive identification and management of environmental risks associated with forest land diversion and wildlife impact.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Conservation Support -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Conservation Support</h4>
                                <p class="desc">Contribute to forest conservation and biodiversity protection through effective compensatory measures and sustainable practices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Benefits Section End -->

        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with comprehensive Forest & Wildlife Clearance services?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a> 
                    </button>
                    <div class="text-white">With extensive experience in forest and wildlife regulations, {{env('SITENAME')}} provides expert clearance services that ensure regulatory compliance while facilitating sustainable development. Our comprehensive approach covers all aspects from initial assessment to post-approval compliance monitoring.</div>
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
/* Custom styles for forest clearance page */
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
</style>
@endsection