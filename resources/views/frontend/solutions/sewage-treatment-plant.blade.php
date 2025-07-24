@extends('frontend.layout.base')
@section('content')
    <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/water-treat-bg.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Sewage Treatment Plant</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="sewage-treatment-plant/index.html">Home</a>
                    </li>
                    <li>Solutions /</li>
                    <li>Sewage Treatment Plant</li>
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
                                    Sewage Treatment Plant
                                </h2>
                                <div class="desc pb-20">
                                    Sewage treatment plants (STPs) are vital facilities that play a crucial role in safeguarding public health and conserving precious water resources. With increasing global population, rapid urbanization, and rising pollution levels, STPs have become an absolute necessity.
                                </div>

                                <h4 class="pb-20">
                                    What is Sewage Treatment Plant ?
                                </h4>
                                <div class="desc pb-20">
                                    An STP is a sophisticated facility that employs a combination of physical, chemical, and biological processes to treat wastewater from sewage. These processes act as multiple barriers, effectively removing various types of waste and contaminants from the water.
                                </div>
                                <h4 class="pb-20 mb-4">
                                    Why Are STPs Essential?
                                </h4>
                                <div class="desc">
                                    There are several compelling reasons for the widespread adoption of STPs:
                                    <ul>
                                        <li><strong>Water Recycling and Reuse:</strong> STPs clean sewage, making the treated water suitable for various non-potable uses, such as agriculture, toilet flushing, and industrial processes. This significantly reduces the demand for fresh, potable water.</li>
                                        <li><strong>Cost Reduction:</strong> By recycling water, STPs help lower the costs associated with procuring fresh water, leading to economic benefits for industries and municipalities.</li>
                                        <li><strong>Environmental Compliance:</strong> STPs enable industries and other entities to meet stringent emission and discharge standards set by regulatory bodies like the CPCB (Central Pollution Control Board) and MoEF&CC (Ministry of Environment, Forest and Climate Change). This helps avoid penalties and ensures compliance.</li>
                                        <li><strong>Environmental Protection and Sustainable Development:</strong> By preventing the discharge of untreated sewage into natural water bodies, STPs protect the environment from pollution and contribute significantly to sustainable development efforts.</li>
                                    </ul>
                                </div>                                
                            </div>                            
                        </div>
                    </div>                    
                    <div class="col-lg-12">
                        <div class="sec-title mt-20">
                            <div class="pb-20 ledtxt">Some of the major reasons for using STP’s are:</div>
                            <ul style="list-style: disc; padding: 0px 26px;">
                                <li>To clean the sewage and recycle it for repeated or further usage</li>
                                <li>To reduce the usage of fresh / potable water.</li>
                                <li>To reduce the costs incurred on procurement of water</li>
                                <li>To meet the Standards for emission or discharge of environmental pollutants from
                                    various Industries set by the Government and avoid compliance related and
                                    environment compensation related penalties.</li>
                                <li>To safeguard environment against pollution and contribute in sustainable
                                    development. </li>
                            </ul>
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
                    <div class="pb-20 ledtxt dark-txt">A typical sewage treatment plant works in three stages – primary,
                        secondary and tertiary. </div>
                    <div class="col-lg-6">
                        <div class="sec-title mb-30">
                            <div class="desc pb-30 dark-txt">
                                <strong>Primary Stage</strong> <br>
                                <p>This initial stage focuses on removing larger, easily settleable solids. It involves:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Screens and Grit Chambers</strong>: These remove larger and denser materials like rags, plastics, and sand.</li>
                                    <li><strong>Primary Settling Tanks</strong>: Slower-to-settle materials are removed in these tanks through sedimentation. The water leaving this stage is largely free of particles.</li>
                                </ul>
                            </div>
                            <div class="desc pb-30 dark-txt">
                                <strong>Secondary Stage</strong> <br>
                                <p>This is the biological treatment phase where microscopic organisms do the heavy lifting:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Biological Treatment</strong>: High-density populations of bacteria, often referred to as activated sludge, are introduced. These microorganisms biodegrade the carbon and nutrients present in the wastewater.</li>
                                </ul>
                            </div>

                            <div class="desc pb-30 dark-txt">
                                <strong>Tertiary  Stage</strong> <br>
                                <p>The final stage further purifies the water, making it safe for discharge or reuse:</p>
                                <ul style="list-style:disc;">
                                    <li><strong>Filtration Techniques</strong>: Water from the secondary stage undergoes various filtration processes to remove any remaining fine particles.</li>
                                    <li><strong>Disinfection</strong>: Depending on local practices and seasonal considerations, the final purified water is often disinfected using methods like UV light or chlorination.</li>
                                </ul>
                            </div>
                            
                            <div class="desc dark-txt">
                                The treated water from this final stage can then be used for non-drinking purposes like agriculture and flushing, or safely returned to rivers, lakes, and streams, contributing to water reclamation.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="top" src="{{asset('assets/images/stp_standards.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-team pt-80 pb-80 md-pt-80 md-pb-80 xs-pb-54" style="background: #fff;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 pl-20 md-pl-15">
                        <h2 class="title">Output Water Quality Standards</h2>
                        <p>As per statutory guidelines issued by regulatory authorities such as the CPCB and MoEF&CC, the treated water discharged from an STP must comply with specific parameters to ensure environmental safety.</p>
                    </div>
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                                <img src="{{asset('assets/images/stp-filter.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-20 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <h2 class="title pb-20">
                                    Common Sewage Treatment Plant Technologies
                                </h2>
                                <p>Several advanced technologies are employed in modern STPs:</p>
                                <div class="sec-title mb-20">
                                    <ul style="list-style: disc; padding: 0px 26px;">
                                        <li><strong>Activated Sludge Process (ASP)</strong>: A widely used conventional biological treatment process.</li>
                                        <li><strong>Sequential Batch Reactor (SBR)</strong>: An activated sludge process that operates in a batch mode, offering flexibility and efficient nutrient removal.</li>
                                        <li><strong>Membrane Bioreactor (MBR)</strong>: Combines biological treatment with membrane filtration, resulting in high-quality effluent.</li>
                                        <li><strong>Moving Bed Biofilm Reactor (MBBR)</strong>: Utilizes plastic carriers with attached growth biofilms for efficient organic and nutrient removal.</li>                                                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
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