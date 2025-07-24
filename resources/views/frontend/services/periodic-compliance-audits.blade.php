@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/EPC-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Periodic Environmental Compliance Audits: A Strategic Approach</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="environmental-clearance/index.html">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Periodic Environmental Compliance Audits</li>
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
                                <img src="{{asset('assets/images/pca-img.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Periodic Environmental Compliance Audits: A Strategic Approach
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Periodic Environmental Compliance Audits</strong> are essential for organizations aiming to consistently meet diverse environmental regulatory standards and operate in a truly sustainable manner. These audits represent a planned, methodical, and regular evaluation designed to ensure ongoing adherence to environmental regulations and foster responsible resource management. While inherently <strong>tailored to the specific regulatory permissions</strong> granted to an organization—such as those related to water, air, waste, and groundwater abstraction—these audits also reflect a broader commitment to environmental stewardship and natural resource conservation.
                                </div>
                                <div class="desc pb-35">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                {{-- To navigate the EC process, project proponents are required to engage the services of a QCI-NABET (Quality Council of India - National Accreditation Board for Education and Training) certified consultant. These consultants are responsible for preparing a comprehensive Environmental Impact Assessment (EIA) report, which serves as the primary document for evaluating the project's environmental implications. --}}
                            </div>
                            
                            <div class="desc pb-20 fontbold">
                                The execution of these comprehensive audits typically involves a structured and multi-faceted approach:
                            </div>
                            <ul style="list-style: disc; padding: 0px 26px;">
                                <li><strong>Objective Definition:</strong> Collaborating closely with management to clearly define the specific goals and scope of the audit, ensuring alignment with both regulatory requirements and organizational sustainability objectives.</li>
                                <li><strong>Holistic Regulatory Review:</strong> A thorough examination of all environment-related permits, clearances, and consents issued by various regulatory agencies (e.g., MoEF&CC, SPCBs, CGWA). This involves understanding the interdependencies and cumulative requirements across all permissions.</li>                                
                                <li><strong>Documentation Scrutiny:</strong> Detailed review of all environmental records, reports, monitoring data, and operational logs to verify that documentation is being maintained accurately, completely, and in accordance with regulatory mandates.</li>                                
                                <li><strong>On-Ground Verification by Experts:</strong> Conducting meticulous physical inspections of facilities, processes, and pollution control systems by <strong>Subject Matter Experts (SMEs)</strong>. This critical step assesses the actual operational conditions against documented procedures and regulatory limits.</li>                                
                                <li><strong>Gap Analysis and Remediation: </strong> Identifying any discrepancies, non-conformities, or gaps between current practices and regulatory requirements. This includes providing actionable advice and practical recommendations for remediation and improvement, alongside suggesting best environmental practices.</li>                                
                                <li><strong>Standardization and Optimization: </strong>Assisting organizations in standardizing their environmental management efforts through the establishment of well-defined recording procedures, standardized reporting formats, timely submission of data, regular internal inspections, and robust feedback mechanisms.</li>                                
                                <li><strong>Technological and Methodological Suggestions:</strong> Proposing innovative and optimal technologies or methodologies that can lead to better environmental performance, greater efficiency in resource utilization, and enhanced compliance outcomes.</li>                                
                                <li><strong>Regulatory Intelligence and Updates:</strong> Providing timely information and insights on the latest environmental norms, regulations, amendments, and orders issued by relevant governmental departments. This service also includes guidance on how to effectively achieve compliance with these evolving requirements.</li>                                
                            </ul>
                            <div class="desc pb-35">
                                Organizations like {{env('SITENAME')}}  specialize in this domain, partnering with various institutions and large enterprises. Acting as an <strong>extended environmental wing</strong>, they provide critical subject matter expertise across a wide array of environmental services and audits.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="    background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Would you like to explore how {{env('SITENAME')}}  can further assist your organization in conducting robust periodic compliance audits and ensuring continuous adherence to the latest environmental regulations and statutory norms?</p>
                    <button class="readon learn-more submit  mb-30  mt-30"><a href="{{route('contact-us')}}"
                            class="text-white">Contact Us</a> </button>
                    <div class="text-white">With extensive expertise and strong team of well qualified and experienced Subject Matter Experts, {{env('SITENAME')}}  is well equipped to help you holistically evaluate your organizations performance towards all your environment needs through periodic audits. The model has been successfully implemented for several large corporates, industries and institutions. </div>
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
                            <img src="{{asset('assets/images/partner/ec-logo1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/ec-logo2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo5.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/ec-logo6.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo7.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo8.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/client-logo13.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/client-logo6.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo9.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="{{asset('assets/images/partner/ec-logo10.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="{{asset('assets/images/partner/ec-logo11.jpg')}}" alt="">
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