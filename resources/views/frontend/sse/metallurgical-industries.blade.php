@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        {{-- <div class="rs-breadcrumbs img1"
            style="background: linear-gradient(135deg, rgba(21, 110, 104, 0.85), rgba(13, 75, 70, 0.9)), url({{asset('assets/images/metallurgical-ec-banner-bg.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Clearance for Metallurgical Industries</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Metallurgical Industries EC</li>
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
                                <img src="{{asset('assets/images/metallurgical-ec-img.webp')}}" alt="Environmental Clearance for Metallurgical Industries" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Clearance for Metallurgical Industries (Ferrous & Non-Ferrous)
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Metallurgical industries</strong>, both <strong>ferrous (iron and steel)</strong> and <strong>non-ferrous (aluminium, copper, zinc, etc.)</strong>, involve high-temperature processes such as <strong>smelting, refining, sintering, and casting</strong>. These operations can significantly impact <strong>air quality, water resources, and soil</strong> due to emissions, solid waste, and effluents.
                                </div>
                                <div class="desc pb-35">
                                    As per <strong>Schedule 3(a)</strong> of the <strong>EIA Notification, 2006</strong>, all <strong>new metallurgical projects and expansions</strong> must obtain prior <strong>Environmental Clearance (EC)</strong> to ensure environmental safeguards are integrated into project planning and execution.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we provide expert consultancy services to guide metallurgical industry projects through the complex EC process, ensuring compliance with all regulatory requirements and facilitating sustainable operations.
                                </div>
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
                    <h2 class="title">Metallurgical Industries EC Services</h2>
                    <div class="desc mt-10">Comprehensive support for Environmental Clearance in the Metallurgical Sector</div>
                </div>
                <div class="row gutter-40">
                    <!-- Category 'A' EC -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <!-- SVG Icon for Category A -->
                                    <svg class="sector-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#156e68" stroke-width="1.5">
                                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                        <path d="M2 17l10 5 10-5" />
                                        <path d="M2 12l10 5 10-5" />
                                    </svg>
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Category 'A' EC for Metallurgical Industries</h4>
                                <p class="desc">End-to-end support for Category 'A' metallurgical projects requiring EC from the Ministry of Environment, Forest and Climate Change (MoEF&CC).</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Preparation and submission of detailed project reports</li>
                                    <li>Coordination with MoEF&CC and State Authorities</li>
                                    <li>Representation during technical committee meetings</li>
                                    <li>Post-clearance compliance and monitoring support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Category 'B' EC -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <!-- SVG Icon for Category B -->
                                    <svg class="sector-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#156e68" stroke-width="1.5">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                        <line x1="3" y1="9" x2="21" y2="9" />
                                        <line x1="9" y1="21" x2="9" y2="9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Category 'B' EC for Metallurgical Industries</h4>
                                <p class="desc">Complete assistance for Category 'B' metallurgical projects requiring EC from State Level Environmental Impact Assessment Authorities (SEIAAs).</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Project registration and documentation</li>
                                    <li>EIA/EMP report preparation and review</li>
                                    <li>Liaison with SEIAAs and Expert Appraisal Committees</li>
                                    <li>Support during public consultations and hearings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- EIA & EMP Reports -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <!-- SVG Icon for EIA/EMP -->
                                    <svg class="sector-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#156e68" stroke-width="1.5">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                        <line x1="16" y1="13" x2="8" y2="13" />
                                        <line x1="16" y1="17" x2="8" y2="17" />
                                        <polyline points="10 9 9 9 8 9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">EIA & EMP Reports for Metallurgical Industries</h4>
                                <p class="desc">Development of comprehensive Environmental Impact Assessment (EIA) and Environment Management Plan (EMP) reports tailored for metallurgical operations.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Baseline environmental studies (air, water, soil, noise, ecology)</li>
                                    <li>Prediction and assessment of impacts from emissions, effluents, and solid waste</li>
                                    <li>Formulation of mitigation measures for air, water, and soil pollution</li>
                                    <li>Stakeholder consultation and Social Impact Assessment (SIA)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Air & Water Pollution Control -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <!-- SVG Icon for Pollution Control -->
                                    <svg class="sector-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#156e68" stroke-width="1.5">
                                        <circle cx="12" cy="12" r="10" />
                                        <line x1="12" y1="8" x2="12" y2="12" />
                                        <line x1="12" y1="16" x2="12.01" y2="16" />
                                    </svg>
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Air & Water Pollution Control</h4>
                                <p class="desc">Specialized strategies for controlling emissions and effluents from metallurgical processes.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Assessment of stack and fugitive emissions (SOx, NOx, PM, heavy metals)</li>
                                    <li>Design of air pollution control systems (ESP, Bag Filters, Scrubbers)</li>
                                    <li>Development of effluent treatment plant (ETP) design basis</li>
                                    <li>Water recycling and zero liquid discharge (ZLD) strategies</li>
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
                    <h2 class="title">Metallurgical Industries EC Process</h2>
                    <div class="desc mt-10">Systematic methodology for obtaining Environmental Clearance for metallurgical projects</div>
                </div>
                <div class="row gutter-40">
                    <!-- Project Registration -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Project Registration & Categorization</h4>
                                <p class="desc">Initial steps to determine the correct category and register the metallurgical project with the appropriate authority.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Review of project details (metal type, capacity, technology, location)</li>
                                    <li>Determination of Category 'A' or 'B' based on production capacity</li>
                                    <li>Registration on PARIVESH portal</li>
                                    <li>Preparation of Terms of Reference (ToR) for EIA (if required)</li>
                                </ul>
                                <div class="process-step-indicator">
                                    <div class="step-number">1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EIA/EMP Preparation -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">EIA/EMP Report Preparation</h4>
                                <p class="desc">Conducting detailed studies and compiling the Environmental Impact Assessment and Management Plan reports specific to metallurgical industries.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Comprehensive baseline studies including air, water, noise, and ecology</li>
                                    <li>Specialized impact assessment for emissions, effluents, and hazardous waste</li>
                                    <li>Stakeholder consultation and public hearing facilitation</li>
                                    <li>Formulation of detailed EMP with mitigation, monitoring, and Emergency Response Plan</li>
                                </ul>
                                <div class="process-step-indicator">
                                    <div class="step-number">2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Application Submission -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Application & Document Submission</h4>
                                <p class="desc">Compiling and submitting the complete EC application package to the relevant authority.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Preparation of EC application form and checklist</li>
                                    <li>Compilation of EIA/EMP report, Forest Clearance documents, etc.</li>
                                    <li>Online submission through PARIVESH portal</li>
                                    <li>Physical submission of hard copies (if required)</li>
                                </ul>
                                <div class="process-step-indicator">
                                    <div class="step-number">3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Appraisal & Clearance -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Appraisal Committee & Final Clearance</h4>
                                <p class="desc">Support during the appraisal process and obtaining the final Environmental Clearance order.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Representation before State or Central Expert Appraisal Committees</li>
                                    <li>Addressing queries and providing clarifications</li>
                                    <li>Follow-up on appraisal recommendations</li>
                                    <li>Receipt of final EC order and post-clearance conditions</li>
                                </ul>
                                <div class="process-step-indicator">
                                    <div class="step-number">4</div>
                                </div>
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
                    <h2 class="title">Benefits of Our Metallurgical Industries EC Services</h2>
                    <div class="desc mt-10">Expert assistance ensures seamless compliance and project success</div>
                </div>
                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100 d-flex flex-column align-items-center text-center">
                            <div class="services-content flex-grow-1">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Ensure adherence to MoEF&CC guidelines and EIA Notification, 2006, avoiding legal complications.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Timely Clearance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100 d-flex flex-column align-items-center text-center">
                            <div class="services-content flex-grow-1">
                                <h4 class="title">Timely Clearance</h4>
                                <p class="desc">Minimize project delays with our structured approach ensuring applications are processed efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Risk Mitigation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100 d-flex flex-column align-items-center text-center">
                            <div class="services-content flex-grow-1">
                                <h4 class="title">Risk Mitigation</h4>
                                <p class="desc">Early identification and proactive management of potential environmental and social risks.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Expert Representation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100 d-flex flex-column align-items-center text-center">
                            <div class="services-content flex-grow-1">
                                <h4 class="title">Expert Representation</h4>
                                <p class="desc">Benefit from our experienced team's representation before regulatory committees and authorities.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you obtain Environmental Clearance for your Metallurgical Industry Project?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in metallurgical sector environmental clearances, {{env('SITENAME')}} provides expert services to ensure your project meets all regulatory requirements. Our dedicated team manages the entire EC process from initial registration to final clearance, guaranteeing accuracy and timeliness.</div>
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
/* Custom styles for metallurgical EC page - Reusing Mineral Beneficiation EC styles with minor adjustments */
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

/* Benefits Section - Simplified without icons */
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