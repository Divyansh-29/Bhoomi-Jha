@extends('frontend.layout.base')
@section('content')
    <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/effluent-treatment-plant.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Effluent Treatment Plant</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="sewage-treatment-plant/index.html">Home</a>
                    </li>
                    <li>Solutions /</li>
                    <li>Effluent Treatment Plant</li>
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
                                    Effluent Treatment Plant
                                </h2>
                                <div class="desc pb-20">
                                    Effluent Treatment Plants (ETPs) are crucial for managing industrial wastewater. As industrialization, urbanization, and population grow, ETPs are becoming indispensable for both resource conservation and public health and safety.
                                </div>

                                <h4 class="pb-20">
                                    What is an Effluent Treatment Plant?
                                </h4>
                                <div class="desc pb-20">
                                    An ETP is a facility specifically designed to treat industrial wastewater, making it suitable for reuse or safe discharge into the environment. These plants use various processes to act as barriers, eliminating different types of waste and chemical contaminants. The untreated industrial wastewater entering the ETP is called influent, and the treated water leaving it is known as effluent. The waste extracted during the treatment process is referred to as sludge.
                                </div>
                                <h4 class="pb-20 mb-4">
                                    Why Are ETPs Essential?
                                </h4>
                                <div class="desc">
                                    ETPs offer significant benefits:
                                    <ul>
                                        <li><strong>Recycling and Reuse:</strong> ETPs clean industrial effluent, enabling its reuse within the industry, which helps conserve fresh water resources.</li>
                                        <li><strong>Reduced Water Costs:</strong> By recycling water, industries can significantly cut down on the costs associated with procuring fresh, potable water.</li>
                                        <li><strong>Regulatory Compliance:</strong> ETPs help industries meet strict government standards for pollutant emissions and discharge, avoiding compliance-related issues and environmental penalties.</li>
                                        <li><strong>Environmental Protection:</strong> By treating industrial wastewater, ETPs safeguard the environment from pollution and contribute to sustainable development.</li>
                                    </ul>
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
        <div class="rs-team pt-80 pb-80 md-pt-80 md-pb-80 xs-pb-54"
            style="background: linear-gradient(135deg, #177169, #45dfac);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="pb-20 ledtxt dark-txt">A typical ETP operates through several stages to progressively purify industrial wastewater:</div>                    
                    <div class="col-lg-6">
                        <div class="sec-title mb-30">
                            <div class="desc pb-30 dark-txt">
                                <strong>Preliminary Stage</strong> <br>
                                <p>This initial stage focuses on physically separating large impurities:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Screening and Sedimentation:</strong> Techniques like screening and sedimentation are used to remove big-sized items such as threads, cloth, plastics, wood logs, and other foreign objects.</li>
                                </ul>
                            </div>
                            <div class="desc pb-30 dark-txt">
                                <strong>Primary Stage</strong> <br>
                                <p>This stage targets the removal of floating and settleable materials:</p> 
                                <ul style="list-style:disc;">
                                    <li><strong>Physical and Chemical Methods</strong>: This involves a combination of physical processes with chemical additions. Chemical processes are used for pH control, coagulation, chemical precipitation, and oxidation, altering the wastewater's quality.</li>
                                </ul>
                            </div>

                            <div class="desc pb-30 dark-txt">
                                <strong>Secondary Stage</strong> <br>
                                <p>This stage primarily utilizes biological and additional chemical processes:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Biological Treatment</strong>: Most biological processes here rely on microorganisms, mainly bacteria. These can be aerobic (requiring oxygen) or anaerobic (without oxygen), breaking down organic matter in the wastewater.</li>
                                </ul>
                            </div>

                            <div class="desc pb-30 dark-txt">
                                <strong>Tertiary Stage</strong> <br>
                                <p>The final cleaning process aims to further improve water quality before it's reused, recycled, or discharged:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Advanced Contaminant Removal</strong>: This stage removes remaining inorganic compounds and substances like nitrogen and phosphorus.</li>
                                    <li><strong>Pathogen Elimination</strong>: Harmful bacteria, viruses, and parasites that pose risks to public health are also removed at this stage, ensuring the treated effluent is safe for its intended use or discharge into the environment.</li>
                                </ul>
                            </div>
                            
                            <div class="desc dark-txt">
                                The treated water from this final stage can then be used for non-drinking purposes like agriculture and flushing, or safely returned to rivers, lakes, and streams, contributing to water reclamation.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="top" src="{{asset('assets/images/effluent-treatment.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="    background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Would You Like to know more on how {{env('SITENAME')}} can
                        help you meet your STP needs</p>
                    <button class="readon learn-more submit  mb-30  mt-30">Contact Our Business Team</button>
                    <div class="text-white">With extensive expertise and strong team of well qualified and experienced
                        technologists, {{env('SITENAME')}} is at the forefront for providing end to end solutions for Sewage
                        Treatment Plants. It has successfully designed, implemented, commissioned and operating sewage
                        treatment plants of varying capacities for a number of residential societies, institutions,
                        universities, hospitals and industries.</div>
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