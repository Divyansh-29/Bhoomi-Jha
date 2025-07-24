@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/Consent-bg.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Consent to Establish and Operate</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="environmental-clearance/index.html">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Consent to Establish and Operate</li>
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
                                <img src="{{asset('assets/images/consent.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Consent to Establish and Operate: A Regulatory Requirement
                                </h2>
                                <div class="desc pb-35">
                                    In India, industries and operations with potential environmental impacts are mandated to obtain specific consents under the <strong>Water (Prevention and Control of Pollution) Act, 1974</strong> and the <strong>Air (Prevention and Control of Pollution) Act, 1981</strong>. These legislations collectively aim to prevent and control water and air pollution.
                                </div>
                                <div class="desc pb-35">                                    
                                    Any industrial or operational unit, including expansions or additions to existing ones, that is likely to <strong>discharge sewage or trade effluent</strong> into water bodies or the environment, or <strong>emit any air pollutants</strong> into the atmosphere, must secure "Consent to Establish" and "Consent to Operate" from the respective <strong>State Pollution Control Board (SPCB)</strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="desc pb-35 text-sm text-primary">Consent to Establish (CTE)</div>                   
                        <p class="desc pb-35">
                            The <strong>Consent to Establish (CTE)</strong> is a prerequisite for any new industrial or operational setup. It must be obtained <strong>before the commencement of any construction activities</strong> at the project site. This consent is generally a <strong>one-time activity</strong>, signifying the SPCB's approval of the proposed project's design and environmental safeguards at the foundational stage.
                        </p>
                        <div class="desc pb-35 text-sm text-primary">Consent to Operate (CTO)</div>                   
                        <p class="desc pb-35">                            
                            Upon successful completion of construction work, adhering to all the norms and conditions stipulated in the CTE, the company is required to <strong>inform the SPCB</strong> and apply for <strong>Consent to Operate (CTO)</strong>. The SPCB then conducts an official inspection to verify compliance. A CTO is granted for a defined period, contingent upon a successful inspection and the company's adherence to all conditions outlined in the CTE.
                        </p>

                        <p class="desc pb-35">
                            Once the CTO is granted, the company can commence its operations. It is then legally bound to abide by all the operating conditions specified in the CTO. This includes performing regular environmental audits as per the CTO conditions and submitting compliance reports to the SPCB on a consistent basis. This ongoing reporting mechanism ensures continuous adherence to environmental regulations and helps avoid penalties. The CTO also requires periodic renewal before its expiration date to ensure continued compliance
                        </p>
                        <div class="desc pb-35">
                            The overall process for obtaining CTE, CTO, conducting compliance audits, and renewals generally follows a similar framework. However, minor variations may exist depending on the specific state where the company is located, its nature of operation, and its categorization based on pollution potential.
                        </div>
                        <div class="desc pb-35 text-sm text-primary">Key Considerations for Applicants:</div>                                           
                    </div>

                    <div class="col-lg-12">
                        <h3 class="title title-2">
                            Factors to be considered while applying for CTE:
                        </h3>
                        <ul style="list-style: disc; padding: 0px 26px;">
                            <li>Project type and scale</li>
                            <li>Location and surrounding environment</li>
                            <li>Raw materials and processes involved</li>
                            <li>Expected wastewater discharge and air emissions</li>
                            <li>Proposed pollution control measures (ETP, STP, APC equipment)</li>
                            <li>Water balance and resource consumption</li>
                            <li>Waste generation and disposal methods</li>
                            <li>Compliance with environmental standards and regulations</li>
                        </ul>
                    </div>

                    <div class="col-lg-12">
                        <h3 class="title title-2">
                            Factors to be considered while applying for CTO:
                        </h3>
                        <ul style="list-style: disc; padding: 0px 26px;">
                            <li>Completion of construction as per CTE conditions</li>
                            <li>Installation and functionality of pollution control equipment</li>
                            <li>Operational efficiency of environmental management systems</li>
                            <li>Compliance with all specific conditions mentioned in the CTE</li>
                            <li>Readiness to monitor and report environmental parameters</li>
                            <li>Waste management procedures in place</li>                           
                        </ul>
                    </div>

                    <div class="col-lg-12">
                        <h3 class="title title-2">
                            Factors to be considered while applying for renewal of CTO:
                        </h3>
                        <ul style="list-style: disc; padding: 0px 26px;">
                            <li>Track record of compliance with previous CTO conditions</li>
                            <li>Results of past compliance audits and monitoring reports</li>
                            <li>Any changes in process or production capacity</li>
                            <li>Effectiveness of existing pollution control measures</li>
                            <li>Adherence to new environmental norms or standards (if any)</li>
                            <li>Payment of applicable fees</li>
                        </ul>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">
                        Would You Like to know more on how {{env('SITENAME')}} can help you meet your CGWA needs?</p>
                    <button class="readon learn-more submit  mb-30  mt-30"><a href="{{route('contact-us')}}"
                            class="text-white">Contact Us</a> </button>
                    <div class="text-white">With extensive expertise and strong team of well qualified and experienced technologists, {{env('SITENAME')}} is at the forefront for providing end to end solutions for Central Ground Water Clearance including hydro geological studies needs as per bylaws, exploring on campus and off campus options for compensating for the ground water used. {{env('SITENAME')}} has been providing CGWA services at a Pan India level and completed more than 1000 such cases across several states in India.</div>
                </div>
            </div>
        </div>
        <hr>
        <!-- Pricing section start -->
        {{-- <div class="rs-pricing style2 gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title title2">
                        Trusted By
                    </h2>
                    <div class="desc pb-30 text-dark" style="font-weight:600;">
                        With great work comes great clients. Here are few of them</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo30.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/client-logo22.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo17.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/ec-logo31.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo24.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo5.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo9.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/client-logo7.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo24.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo3.jpg')}}" alt="">
                        </div>
                    </div>                    
                </div>
            </div>
        </div> --}}
        <!-- Pricing section end -->
        <!-- Counter Section Start -->
        <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80" style="    background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat;
            background-size: cover;">
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
                                <div class="desc pb-10">All our efforts are towards helping create a sustainable
                                    environment. </div>
                                <div class="desc pb-10">However, this depends on YOU too. </div>
                                <div class="desc pb-10"> Let us know how we can work together towards this noble cause
                                </div>
                                <div class="desc pb-10"> We are eager to hear back from YOU </div>
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
                                <form action="environmental-clearance.html#wpcf7-f65-o1" method="post"
                                    class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                                    data-status="init">
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
@endsection