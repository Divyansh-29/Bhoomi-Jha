@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/Environmental-Audits-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Audits</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Environmental Audits</li>
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
                                <img src="{{asset('assets/images/environmental-audits-img.webp')}}" alt="Environmental Audits">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Audits
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Environmental Audits</strong> are an essential instrument for organizations seeking to assess their environmental impact, verify compliance, and move towards sustainability. These systematic evaluations not only help in meeting legal requirements but also support organizations in identifying opportunities for environmental improvement and cost savings.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we specialize in delivering <strong>independent, data-driven, and sector-specific environmental audits</strong>. Our aim is to assist clients in aligning their operations with national environmental laws, best practices, and global sustainability goals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our environmental audit services provide comprehensive evaluation of environmental management systems, regulatory compliance status, and operational efficiency. We help organizations identify gaps, implement corrective measures, and develop sustainable practices that drive both environmental and business performance.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Environmental Audit Types Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Audit Services</span>
                    <h2 class="title">Comprehensive Environmental Audit Solutions</h2>
                    <div class="desc mt-10">We provide specialized audit services tailored to different organizational needs and regulatory requirements</div>
                </div>

                <div class="row gutter-40">
                    <!-- Compliance Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/compliance-audit.png') }}" alt="Compliance Audit Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Compliance Audits</h4>
                                <p class="desc">Comprehensive assessment of adherence to environmental laws, regulations, and permit conditions including Water Act, Air Act, and Hazardous Waste Rules.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Environmental Management System Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/ems-audit.jpeg') }}" alt="EMS Audit Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">EMS Audits</h4>
                                <p class="desc">Evaluation of Environmental Management Systems against ISO 14001 standards, policy implementation, and continuous improvement processes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Due Diligence Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/due-diligence.jpg') }}" alt="Due Diligence Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Due Diligence Audits</h4>
                                <p class="desc">Pre-acquisition environmental assessments to identify potential liabilities, compliance issues, and environmental risks for informed decision-making.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Energy Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/energy-audit.jpeg') }}" alt="Energy Audit Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Energy Audits</h4>
                                <p class="desc">Comprehensive energy consumption analysis, efficiency assessment, and identification of energy conservation opportunities as per PAT scheme requirements.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Waste Management Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/waste-audit.jpeg') }}" alt="Waste Audit Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Waste Management Audits</h4>
                                <p class="desc">Evaluation of solid waste, hazardous waste, and e-waste management practices ensuring compliance with waste management rules and circular economy principles.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Water Management Audits -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/water-audit.jpeg') }}" alt="Water Audit Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content">
                                <h4 class="title">Water Management Audits</h4>
                                <p class="desc">Assessment of water usage, conservation practices, wastewater treatment efficiency, and compliance with water pollution control measures.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Environmental Audit Types Section End -->

        <!-- Audit Process Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Methodology</span>
                    <h2 class="title">Environmental Audit Process & Approach</h2>
                    <div class="desc mt-10">Our systematic audit methodology ensures comprehensive evaluation and actionable recommendations</div>
                </div>
                
                <div class="row gutter-40">
                    <!-- Pre-Audit Planning -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Pre-Audit Planning & Scoping</h4>
                                <p class="desc">Comprehensive preparation phase involving scope definition, document review, regulatory framework analysis, and audit team preparation to ensure focused and effective auditing.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Regulatory requirement mapping</li>
                                    <li>Document and record review</li>
                                    <li>Site-specific risk assessment</li>
                                    <li>Audit protocol development</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- On-site Assessment -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">On-site Assessment & Data Collection</h4>
                                <p class="desc">Detailed field verification, facility inspection, stakeholder interviews, and data collection to assess actual environmental performance and compliance status.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Physical facility inspection</li>
                                    <li>Employee interviews & surveys</li>
                                    <li>Process & system evaluation</li>
                                    <li>Environmental parameter testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Gap Analysis -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Gap Analysis & Risk Assessment</h4>
                                <p class="desc">Systematic identification of compliance gaps, environmental risks, and performance deficiencies against applicable standards and best practices.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Non-compliance identification</li>
                                    <li>Environmental risk evaluation</li>
                                    <li>Performance benchmarking</li>
                                    <li>Root cause analysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Reporting & Recommendations -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Reporting & Action Planning</h4>
                                <p class="desc">Comprehensive audit report with findings, recommendations, corrective action plans, and implementation timelines for continuous environmental improvement.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Detailed audit findings report</li>
                                    <li>Prioritized corrective actions</li>
                                    <li>Implementation roadmap</li>
                                    <li>Follow-up audit planning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Audit Process Section End -->

        <!-- Benefits Section Start -->
        <div class="rs-services style2 gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Value Addition</span>
                    <h2 class="title">Benefits of Environmental Audits</h2>
                    <div class="desc mt-10">Environmental audits provide multiple benefits beyond compliance, driving operational excellence and sustainability</div>
                </div>

                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to environmental laws and avoid penalties, legal issues, and regulatory enforcement actions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cost Optimization -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Cost Optimization</h4>
                                <p class="desc">Identify resource conservation opportunities, waste reduction potential, and operational efficiency improvements.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Risk Mitigation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Risk Mitigation</h4>
                                <p class="desc">Proactive identification and management of environmental risks, reducing potential liability and reputation damage.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sustainability Goals -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Sustainability Goals</h4>
                                <p class="desc">Support achievement of corporate sustainability objectives and environmental performance targets.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with comprehensive Environmental Audit services?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a> 
                    </button>
                    <div class="text-white">With experienced environmental auditors and sector-specific expertise, {{env('SITENAME')}} provides independent, data-driven environmental audits that help organizations achieve regulatory compliance, operational efficiency, and sustainability goals. Our comprehensive audit approach ensures actionable insights for continuous environmental improvement.</div>
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
/* Custom styles for environmental audits page */
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