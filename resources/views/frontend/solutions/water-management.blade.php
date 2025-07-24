@extends('frontend.layout.base')
@section('content')
    <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/effluent-treatment-plant.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Water Management</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="sewage-treatment-plant/index.html">Home</a>
                    </li>
                    <li>Solutions /</li>
                    <li>Water Management</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <h2 class="title pb-20">
                                    Water Management: Ensuring Responsible Resource Use
                                </h2>
                                <div class="desc pb-20">
                                    Effective water management is critical for sustainability, resource conservation, and regulatory compliance. With increasing demands on water resources, strict guidelines are in place to monitor and control water usage, particularly for industrial and commercial entities.
                                </div>

                                <h4 class="pb-20">
                                    Mandatory Flow Monitoring for Compliance
                                </h4>
                                <div class="desc pb-20">
                                    Various state and central statutory bodies mandate precise measurement of water flow at key points within facilities. This is essential for accurate record-keeping and robust compliance reporting. Key monitoring points include:
                                    <ul style="list-style: disc;">
                                        <li><strong>Inputs and Outputs of Treatment Plants:</strong> Measuring flow into and out of Sewage Treatment Plants (STPs) and Effluent Treatment Plants (ETPs).</li>
                                        <li><strong>Fresh and Groundwater Consumption:</strong> Tracking the intake of fresh water and the extraction of groundwater.</li>
                                        <li><strong>Treated Water Utilization:</strong> Monitoring the use of treated water for non-potable purposes such as gardening, flushing, and other internal processes.</li>
                                    </ul>
                                    <p>For all these measurements, electromagnetic flowmeters are the stipulated technology.</p>
                                </div>
                                <h4 class="pb-20 mb-4">
                                    Advanced Monitoring for Groundwater Extraction
                                </h4>
                                <div class="desc">
                                    For units extracting groundwater, additional requirements apply, especially for significant volumes:
                                    <ul style="list-style: disc;">
                                        <li><strong>Telemetry-Enabled Flowmeters:</strong> If groundwater extraction exceeds 10 KLD (kilo liters per day), all flowmeters used for this purpose must be telemetry-enabled. This allows for continuous, real-time monitoring and recording of water quantity, with detailed data automatically shared with relevant government departments.</li>
                                        <li><strong>Piezometer Installation:</strong> Beyond the 10 KLD threshold, units are also required to install a piezometer in a separate pit. This device continuously monitors and records the groundwater level of the aquifer from which water is being drawn, with data also being shared with concerned departments. This provides crucial insights into the impact of extraction on local water tables.</li>
                                    </ul>
                                </div>    
                                <h4 class="pb-20 mb-4">The Imperative of Water Audits</h4>                            
                                <p>To promote efficient groundwater utilization and management, the Central Pollution Control Board (CPCB) introduced mandatory <strong>water audit guidelines in September 2020</strong>.</p>
                                <ul style="list-style: disc;">
                                    <li>Annual Water Audit Reports: If a unit's groundwater extraction limit exceeds 100 KLD, it is mandatory to undertake an annual water audit. These audits must be conducted by certified auditors from reputable organizations such as the Confederation of Indian Industries (CII), Federation of Indian Chambers of Commerce and Industry (FICCI), or the National Productivity Council (NPC). The audit report must accompany the unit's application for groundwater abstraction.</li>
                                    <li>Groundwater Reduction Targets: A significant directive from these guidelines is the requirement for industries exceeding the 100 KLD limit to commit to reducing their groundwater extraction by at least 20% over the next three years. This emphasizes a move towards greater water efficiency and sustainability.</li>
                                </ul>

                                <h4 class="pb-20 mb-4">Consequences of Non-Compliance</h4>                            
                                <p>Failing to comply with any of these stipulated requirements can lead to serious repercussions. Non-compliance may result in the issuance of show cause notices and the levying of penalties on the violating units, highlighting the regulatory bodies' commitment to enforcing responsible water management practices.</p>                                
                            </div>                            
                        </div>
                    </div> 
                    
                    <div class="col-lg-6">
                        <img class="top" src="{{asset('assets/images/water-manage.png')}}" alt="">
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you meet your Water Measurement and Control related needs?</p>
                    <button class="readon learn-more submit  mb-30  mt-30">Contact Our Business Team</button>
                    <div class="text-white">Contact Us
                        With an in-depth knowledge about various regulatory compliances, knowhow of the environmental products and solutions related market in India and partnerships with manufacturers of best of the class products, {{env('SITENAME')}} helps you choose and integrate the most optimal products for your water measurement, monitoring and compliance needs.</div>
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
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo25.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo26.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo27.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/client-logo13.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo28.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo15.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo22.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo23.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo18.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="pricing-table">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo19.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo20.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pricing-table new-style2">
                            <img src="wp-content/themes/aplinkatheme/assets/images/partner/ec-logo21.jpg" alt="">
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
                                <form action="sewage-treatment-plant.html#wpcf7-f65-o1" method="post"
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