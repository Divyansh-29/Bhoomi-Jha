```html
@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/water-treatment-design-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Design & Engineering Services for STP, ETP & CPU</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Design & Engineering Services for STP, ETP & CPU</li>
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
                                <img src="{{asset('assets/images/water-treatment-design-img.webp')}}" alt="Design & Engineering Services for STP, ETP & CPU">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Design & Engineering Services for STP, ETP & CPU
                                </h2>
                                <div class="desc pb-35">
                                    We specialize in the comprehensive design and engineering of Sewage Treatment Plants (STPs), Effluent Treatment Plants (ETPs), and Condensate Polishing Units (CPUs) using cutting-edge, customized, and cost-effective technologies.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>our expert team delivers tailored water and wastewater treatment solutions that meet your specific requirements, ensuring optimal performance, regulatory compliance, and long-term sustainability.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our design and engineering services encompass the full project lifecycle, from conceptual design to detailed engineering and construction support. We leverage advanced technologies to create efficient, reliable, and scalable treatment systems that protect the environment and support your operational goals.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->
        
        <!-- Technologies Section Start -->
        <div class="rs-services style2 pt-40 pb-40 md-pt-40 md-pb-40">
            <div class="container">
                <div class="sec-title text-center mb-40">
                    <span class="sub-title">Core Technologies</span>
                    <h2 class="title">Advanced Treatment Technologies We Implement</h2>
                    <div class="desc mt-10">State-of-the-art solutions for efficient water and wastewater treatment</div>
                </div>
                <div class="row gutter-20">
                    <div class="col-lg-12">
                        <div class="services-item hover-bg" style="padding: 25px; text-align: center;">
                            <div class="services-content">
                                <div class="technology-list" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 15px;">
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ MBBR</strong><br>(Moving Bed Biofilm Reactor)
                                    </div>
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ SBR</strong><br>(Sequential Batch Reactor)
                                    </div>
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ ASP</strong><br>(Activated Sludge Process)
                                    </div>
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ MBR</strong><br>(Membrane Bio Reactor)
                                    </div>
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ UF/RO</strong><br>(Ultrafiltration/Reverse Osmosis)
                                    </div>
                                    <div class="tech-item" style="flex: 1 1 200px; min-width: 150px; padding: 15px; border: 1px solid #e8e8e8; border-radius: 8px; background: #f9f9f9;">
                                        <strong>✅ Tertiary Treatment & ZLD</strong><br>(Zero Liquid Discharge)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Technologies Section End -->
        
        <!-- Services Section Start -->
        <div class="rs-services style2 pt-40 pb-80 md-pt-40 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Our Service Offerings</span>
                    <h2 class="title">Water Treatment Design & Engineering Services</h2>
                    <div class="desc mt-10">Comprehensive solutions for sustainable water management</div>
                </div>
                <div class="row gutter-40">
                    <!-- STP Design -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/stp-design-icon.png') }}" alt="STP Design & Engineering Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Sewage Treatment Plant (STP) Design</h4>
                                <p class="desc">Customized engineering solutions for municipal and industrial sewage treatment.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Site analysis and feasibility studies</li>
                                    <li>Process selection based on influent characteristics and discharge requirements</li>
                                    <li>3D modeling and detailed engineering drawings</li>
                                    <li>Equipment specification and vendor evaluation support</li>
                                    <li>Construction supervision and commissioning assistance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ETP Design -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/etp-design-icon.png') }}" alt="ETP Design & Engineering Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Effluent Treatment Plant (ETP) Design</h4>
                                <p class="desc">Specialized treatment solutions for industrial effluents with complex contaminants.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Waste stream characterization and treatability studies</li>
                                    <li>Selection of appropriate physico-chemical and biological processes</li>
                                    <li>Sludge management and handling system design</li>
                                    <li>Automation and control system integration</li>
                                    <li>Performance optimization and upgrade recommendations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- CPU Design -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/cpu-design-icon.png') }}" alt="CPU Design & Engineering Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Condensate Polishing Unit (CPU) Design</h4>
                                <p class="desc">Advanced purification systems for boiler feed water and process water recovery.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>System design for removal of dissolved solids and contaminants</li>
                                    <li>Ion exchange and membrane technology integration</li>
                                    <li>Resin selection and regeneration system design</li>
                                    <li>Monitoring and control instrumentation</li>
                                    <li>Water balance and recycling optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Process Optimization -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/optimization-icon.png') }}" alt="Process Optimization Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Process Optimization & Retrofitting</h4>
                                <p class="desc">Enhancement of existing treatment systems for improved performance and efficiency.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Performance assessment of existing treatment facilities</li>
                                    <li>Identification of bottlenecks and improvement opportunities</li>
                                    <li>Design of retrofit solutions and capacity upgrades</li>
                                    <li>Implementation of energy-efficient technologies</li>
                                    <li>Integration of advanced monitoring and control systems</li>
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
                    <h2 class="title">Design & Engineering Process</h2>
                    <div class="desc mt-10">Systematic methodology for delivering robust and efficient treatment solutions</div>
                </div>
                <div class="row gutter-40">
                    <!-- Conceptual Design -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Conceptual Design & Feasibility</h4>
                                <p class="desc">Initial planning and evaluation phase to establish project parameters.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Site visits and data collection</li>
                                    <li>Analysis of influent characteristics and discharge standards</li>
                                    <li>Evaluation of alternative treatment technologies</li>
                                    <li>Preliminary cost estimation and project timeline</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Detailed Engineering -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Detailed Engineering & Design</h4>
                                <p class="desc">Comprehensive engineering development for construction and implementation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Process flow diagram (PFD) and piping & instrumentation diagram (P&ID)</li>
                                    <li>Equipment specifications and layout drawings</li>
                                    <li>Structural, mechanical, and electrical design</li>
                                    <li>Preparation of BOQ and technical documentation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Implementation Support -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Implementation & Commissioning</h4>
                                <p class="desc">Support during construction, installation, and system startup phases.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Construction supervision and quality control</li>
                                    <li>Equipment installation and integration support</li>
                                    <li>Performance testing and commissioning procedures</li>
                                    <li>Operator training and O&M manual development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Performance Monitoring -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Performance Monitoring & Optimization</h4>
                                <p class="desc">Ongoing support for system optimization and continuous improvement.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Performance evaluation and benchmarking</li>
                                    <li>Recommendations for operational improvements</li>
                                    <li>Preventive maintenance planning</li>
                                    <li>Technology upgrades and system enhancements</li>
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
                    <h2 class="title">Benefits of Our Design & Engineering Services</h2>
                    <div class="desc mt-10">Expert solutions for efficient and sustainable water treatment</div>
                </div>
                <div class="row gutter-40">
                    <!-- Customized Solutions -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Customized Solutions</h4>
                                <p class="desc">Tailored designs that address your specific treatment requirements and site conditions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Cost Effectiveness -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Cost Effectiveness</h4>
                                <p class="desc">Optimized designs that minimize capital and operational costs while maximizing performance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Compliance</h4>
                                <p class="desc">Systems designed to meet all applicable environmental regulations and discharge standards.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Long-term Reliability -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Long-term Reliability</h4>
                                <p class="desc">Robust designs and quality engineering for sustained performance and minimal downtime.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with Design & Engineering Services for STP, ETP & CPU?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in water and wastewater treatment technologies, {{env('SITENAME')}} provides expert design and engineering services to create efficient, compliant, and sustainable treatment solutions. Our dedicated team ensures innovative designs tailored to your specific requirements using the latest industry technologies.</div>
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
/* Custom styles for water treatment design page - Reusing existing service page styles with minor adjustments */
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
/* Technology list styling */
.technology-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 15px;
}
.tech-item {
    flex: 1 1 200px;
    min-width: 150px;
    padding: 15px;
    border: 1px solid #e8e8e8;
    border-radius: 8px;
    background: #f9f9f9;
    text-align: center;
    transition: all 0.3s ease;
}
.tech-item:hover {
    border-color: #156e68;
    background: #f0f8f7;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(21,110,104,0.1);
}
.tech-item strong {
    color: #156e68;
    display: block;
    margin-bottom: 5px;
}
</style>
@endsection