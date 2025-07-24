@extends('frontend.layout.base')

@section('content')
    <!-- Slider Section Start -->
    <div class="rs-slider style2">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
            data-md-device-nav="true" data-md-device-dots="false">
            <div class="slider-content slide1">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-img wow fadeInDown" data-wow-delay="600ms" data-wow-duration="2000ms">
                        </div>
                        <h1 class="sl-title wow fadeInLeft zoomInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">We Believe In Making </h1>
                        <h1 class="sl-title2 mb-mb-10 wow fadeInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">The Environment Sustainable Through Suggestions and Solutions
                        </h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        </div>
                        <div class="sl-btn wow fadeInup" data-wow-delay="600ms" data-wow-duration="4000ms">
                            <a class="readon buy-now sl-btn" href="#">Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content slide2">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-img wow fadeInDown" data-wow-delay="600ms" data-wow-duration="2000ms">
                        </div>
                        <h1 class="sl-title wow fadeInleft zoomInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">We Help You Towards </h1>
                        <h1 class="sl-title2 mb-mb-10 wow fadeInRight zoomInLeft" data-wow-delay="600ms"
                            data-wow-duration="2000ms">Environmental Clearances, Compliances and Audits, Treating
                            Waste, Harvesting Rain, Reducing Pollution, Conserving Energy and Online Monitoring
                        </h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        </div>
                        <div class="sl-btn wow backInUp" data-wow-delay="400ms" data-wow-duration="3000ms">
                            <a class="readon buy-now sl-btn" href="#">Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content slide3">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-img wow fadeInDown" data-wow-delay="600ms" data-wow-duration="2000ms">
                        </div>
                        <h1 class="sl-title wow fadeInleft zoomInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">We help fulfil your</h1>
                        <h1 class="sl-title2 mb-mb-10 wow fadeInRight zoomInLeft" data-wow-delay="600ms"
                            data-wow-duration="2000ms"> Design, Implementation, Commissioning and
                            O&M needs for Treatment Plants, RWH, Anti Smog Guns, Scrubbers, Piezometers and
                            Flowmeters.</h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        </div>
                        <div class="sl-btn wow backInUp" data-wow-delay="400ms" data-wow-duration="3000ms">
                            <a class="readon buy-now sl-btn" href="#">Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content slide4">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-img wow fadeInDown" data-wow-delay="600ms" data-wow-duration="2000ms">
                        </div>
                        <h1 class="sl-title wow fadeInleft zoomInRight" data-wow-delay="600ms"
                            data-wow-duration="2000ms">We Lead In Our Offerings</h1>
                        <h1 class="sl-title2 mb-mb-10 wow fadeInRight zoomInLeft" data-wow-delay="600ms"
                            data-wow-duration="2000ms">for Townships, Heavy Industries, Building and Construction,
                            Mining, Highways and Distilleries</h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        </div>
                        <div class="sl-btn wow backInUp" data-wow-delay="400ms" data-wow-duration="3000ms">
                            <a class="readon buy-now sl-btn" href="#">Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->
    <!-- About Section Start -->
    <div class="rs-about pt-relative style3 pt-120 pb-120 md-pt-75 md-pb-80" style="background: #f7f7f7;">
        <div class="container pt-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-56 md-pl-15">
                    <div class="sec-title mb-30 z-index-1">
                        <div class="sub-text">About Us</div>
                        <h2 class=" title title3 pb-30">
                            Welcome to - {{env('SITENAME')}}
                        </h2>
                        <div class="desc pb-30 text-dark" style="font-weight:600;">
                            We offer a full spectrum of services, solutions and products for all your environmental
                            needs.
                        </div>
                        <div class="desc pb-20">
                            As a QCI NABET certified organization, we help you in the areas of Environmental
                            Clearances, Compliance and Audits, Treating Waste, Harvesting Rain, Green Building
                            Certification, Reducing Pollution, Conserving Energy, Online Monitoring and O&M
                            Services.
                            We lead in our offerings for
                        </div>
                        <div class="desc mb-2" style="font-weight: 600;">
                            We lead on our offerings for project clearances related to the following areas:
                        </div>
                        <ul>
                            <li><i class="fa fa-check"></i><span>Township and Area Development</span></li>
                            <li><i class="fa fa-check"></i><span>Industrial Estates, EPZ’s, SEZ’s, Biotech
                                    Parks</span></li>
                            <li><i class="fa fa-check"></i><span>Building and Construction</span></li>
                            <li><i class="fa fa-check"></i><span>Cement plants</span></li>
                            <li><i class="fa fa-check"></i><span>Highways </span></li>
                            <li><i class="fa fa-check"></i><span> Distilleries</span></li>
                            <li><i class="fa fa-check"></i><span>Mining of minerals (Opencast, Underground)</span>
                            </li>
                            <li><i class="fa fa-check"></i><span>Common Effluent Treatment Plants</span></li>
                            <li><i class="fa fa-check"></i><span>Oil and gas exploration (Offshore, Onshore)</span>
                            </li>
                            <li><i class="fa fa-check"></i><span>Metallurgical Industries (Ferrous,
                                    Non-ferrous)</span></li>
                        </ul>
                        <div class="btn-part mt-40">
                            <a class="readon learn-more learn-btn" href="{{route('contact-us')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home8-about z-index-1">
                        <img src="{{asset('assets/images/about-7.png')}}" alt="images">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-part">
            <div class="left-side">
                <img src="{{asset('assets/images/shape-2.png')}}" alt="">
            </div>
            <div class="right-side">
                <img src="{{asset('assets/images/shape-3.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Services Section Start -->
    <div class="rs-services main-home style3 bg13 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container pt-relative">
            <div class="sec-title">
                <h2 class="title wow fadeInDown pb-20">Our Services</h2>
                <div class="desc pb-30">Our services cover a large spectrum, starting from helping you prepare and
                    get consents and environmental clearances from various state and centre level bodies to
                    conducting periodic audits as mandated in the clearances to helping you get Green Building
                    Certifications.</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser1.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','environmental-clearence') }}">Environmental Clearance & EIA Studies</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Environmental Clearance & EIA Studies
                                </h4>
                                <div class="desc pb-10 text-dark">A must for any organization looking forward to
                                    starting a new project or augmenting / altering an existing one<br>
                                    <p><a href="{{ route('service','environmental-clearence') }}"
                                            style="font-weight:800;color:#000;">Read more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser2.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','ground-water-clearence') }}">Ground Water Clearance</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Ground Water Clearance
                                </h4>
                                <div class="desc pb-10 text-dark">Feel a need for utilizing ground water for your
                                    project or processes, get familiar with the rules and processes<br>
                                    <p><a href="{{ route('service','ground-water-clearence') }}"
                                            style="font-weight:800;color:#000;">Read more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser3.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','consent-to-establish-and-operate') }}">Consent to Establish
                                            & Operate</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Consent to Establish
                                    & Operate
                                </h4>
                                <div class="desc pb-10 text-dark">About to start the construction or commissioning
                                    of your project, understand the need of consents for these stages<br>
                                    <p><a href="{{ route('service','consent-to-establish-and-operate') }}"
                                            style="font-weight:800;color:#000;">Read more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser4')}}.jpg" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','periodic-compliance-audits') }}">Periodic
                                            Compliance Audits</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Periodic
                                    Compliance Audits
                                </h4>
                                <div class="desc pb-10 text-dark">Feeling too much overwhelmed with several
                                    environmental needs that are actually a must for a sustained future, allow us to
                                    help you<br>
                                    <p><a href="{{ route('service','periodic-compliance-audits') }}" style="font-weight:800;color:#000;">Read
                                            more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser5.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','green-building-cetification') }}">Green Building
                                            Certifications</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Green Building
                                    Certifications
                                </h4>
                                <div class="desc pb-10 text-dark">Eager to create something that is environment
                                    friendly, resource-efficient and sustainable throughout its operational
                                    life-cycle<br>
                                    <p><a href="{{ route('service','green-building-cetification') }}" style="font-weight:800;color:#000;">Read
                                            more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser7')}}.jpg" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','design-services') }}">Design Services</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Design Services
                                </h4>
                                <div class="desc pb-10 text-dark">Getting confused with several technologies,
                                    jargons, requirements and cost implications for deciding what could be the best
                                    for you, delegate it to us to put forth the most optimal solutions<br>
                                    <p><a href="{{ route('service','design-services') }}" style="font-weight:800;color:#000;">Read
                                            more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/our-ser8')}}.jpg" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','operations-and-maintenance') }}">Operations &
                                            Maintenance</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Operations &
                                    Maintenance
                                </h4>
                                <div class="desc pb-10 text-dark">Want to get out of the nuisances of day-to-day
                                    operations, performance optimization, compliance, upkeep & maintenance of STP’s,
                                    ETP’s etc & focus on your core<br>
                                    <p><a href="{{ route('service','operations-and-maintenance') }}"
                                            style="font-weight:800;color:#000;">Read more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
    <!-- Why Choose Section Start -->
    <div class="rs-why-choose style3 bg14 pt-120 pb-120 md-pt-75 md-pb-80"
        style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
        <div class="container  pt-relative">
            <div class="sec-title">
                <h2 class="title wow fadeInDown pb-20 text-white">Our Solutions</h2>
                <div class="desc pb-30 text-white">We help you implement end to end solutions for helping you meet
                    your requirements and meet your social obligations towards the environment. Our solutions are
                    based on the most advanced approach and technologies so as to provide the most optimum value for
                    multiple aspects.</div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 md-pb-30">
                    <div class="features-content">
                        <ul class="features-list">
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="sewage-treatment-plant.html"><span>Sewage Treatment</span></a>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="effluent-treatment-plant.html"><span>Effluent Treatment
                                    </span></a>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="water-treatment.html"> <span>Water Treatment</span></a>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="solid-waste-management.html"><span>
                                        Solid Waste Management
                                    </span></a>
                            </li>
                            {{-- <li><i class="fa fa-check"></i>
                                <a class="" href="rain-water-harvesting.html"><span>Rain Water Harvesting
                                    </span></a>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="air-pollution.html"> <span>Air Pollution Measurement and
                                        Monitoring
                                    </span></a>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <a class="" href="online-monitoring.html"><span>Online Monitoring
                                    </span></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-wrap">
                        <h2 class="sub-title">CALL US 24/7</h2>
                        <h1 class="title"> +91 120-4540584</h1>
                        <a class="readon learn-more learn-btn" href="contact.html">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section End -->
    <!-- Process Section Start -->
    {{-- <div class="rs-process style4  pt-120 pb-120 md-pt-80 md-pb-70">
        <div class="container pt-relative">
            <div class="sec-title">
                <h2 class="title wow fadeInDown pb-20 ">Industries</h2>
                <div class="desc pb-30">{{env('SITENAME')}} has Accreditation from Quality Council Of India (QCI) under the
                    National Accreditation Board for Education and Training (NABET) Scheme in TEN Sectors:</div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 pl-35 md-pl-15">
                    <div class="row justify-content-center">
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon1.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Mining of Minerals
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h4 class="title mb-1">Mining of Minerals
                                        </h4>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis<br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon2.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Cement Plants
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Cement Plants
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon3.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Distilleries
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Distilleries
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon9.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Thermal Plants
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Thermal Plants
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon5.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Highwaays
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Highwaays
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon6.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">CETP
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">CETP
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/we.jpg')}}" alt="">
                                        <div class="number-title">
                                            <h3 class="title">Metallurgical industries
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Metallurgical industries
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon4.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Industrial Estates
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Industrial Estates
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon7.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Building and Construction
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Building and Construction
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-30">
                            <div class="rs-number flip-card">
                                <div class="rs-number-text flip-card-inner">
                                    <div class="rs-number-area flip-card-front">
                                        <img src="{{asset('assets/images/minral_Icon8.jpg')}}"
                                            alt="">
                                        <div class="number-title">
                                            <h3 class="title">Tourism and Area based Development
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h3 class="title mb-1">Tourism and Area based Development
                                        </h3>
                                        <div class="desc pb-10 text-dark">Sedut perspiciatis unde omnis iste natus
                                            error sitlutem acc usantium doloremque denounce with illo inventore
                                            veritatis <br>
                                            <p><a href="industries.html" style="font-weight:800;color:#000;">Read
                                                    more>></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Process Section End -->
    <div class="rs-call-us bg1 pt-120 pb-100 md-pt-80"
        style="background:linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url({{asset('assets/images/bg-serv.jpg')}}) no-repeat">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6">
                    <div class="sec-title pb-30">
                        <h2 class="title wow fadeInDown pb-20 text-white">About Us</h2>
                        <ul class="features-list">
                            <li>
                                <span class="text-white">We Believe in making the world a better place to
                                    live.</span>
                            </li>
                            <li>
                                <span class="text-white">All our efforts are towards helping create a sustainable
                                    environment.</span>
                            </li>
                            <li>
                                <span class="text-white">However, this depends on YOU too.</span>
                            </li>
                            <li>
                                <span class="text-white">Let us know how we can work together towards this noble
                                    cause</span>
                            </li>
                            <li>
                                <span class="text-white">We are eager to hear back from YOU</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-widget">
                        <div class="sec-title2 mb-40">
                            <span class="sub-text contact mb-15 text-white">Get In Touch</span>
                            <h2 class="title testi-title text-white">Fill The Form Below</h2>
                        </div>
                        <div id="form-messages"></div>
                        <div class="wpcf7 no-js" id="wpcf7-f65-o1" lang="en-US" dir="ltr" data-wpcf7-id="65">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="index.html#wpcf7-f65-o1" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
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
    <!-- Testimonial Section Start -->
    <div class="rs-testimonial main-home style2 modify1">
        <div class="overlayer pt-120 pb-120 md-pt-75 md-pb-80">
            <div class="container pt-relative">
                <div class="sec-left">
                    <h2 class="title white-color wow fadeInDown">Testimonials</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="2"
                    data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="wp-content/themes/aplinkatheme/assets/images/testimonial/main-home/quote-white.png"
                                    alt="">We are highly satisfied with {{env('SITENAME')}} in the role of our environmental
                                consultant. We have been working with them for the last SEVEN years on several
                                diverse environmental regulatory and non-regulatory needs and they have excelled
                                each and every time and helped us achieve all our needs.</div>
                            <div class="author-img">
                                <img src="wp-content/uploads/2022/01/t1.jpg" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">Mr. Manish Gupta</a>
                            <span class="designation">VP- Architecture, ATS Group</span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc"><img class="quote"
                                    src="{{asset('assets/images/testimonial/main-home/quote-white.png')}}"
                                    alt="">The services being provided by {{env('SITENAME')}} for their advisory services and
                                other environment related matters coupled with timely guidance is highly
                                commendable.</div>
                            <div class="author-img">
                                <img src="wp-content/uploads/2022/02/Virendder-Pratap-Singh.png" alt="">
                            </div>
                        </div>
                        <div class="author-part">
                            <a class="name" href="#">Virendder Pratap Singh</a>
                            <span class="designation">VP, Administration, Escorts Group of Companies,
                                Faridabad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    {{-- @include('frontend.layout.partners')    --}}
@endsection

