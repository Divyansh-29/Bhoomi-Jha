@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/EPC-banner.jpg')}});">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Green Building Certification: Paving the Way for Sustainable Construction</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="environmental-clearance/index.html">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Green Building Certification</li>
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
                                <img src="{{asset('assets/images/green-build.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Green Building Certification: Paving the Way for Sustainable Construction
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Green building</strong> is a holistic and forward-thinking approach to the entire lifecycle of building structures, emphasizing <strong>environmentally friendly, resource-efficient, and sustainable practices</strong>. This multi-dimensional philosophy extends from the initial siting and design phases through construction, operation, maintenance, renovation, and ultimately, deconstruction. The core tenet is to minimize the overall negative impacts on the environment and human health while maximizing positive contributions.
                                </div>
                                <div class="desc pb-35">                                    
                                    Beyond merely reducing resource consumption (like water, energy, or natural materials), green buildings actively strive for a <strong>positive environmental impact</strong> This can manifest through actions such as generating their own renewable energy, enhancing local biodiversity, and improving indoor environmental quality for occupants.
                                </div>
                                <div class="desc pb-35">                                    
                                    To catalyze the adoption of green building practices, various <strong>incentives and supportive schemes</strong> are offered by governmental and regulatory bodies. Notably, green building projects often receive <strong>"Out of Turn" consideration and priority</strong>in obtaining environmental clearances, as per directives from the Ministry of Environment, Forest & Climate Change (MoEF&CC). Furthermore, such projects may benefit from <strong>free and purchasable Floor Area Ratio (FAR) options</strong>, which significantly enhances their business viability and attractiveness.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-35">
                                Several state governments across India, including Haryana, Uttar Pradesh, Punjab, Rajasthan, West Bengal, Andhra Pradesh, Himachal Pradesh, and Jharkhand, actively encourage stakeholders to adopt green measures. The benefits of pursuing green building certification are both <strong>tangible and intangible</strong>:
                            </div>
                            <div class="desc pb-20 fontbold">
                                Tangible Benefits:
                            </div>
                            <ul style="list-style: disc; padding: 0px 26px;">
                                <li><strong>Reduction in Operational Costs:</strong> Through optimized energy efficiency (e.g., smart HVAC systems, LED lighting, renewable energy integration) and water conservation (e.g., rainwater harvesting, greywater recycling, efficient fixtures), green buildings significantly lower utility bills over their lifespan.</li>
                                <li><strong>Increased Property Value and Marketability:</strong> Green-certified properties often command higher resale values, rental rates, and lease rates due to their superior performance, lower operating costs, and appeal to environmentally conscious buyers and tenants.</li>                                
                                <li><strong>Government Incentives and Tax Benefit­s:</strong>Projects can qualify for various financial incentives, subsidies, and tax credits offered by central and state governments, helping to offset any initial higher construction costs.
                                </li>                                
                            </ul>
                            <br>
                            <div class="desc pb-20 fontbold">
                                Intangible Benefits:
                            </div>
                            <ul style="list-style: disc; padding: 0px 26px;">
                                <li><strong>Enhanced Occupant Productivity and Well-being: </strong> Green buildings prioritize aspects like improved indoor air quality (reduced pollutants, proper ventilation), ample natural lighting, thermal comfort, and the use of non-toxic materials, leading to healthier, more comfortable, and thus more productive environments for occupants.</li>
                                <li><strong>Positive Corporate Image and Brand Responsibility:</strong>Pursuing green building certification demonstrates an organization's strong commitment to environmental responsibility and sustainability, enhancing its brand reputation among stakeholders, investors, and the public.</li>                                
                                <li><strong>Regulatory Compliance and Risk Mitigation:</strong>Adhering to green building standards often means exceeding baseline regulatory requirements, which can reduce the risk of future non-compliance issues and associated penalties.</li>                                
                                <li><strong>Resilience and Future-Proofing:</strong>Green buildings are inherently more resilient to climate-related challenges and evolving environmental regulations, making them a more sustainable long-term investment.</li>                                
                            </ul>
                            <div class="desc pb-35">
                                This tiered system ensures that environmental considerations are thoroughly integrated into the project planning and implementation phases, contributing to sustainable development practices across the country.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="dsc">
                            In India, prominent green building certification systems include <strong>LEED (Leadership in Energy and Environmental Design), GRIHA (Green Rating for Integrated Habitat Assessment)</strong> developed by TERI, and the <strong>IGBC (Indian Green Building Council) Rating System</strong>. Each system evaluates buildings across various categories such as energy efficiency, water conservation, material selection, waste management, and indoor environmental quality, providing different levels of certification based on performance.
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dsc">
                            Green building certification is not merely a label; it's a strategic investment that yields significant environmental, economic, and social benefits, contributing to a more sustainable and healthier built environment for current and future generations.
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- About Section End -->
        {{-- <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">
                        Would You Like to know more on how {{env('SITENAME')}}  can help you meet your CGWA needs?</p>
                    <button class="readon learn-more submit  mb-30  mt-30"><a href="contact-us.html"
                            class="text-white">Contact Us</a> </button>
                    <div class="text-white">With extensive expertise and strong team of well qualified and experienced technologists, {{env('SITENAME')}}  is at the forefront for providing end to end solutions for Central Ground Water Clearance including hydro geological studies needs as per bylaws, exploring on campus and off campus options for compensating for the ground water used. {{env('SITENAME')}}  has been providing CGWA services at a Pan India level and completed more than 1000 such cases across several states in India.</div>
                </div>
            </div>
        </div> --}}
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