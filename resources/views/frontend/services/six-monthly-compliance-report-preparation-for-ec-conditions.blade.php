@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/six-monthly-compliance-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Six-Monthly Compliance Report for Environmental Clearance (EC) Conditions</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Six-Monthly Compliance Report for EC Conditions</li>
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
                                <img src="{{asset('assets/images/six-monthly-compliance-img.webp')}}" alt="Six-Monthly Compliance Report for Environmental Clearance (EC) Conditions">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Six-Monthly Compliance Report for EC Conditions
                                </h2>
                                <div class="desc pb-35">
                                    As per the guidelines of the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong> and <strong>State Environmental Impact Assessment Authorities (SEIAAs)</strong>, all projects granted <strong>Environmental Clearance (EC)</strong> are mandated to submit six-monthly compliance reports (typically due in <strong>June & December</strong>) to ensure adherence to the stipulated environmental safeguards and conditions.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we provide comprehensive support for preparing and submitting these critical compliance reports, ensuring your project remains in good standing with regulatory authorities.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our services ensure accurate interpretation of EC conditions, meticulous data collection, and professional report preparation that meets the exacting standards of MoEF&CC and SEIAAs. We help you fulfill your compliance obligations efficiently and on time, minimizing risks and ensuring uninterrupted project operations.
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
                    <h2 class="title">Six-Monthly Compliance Reporting Services</h2>
                    <div class="desc mt-10">End-to-end solutions for timely and accurate EC compliance reporting</div>
                </div>
                <div class="row gutter-40">
                    <!-- Review of EC Conditions -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/ec-review-icon.png') }}" alt="Review of EC Letter & Conditions Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Review of EC Letter & Conditions</h4>
                                <p class="desc">Detailed analysis of the specific EC conditions applicable to your project to identify reporting requirements and compliance benchmarks.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>In-depth review of the EC order</li>
                                    <li>Identification of mandatory compliance conditions</li>
                                    <li>Creation of a compliance checklist and timeline</li>
                                    <li>Clarification of ambiguous conditions (if any)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Data Collection & Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/data-collection-icon.png') }}" alt="Data Collection & Field Monitoring Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Data Collection & Field Monitoring</h4>
                                <p class="desc">Coordination for environmental monitoring (air, water, soil, noise) and collection of other required parameters through NABL-accredited laboratories.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Scheduling and coordination of monitoring activities</li>
                                    <li>Engagement with certified laboratories</li>
                                    <li>Data collection for effluent discharge, emissions, hazardous waste, etc.</li>
                                    <li>On-site photography and documentation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Documentation & Compilation -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/documentation-icon.png') }}" alt="Documentation & Compilation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Documentation & Compilation</h4>
                                <p class="desc">Preparation of a condition-wise compliance matrix with supporting documents, photographs, analysis reports, and relevant approvals.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Compilation of monitoring data and lab reports</li>
                                    <li>Preparation of compliance matrices as per format</li>
                                    <li>Gathering of supporting approvals and permits</li>
                                    <li>Drafting of narrative explanations for compliance status</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- GIS & Remote Sensing -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/gis-icon.png') }}" alt="GIS & Remote Sensing Integration Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">GIS & Remote Sensing Integration</h4>
                                <p class="desc">Inclusion of maps, satellite imagery, and geospatial data for compliance verification, particularly for land use and green belt conditions.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Preparation of site location maps</li>
                                    <li>Satellite image analysis for land use changes</li>
                                    <li>GIS mapping for green belt development (if applicable)</li>
                                    <li>Spatial data integration for impact assessment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!-- Online Submission -->
                     <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/submission-icon.png') }}" alt="Online Uploads & Submission Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Online Uploads & Submission</h4>
                                <p class="desc">Timely submission of complete compliance reports to MoEF&CC/SEIAA/Regional Office through the PARIVESH Portal or designated email channels.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Formatting reports as per latest templates</li>
                                    <li>Uploading documents to PARIVESH portal</li>
                                    <li>Ensuring completeness and accuracy before submission</li>
                                    <li>Maintaining submission records and acknowledgments</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- RO Site Visit Support -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/site-visit-icon.png') }}" alt="Assistance During RO Site Visits Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Assistance During RO Site Visits</h4>
                                <p class="desc">Support during inspections and compliance verification by MoEF&CC Regional Office teams, including documentation and representation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Preparation for potential site visits</li>
                                    <li>Coordination and scheduling with inspection teams</li>
                                    <li>Providing project personnel for guided tours</li>
                                    <li>Addressing inspector queries and providing clarifications</li>
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
                    <h2 class="title">Six-Monthly Compliance Reporting Process</h2>
                    <div class="desc mt-10">Systematic methodology to ensure accurate and timely compliance reporting</div>
                </div>
                <div class="row gutter-40">
                    <!-- Pre-Reporting -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Pre-Reporting Phase</h4>
                                <p class="desc">Laying the groundwork for an efficient reporting cycle.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Review and update the EC condition checklist</li>
                                    <li>Plan monitoring schedules and data collection activities</li>
                                    <li>Engage with laboratories and coordinate field visits</li>
                                    <li>Assign responsibilities to project personnel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Data Gathering -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Data Gathering & Analysis</h4>
                                <p class="desc">Collecting and analyzing environmental performance data.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Conduct environmental monitoring as per schedule</li>
                                    <li>Receive and review laboratory analysis reports</li>
                                    <li>Verify data against EC condition limits and benchmarks</li>
                                    <li>Identify any non-compliance or exceedance issues</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Report Compilation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Report Compilation & Review</h4>
                                <p class="desc">Creating a comprehensive and accurate compliance report.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Compile data into the required format (condition-wise)</li>
                                    <li>Integrate supporting documents, photos, and GIS data</li>
                                    <li>Draft explanations for compliance status and any deviations</li>
                                    <li>Internal review and quality check of the complete report</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Submission & Follow-up -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Submission & Post-Submission</h4>
                                <p class="desc">Ensuring timely delivery and managing post-submission activities.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Submit the report via PARIVESH or designated channels</li>
                                    <li>Obtain submission acknowledgment and reference number</li>
                                    <li>Archive report and supporting documents</li>
                                    <li>Prepare for potential queries or site inspections</li>
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
                    <h2 class="title">Benefits of Our Compliance Reporting Services</h2>
                    <div class="desc mt-10">Expert assistance ensures seamless compliance and risk mitigation</div>
                </div>
                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to EC conditions and MoEF&CC guidelines, avoiding penalties and legal complications.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Timely Submission -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Timely Submission</h4>
                                <p class="desc">Avoid late fees and project disruptions with our structured approach ensuring reports are submitted well before deadlines.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Risk Mitigation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Risk Mitigation</h4>
                                <p class="desc">Early identification and proactive management of potential non-compliance issues to prevent escalation.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Operational Efficiency -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Operational Efficiency</h4>
                                <p class="desc">Streamline your compliance process, freeing up internal resources to focus on core project activities.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with Six-Monthly Compliance Reporting for your Environmental Clearance?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in environmental compliance and regulatory frameworks, {{env('SITENAME')}} provides expert services to ensure your project meets all mandated six-monthly reporting requirements. Our dedicated team manages the entire process from data collection to final submission, guaranteeing accuracy and timeliness.</div>
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
/* Custom styles for six-monthly compliance page - Reusing Forest Clearance styles with minor adjustments */
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