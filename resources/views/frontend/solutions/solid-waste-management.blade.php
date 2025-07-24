@extends('frontend.layout.base')
@section('content')
    <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/solid-bg.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Solid Waste Management</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="sewage-treatment-plant/index.html">Home</a>
                    </li>
                    <li>Solutions /</li>
                    <li>Solid Waste Management</li>
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
                                    Solid Waste Management: A Growing Imperative
                                </h2>
                                <div class="desc pb-20">
                                    Waste—often synonymous with rubbish, garbage, trash, or refuse—is any non-liquid material that has lost its value to its owner. As populations expand and economies develop, the generation of solid waste continues to rise, making its effective management a persistent and significant challenge.
                                </div>

                                <h4 class="pb-20">
                                    Key Elements of a Waste Management System
                                </h4>
                                <div class="desc pb-20">
                                    A comprehensive waste management system encompasses several interconnected stages, ensuring waste is handled responsibly from its origin to its final disposal:
                                    <ul style="list-style: disc;">
                                        <li><strong>Waste Generation and Storage:</strong> This is where waste originates, whether in households, businesses, or industries, and how it's initially contained.</li>
                                        <li><strong>Segregation, Reuse, and Recycling (Household Level):</strong> Emphasizes the crucial role individuals play in sorting waste, finding new uses for items, and preparing materials for recycling right at the source.</li>
                                        <li><strong>Primary Waste Collection and Transportation:</strong> The initial pick-up of segregated waste from individual sources and its transport to local collection points.</li>
                                        <li><strong>Street Sweeping and Cleansing:</strong> Maintaining public hygiene by cleaning roads and other public spaces.</li>
                                        <li><strong>Management of Waste Storage Areas:</strong> Overseeing and maintaining designated sites where waste is temporarily held before further processing.</li>
                                        <li><strong>Secondary Collection and Transport to Disposal Site:</strong> Consolidating waste from primary collection points and transporting it to a treatment or disposal facility.</li>
                                        <li><strong>Waste Disposal:</strong> The final, environmentally sound placement of waste that cannot be further recycled or reused.</li>
                                        <li><strong>Collection, Transport, and Treatment of Recyclables:</strong> Dedicated processes for managing materials that can be reprocessed and reused at every stage of the waste pathway.</li>
                                    </ul>
                                    
                                </div>
                                <h4 class="pb-20 mb-4">
                                    Diverse Categories of Solid Wastes
                                </h4>
                                <div class="desc">
                                    Solid wastes aren't a single entity; they comprise various types, each requiring specific handling protocols due to their unique characteristics and potential risks:
                                    <ul style="list-style: disc;">
                                        <li><strong>Bio-Medical Waste (BMW)</strong>: This refers to any waste generated during the diagnosis, treatment, or immunization of humans or animals, as well as related research or biological production/testing. The priority for BMW is to minimize generation and maximize recovery rather than just disposal.</li>
                                        <li><strong>Municipal Solid Waste (MSW)</strong>: A heterogeneous mix typically found in urban environments, including paper, glass, metal, and other substances from residential, commercial, institutional, and industrial activities. Its quantity varies based on factors like dietary habits, living standards, commercial activity levels, and seasons.</li>
                                        <li><strong>Hazardous Waste</strong>: This category includes any waste that, due to its physical, chemical, biological, reactive, toxic, flammable, explosive, or corrosive characteristics, poses a danger or is likely to cause danger to health or the environment, either alone or in combination with other substances.</li>
                                        <li><strong>Radioactive Waste</strong>: Waste contaminated by radionuclides, including materials from radioactive diagnostics or radiotherapeutic applications.</li>
                                        <li><strong>E-Waste</strong>: Discarded electrical and electronic equipment, whether whole or in part, from consumers or bulk users, as well as rejects from manufacturing, refurbishment, and repair processes.</li>
                                        <li><strong>Plastic Waste</strong>: Materials containing high polymers like polyethylene, polypropylene, and various resins, discarded after their intended use.</li>
                                        <li><strong>Construction & Demolition Waste (C&D Waste)</strong>: This comprises building materials, debris, and rubble resulting from the construction, remodeling, repair, and demolition of any civil structure.</li>
                                    </ul>
                                </div>    
                                <h4 class="pb-20 mb-4">Regulatory Compliance and Environmental Protection</h4>                            
                                <p>For each type of solid waste, <strong>specific rules and regulations</strong> have been defined by statutory bodies. Strict adherence to these rules is paramount. The overarching objective is to <strong>protect the environment</strong> and ensure compliance with established legal frameworks. <strong>Non-compliance</strong> with applicable waste management rules can lead to severe consequences, including substantial penalties, underscoring the critical importance of responsible waste handling.</p>                                
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
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can help you meet your Solid Waste Management needs?</p>
                    <button class="readon learn-more submit  mb-30  mt-30">Contact Our Business Team</button>
                    <div class="text-white">Contact Us                        
                        With extensive expertise and strong team of well qualified and experienced technologists, {{env('SITENAME')}} is at the forefront for providing end to end solutions for Solid Waste Management including comprehensive waste management audits, gap analysis and follow-up action plans to bridge the gaps along with following best practices in a proactive manner.</div>
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