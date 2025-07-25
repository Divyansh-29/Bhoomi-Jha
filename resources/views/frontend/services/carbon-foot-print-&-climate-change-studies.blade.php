```html
@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/carbon-footprint-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Carbon Footprint & Climate Change Studies</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Carbon Footprint & Climate Change Studies</li>
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
                                <img src="{{asset('assets/images/carbon-footprint-img.webp')}}" alt="Carbon Footprint & Climate Change Studies">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Carbon Footprint & Climate Change Studies
                                </h2>
                                <div class="desc pb-35">
                                    Climate change is a global challenge—and carbon emissions are at the core of it. As regulatory bodies, investors, and communities demand more sustainable and low-carbon practices, measuring and managing your carbon footprint has become a business imperative.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}, </strong>we provide comprehensive carbon footprint assessments and climate change risk analysis to help organizations align with net-zero goals, ESG frameworks, and international protocols.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Our services empower you to quantify your greenhouse gas emissions, understand climate-related risks, and develop actionable strategies for decarbonization and long-term resilience.
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
                    <h2 class="title">Carbon Footprint & Climate Change Services</h2>
                    <div class="desc mt-10">Strategic solutions for measuring, managing, and mitigating climate impact</div>
                </div>
                <div class="row gutter-40">
                    <!-- Carbon Footprint Assessment -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/carbon-assessment-icon.png') }}" alt="Carbon Footprint Assessment Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Carbon Footprint Assessment</h4>
                                <p class="desc">Comprehensive quantification of your organization's greenhouse gas (GHG) emissions.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>GHG emissions inventory (Scope 1, Scope 2 & Scope 3)</li>
                                    <li>Emission calculations as per ISO 14064, GHG Protocol, and IPCC guidelines</li>
                                    <li>Sector-specific emission factors and lifecycle analysis</li>
                                    <li>Identification of major emission sources and hotspots</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Climate Risk & Vulnerability Studies -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/climate-risk-icon.png') }}" alt="Climate Risk & Vulnerability Studies Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Climate Risk & Vulnerability Studies</h4>
                                <p class="desc">Evaluation of physical and transition risks posed by climate change to your operations.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Assessment of climate-related physical and transition risks</li>
                                    <li>Analysis in accordance with TCFD (Task Force on Climate-Related Financial Disclosures)</li>
                                    <li>Vulnerability mapping and impact assessment</li>
                                    <li>Resilience planning for long-term sustainability</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Decarbonization Roadmaps -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/decarbonization-icon.png') }}" alt="Decarbonization Roadmaps Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Decarbonization Roadmaps</h4>
                                <p class="desc">Development of strategic plans to reduce emissions and achieve net-zero targets.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Identification of emission hotspots and reduction strategies</li>
                                    <li>Energy efficiency improvement plans</li>
                                    <li>Renewable energy integration strategies</li>
                                    <li>Net-zero strategy formulation and monitoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sustainability & ESG Reporting -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/esg-reporting-icon.png') }}" alt="Sustainability & ESG Reporting Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Sustainability & ESG Reporting</h4>
                                <p class="desc">Integration of climate data into broader sustainability and ESG frameworks.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Integration of carbon footprint data into ESG/CSR/sustainability reports</li>
                                    <li>Support for Science Based Targets (SBTi) and regulatory disclosures</li>
                                    <li>Alignment with GRI, SASB, and other reporting standards</li>
                                    <li>Communication of climate performance to stakeholders</li>
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
                    <h2 class="title">Carbon Footprint & Climate Change Study Process</h2>
                    <div class="desc mt-10">Systematic methodology to ensure accurate and actionable climate insights</div>
                </div>
                <div class="row gutter-40">
                    <!-- Data Collection & Inventory -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Data Collection & GHG Inventory</h4>
                                <p class="desc">Gathering activity data and establishing the baseline for emissions calculation.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Identification of operational boundaries and emission sources</li>
                                    <li>Collection of activity data (fuel consumption, electricity usage, etc.)</li>
                                    <li>Application of appropriate emission factors (IPCC, DEFRA, etc.)</li>
                                    <li>Calculation of Scope 1, 2, and 3 emissions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Risk Assessment -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Climate Risk Assessment</h4>
                                <p class="desc">Analyzing potential climate-related threats and vulnerabilities.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Identification of relevant physical and transition risks</li>
                                    <li>Scenario analysis for different climate futures</li>
                                    <li>Assessment of potential financial and operational impacts</li>
                                    <li>Gap analysis against TCFD recommendations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Strategy Development -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Strategy & Roadmap Development</h4>
                                <p class="desc">Creating a tailored plan for emission reduction and climate resilience.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Prioritization of mitigation and adaptation measures</li>
                                    <li>Development of short, medium, and long-term action plans</li>
                                    <li>Setting science-based targets (optional)</li>
                                    <li>Integration with business strategy and investment planning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Reporting & Communication -->
                    <div class="col-lg-6 col-md-12 mb-40">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Reporting & Communication</h4>
                                <p class="desc">Documenting findings and effectively communicating climate performance.</p>
                                <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                    <li>Preparation of detailed GHG inventory reports</li>
                                    <li>Development of climate risk and strategy disclosures</li>
                                    <li>Formatting for ESG reports, CDP submissions, or public disclosures</li>
                                    <li>Support in stakeholder engagement and communication</li>
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
                    <h2 class="title">Benefits of Our Climate Change Services</h2>
                    <div class="desc mt-10">Expert analysis drives informed decisions and sustainable growth</div>
                </div>
                <div class="row gutter-40">
                    <!-- Regulatory Compliance -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Regulatory Readiness</h4>
                                <p class="desc">Ensure compliance with evolving climate regulations and reporting mandates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Risk Mitigation -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Risk Mitigation</h4>
                                <p class="desc">Proactively identify and manage climate-related risks to protect your business.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Stakeholder Confidence -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Stakeholder Confidence</h4>
                                <p class="desc">Demonstrate commitment to sustainability and transparency to investors, customers, and communities.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Strategic Advantage -->
                    <div class="col-lg-3 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content">
                                <h4 class="title">Strategic Advantage</h4>
                                <p class="desc">Gain a competitive edge through improved resource efficiency and future-proofed operations.</p>
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you with Carbon Footprint & Climate Change Studies?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">With extensive experience in environmental impact assessment and sustainability frameworks, {{env('SITENAME')}} provides expert services to quantify your carbon footprint, assess climate risks, and develop robust decarbonization strategies. Our dedicated team ensures accuracy, compliance, and strategic value for your organization.</div>
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
/* Custom styles for carbon footprint page - Reusing existing service page styles with minor adjustments */
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
```