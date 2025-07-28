```html
@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/seia-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Socio-Economic Impact Assessments (SEIA)</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Socio-Economic Impact Assessments (SEIA)</li>
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
                                <img src="{{asset('assets/images/seia-img.webp')}}" alt="Socio-Economic Impact Assessments (SEIA)">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Socio-Economic Impact Assessments (SEIA)
                                </h2>
                                <div class="desc pb-35">
                                    Socio-Economic Impact Assessment (SEIA) is a critical component of sustainable project planning. It evaluates the potential effects—both positive and negative—that a project may have on the social, cultural, and economic conditions of local communities.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we conduct detailed SEIA studies to ensure that development is not only environmentally responsible but also socially inclusive and economically beneficial.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our SEIA services help identify, predict, and evaluate the potential social and economic consequences of proposed projects. We work closely with stakeholders to understand community needs, mitigate adverse impacts, and enhance positive outcomes, ensuring that development contributes to long-term community well-being and aligns with national and international sustainability standards.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->
        <!-- Services Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Service Offerings</span>
                    <h2 class="title">Socio-Economic Impact Assessment Services</h2>
                    <div class="desc mt-10">Comprehensive analysis for socially responsible and economically viable development</div>
                </div>
                <div class="row gutter-40">
                    <!-- Baseline Studies -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/baseline-study-icon.png') }}" alt="Baseline Studies Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Baseline Studies</h4>
                                <p class="desc">Establishing the existing socio-economic conditions in the project area before project implementation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Demographic and socio-cultural profiling</li>
                                    <li>Assessment of livelihoods, income sources, and economic activities</li>
                                    <li>Evaluation of existing infrastructure and access to services</li>
                                    <li>Documentation of local customs, traditions, and heritage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Impact Identification & Prediction -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/impact-assessment-icon.png') }}" alt="Impact Identification & Prediction Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Impact Identification & Prediction</h4>
                                <p class="desc">Systematic analysis of potential positive and negative impacts on communities and local economies.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Identification of direct, indirect, and cumulative impacts</li>
                                    <li>Prediction of impact magnitude, duration, and significance</li>
                                    <li>Assessment of impacts on vulnerable groups (SC/ST, women, children, elderly)</li>
                                    <li>Analysis of gender-specific implications</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Stakeholder Consultation -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/stakeholder-engagement-icon.png') }}" alt="Stakeholder Consultation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Stakeholder Consultation</h4>
                                <p class="desc">Facilitating meaningful dialogue with local communities and other stakeholders.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Identification and mapping of key stakeholders</li>
                                    <li>Organization of Public Consultations (PRA, FGDs, KII)</li>
                                    <li>Incorporation of community feedback into project design</li>
                                    <li>Ensuring Free, Prior, and Informed Consent (FPIC) where applicable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Mitigation & Enhancement Measures -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/mitigation-icon.png') }}" alt="Mitigation & Enhancement Measures Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Mitigation & Enhancement Measures</h4>
                                <p class="desc">Development of strategies to avoid, minimize, or compensate for adverse impacts and enhance benefits.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Design of project-specific mitigation plans</li>
                                    <li>Formulation of Community Development Action Plans (CDAPs)</li>
                                    <li>Creation of Resettlement Action Plans (RAPs) if displacement occurs</li>
                                    <li>Strategies for local employment generation and skill development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!-- Monitoring & Evaluation -->
                     <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/monitoring-icon.png') }}" alt="Monitoring & Evaluation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Monitoring & Evaluation</h4>
                                <p class="desc">Establishing systems to track the actual socio-economic impacts during and after project implementation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Development of Socio-Economic Monitoring Frameworks</li>
                                    <li>Definition of key indicators and data collection methods</li>
                                    <li>Regular impact tracking and reporting mechanisms</li>
                                    <li>Adaptive management based on monitoring findings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Reporting & Disclosure -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/reporting-icon.png') }}" alt="Reporting & Disclosure Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Reporting & Disclosure</h4>
                                <p class="desc">Preparing comprehensive SEIA reports and ensuring transparent communication of findings.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Compilation of SEIA reports as per regulatory requirements</li>
                                    <li>Integration of SEIA findings into EIA/EMP reports</li>
                                    <li>Support for public disclosure and regulatory submissions</li>
                                    <li>Communication of impacts and measures to stakeholders</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
        <!-- Process Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Approach</span>
                    <h2 class="title">Socio-Economic Impact Assessment Process</h2>
                    <div class="desc mt-10">A participatory and evidence-based methodology for comprehensive impact analysis</div>
                </div>
                <div class="row gutter-40">
                    <!-- Scoping -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Scoping & Planning</h4>
                                <p class="desc">Defining the scope and approach for the SEIA study.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Review of project details and potential impact pathways</li>
                                    <li>Identification of key socio-economic components and indicators</li>
                                    <li>Engagement with regulatory agencies for ToR clearance</li>
                                    <li>Development of detailed study methodology and work plan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Field Data Collection -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Field Data Collection</h4>
                                <p class="desc">Gathering primary and secondary data through participatory methods.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Conducting household surveys and community consultations</li>
                                    <li>Key Informant Interviews (KIIs) with local leaders</li>
                                    <li>Focus Group Discussions (FGDs) on specific themes</li>
                                    <li>Collection of secondary data from government and local sources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Analysis & Evaluation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Analysis & Evaluation</h4>
                                <p class="desc">Analyzing data to understand potential impacts and their significance.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Quantitative and qualitative data analysis</li>
                                    <li>Assessment of impact significance and likelihood</li>
                                    <li>Identification of affected communities and vulnerable groups</li>
                                    <li>Evaluation of cumulative impacts with other developments</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Plan Development & Reporting -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Plan Development & Reporting</h4>
                                <p class="desc">Formulating management plans and preparing the final SEIA report.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Formulation of mitigation, enhancement, and monitoring plans</li>
                                    <li>Drafting and internal review of the SEIA report</li>
                                    <li>Incorporation of stakeholder feedback</li>
                                    <li>Finalization and submission of the SEIA report</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Section End -->
        <!-- Benefits Section Start -->
        <div class="rs-services style2 gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Value Proposition</span>
                    <h2 class="title">Benefits of Our SEIA Services</h2>
                    <div class="desc mt-10">Promoting inclusive development through informed decision-making</div>
                </div>
                <div class="row gutter-40">
                    <!-- Informed Decision Making -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Informed Decision Making</h4>
                                <p class="desc">Provide project proponents and regulators with critical insights for better planning and design.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Social License to Operate -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Social License to Operate</h4>
                                <p class="desc">Build trust and acceptance among local communities, reducing project conflicts and delays.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to national EIA regulations and international sustainability standards.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Sustainable Development -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Sustainable Development</h4>
                                <p class="desc">Contribute to equitable and long-term development that benefits both the project and the community.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with Socio-Economic Impact Assessments?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in social impact assessment and community engagement, {{env('SITENAME')}} provides expert services to evaluate the social and economic implications of your projects. Our dedicated team ensures thorough analysis, meaningful stakeholder participation, and development of robust management plans for sustainable and inclusive growth.</div>
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
/* Custom styles for SEIA page - Reusing existing service page styles with minor adjustments */
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
/* Specific banner adjustment if needed */
.rs-breadcrumbs.img1 {
    background-size: cover !important;
    background-position: center !important;
}
</style>
@endsection