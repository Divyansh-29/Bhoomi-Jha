```html
@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/form-v-compliance-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Annual Environmental Statement (Form-V)</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Annual Environmental Statement (Form-V)</li>
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
                                <img src="{{asset('assets/images/form-v-compliance-img.webp')}}" alt="Annual Environmental Statement (Form-V)">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Annual Environmental Statement (Form-V)
                                </h2>
                                <div class="desc pb-35">
                                    Under Rule 14 of the <strong>Environmental (Protection) Rules, 1986</strong>, every industry operating under consent from the <strong>State Pollution Control Board (SPCB)</strong> is required to submit an <strong>Annual Environmental Statement in Form-V format</strong> by <strong>September 30</strong> each year for the previous financial year.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we assist industries in the accurate preparation and timely submission of Form-V in compliance with statutory requirements.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our services ensure meticulous compilation of environmental performance data, adherence to prescribed formats, and timely submission to the relevant SPCB. We help you maintain regulatory compliance, avoid penalties, and demonstrate your commitment to environmental stewardship through accurate and comprehensive reporting.
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
                    <h2 class="title">Form-V Compliance Services</h2>
                    <div class="desc mt-10">End-to-end solutions for accurate and timely Form-V submission</div>
                </div>
                <div class="row gutter-40">
                    <!-- Data Collection & Review -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/data-collection-icon.png') }}" alt="Data Collection & Review Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Data Collection & Review</h4>
                                <p class="desc">Systematic gathering and verification of environmental performance data for the financial year.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Collection of effluent discharge and emission monitoring data</li>
                                    <li>Compilation of hazardous and solid waste generation/disposal records</li>
                                    <li>Review of raw material consumption and energy usage data</li>
                                    <li>Verification of SPCB consent conditions and compliance status</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Form-V Preparation -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/documentation-icon.png') }}" alt="Form-V Preparation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Form-V Preparation</h4>
                                <p class="desc">Accurate completion of the Form-V template as per SPCB guidelines and latest amendments.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Filling out prescribed Form-V format meticulously</li>
                                    <li>Incorporating data on air, water, and land pollution control</li>
                                    <li>Detailing waste management practices and disposal methods</li>
                                    <li>Providing information on environmental audits and monitoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Supporting Documentation -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/supporting-docs-icon.png') }}" alt="Supporting Documentation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Supporting Documentation</h4>
                                <p class="desc">Compilation and organization of all necessary supporting documents and records.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Gathering monitoring reports and laboratory analysis certificates</li>
                                    <li>Collecting waste disposal receipts and vendor consents</li>
                                    <li>Compiling maintenance records for pollution control equipment</li>
                                    <li>Organizing renewal certificates and compliance registers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Quality Assurance -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/quality-assurance-icon.png') }}" alt="Quality Assurance & Review Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Quality Assurance & Review</h4>
                                <p class="desc">Thorough checking and validation to ensure accuracy and completeness before submission.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Cross-verification of data against source records</li>
                                    <li>Review for adherence to Form-V format and guidelines</li>
                                    <li>Checking calculations and unit conversions</li>
                                    <li>Final quality check and approval preparation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!-- Submission & Follow-up -->
                     <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/submission-icon.png') }}" alt="Submission & Follow-up Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Submission & Follow-up</h4>
                                <p class="desc">Timely submission of Form-V and supporting documents to the concerned SPCB.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Printing and physical submission (if required)</li>
                                    <li>Online submission through designated portals (where applicable)</li>
                                    <li>Obtaining submission acknowledgment and reference number</li>
                                    <li>Maintaining records and following up on any queries</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Advisory & Guidance -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/advisory-icon.png') }}" alt="Advisory & Guidance Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Advisory & Guidance</h4>
                                <p class="desc">Expert advice on environmental compliance and best practices for ongoing operations.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Interpretation of SPCB guidelines and Form-V requirements</li>
                                    <li>Recommendations for improving environmental performance</li>
                                    <li>Guidance on maintaining compliance registers and records</li>
                                    <li>Updates on regulatory changes affecting Form-V submission</li>
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
                    <h2 class="title">Form-V Preparation & Submission Process</h2>
                    <div class="desc mt-10">Systematic methodology to ensure accurate and timely compliance reporting</div>
                </div>
                <div class="row gutter-40">
                    <!-- Pre-Reporting -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Preparation Phase</h4>
                                <p class="desc">Setting the foundation for an efficient Form-V compilation process.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Review of SPCB consent conditions and Form-V requirements</li>
                                    <li>Identification of data sources and responsible personnel</li>
                                    <li>Creation of a checklist and timeline for data collection</li>
                                    <li>Coordination with laboratories and waste vendors for reports</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Data Compilation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Data Compilation & Entry</h4>
                                <p class="desc">Organizing collected data and entering it into the Form-V format.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Compilation of monitoring data and waste records</li>
                                    <li>Data entry into the prescribed Form-V template</li>
                                    <li>Incorporation of supporting document references</li>
                                    <li>Drafting of narrative responses where required</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Review & Validation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Review & Validation</h4>
                                <p class="desc">Ensuring accuracy, completeness, and compliance of the prepared Form-V.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Internal review for data accuracy and consistency</li>
                                    <li>Verification against source documents and calculations</li>
                                    <li>Check for adherence to format and SPCB guidelines</li>
                                    <li>Incorporation of client feedback and final approvals</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Submission & Record Keeping -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Submission & Record Management</h4>
                                <p class="desc">Submitting the Form-V and maintaining records for future reference.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Printing and signing of Form-V as per requirements</li>
                                    <li>Submission to SPCB via designated channels</li>
                                    <li>Obtaining and archiving submission acknowledgment</li>
                                    <li>Updating compliance records and preparing for next cycle</li>
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
                    <h2 class="title">Benefits of Our Form-V Services</h2>
                    <div class="desc mt-10">Expert assistance ensures seamless compliance and risk mitigation</div>
                </div>
                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to Environmental (Protection) Rules, 1986 and SPCB requirements, avoiding penalties.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Timely Submission -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Timely Submission</h4>
                                <p class="desc">Meet the September 30 deadline with our structured approach, preventing late fees and complications.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accuracy & Quality -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Accuracy & Quality</h4>
                                <p class="desc">Minimize errors and ensure high-quality reporting through expert review and validation processes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Resource Optimization -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Resource Optimization</h4>
                                <p class="desc">Free up internal resources by outsourcing the complex Form-V preparation process to experts.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with Annual Environmental Statement (Form-V) submission?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in environmental compliance and regulatory frameworks, {{env('SITENAME')}} provides expert services to ensure your industry meets all Form-V submission requirements under the Environment (Protection) Act, 1986. Our dedicated team manages the entire process from data collection to final submission, guaranteeing accuracy and timeliness.</div>
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
/* Custom styles for Form-V compliance page - Reusing existing service page styles with minor adjustments */
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