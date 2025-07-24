@extends('frontend.layout.base')

@section('content')
    <!-- Page Header Section Start -->
    <div class="rs-breadcrumbs img1 pt-120 pb-120" style="background: url({{asset('assets/images/Consent-bg.jpg')}}) no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title white-color">About Us</h1>
                <ul>
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- About Company Section Start -->
    <div class="rs-about pt-120 pb-80 md-pt-75 md-pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-56 md-pl-15">
                    <div class="sec-title mb-30">
                        <div class="sub-text">Who We Are</div>
                        <h2 class="title title3 pb-30">Bhoomija Envirocare Private Limited</h2>
                        <div class="desc pb-20">
                            Bhoomija Envirocare Private Limited is a professionally managed environmental consultancy firm, accredited by the National Accreditation Board for Education and Training (NABET) under the Quality Council of India (QCI). With a firm commitment to environmental sustainability and regulatory excellence, we specialize in providing end-to-end consultancy services across various sectors including infrastructure, mining, industry, energy, and real estate development.
                        </div>
                        <div class="desc pb-20">
                            Since its inception, Bhoomija Envirocare has been guided by the philosophy of fostering sustainable development through scientific integrity, innovation, and a deep-rooted understanding of ecological systems. Our team comprises highly qualified and experienced professionals from multidisciplinary backgrounds—environmental science, engineering, ecology, hydrology, geology, and socio-economics—who work collaboratively to deliver comprehensive, accurate, and actionable environmental solutions.
                        </div>
                        <div class="desc">
                            As a NABET-accredited organization, Bhoomija Envirocare adheres strictly to the latest guidelines and procedures laid down by the Ministry of Environment, Forest and Climate Change (MoEF&CC). We ensure that all project documentation, assessments, and stakeholder consultations are carried out with utmost transparency, scientific rigor, and in alignment with legal frameworks.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home8-about">
                        <img src="{{asset('assets/images/random-Building.jpg')}}" alt="Bhoomija Envirocare">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Company Section End -->

    <!-- Vision Mission Values Section Start -->
    <div class="rs-services style3 bg13 pt-120 pb-120 md-pt-80 md-pb-80" style="background: #f7f7f7;">
        <div class="container">
            <div class="sec-title text-center mb-60">
                <h2 class="title wow fadeInDown pb-20">Our Vision, Mission & Values</h2>
                <div class="desc pb-30">The guiding principles that drive our commitment to environmental excellence and sustainable development.</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="rs-card-style text-center p-40" style="background: #fff; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%;">
                        <div class="card-icon mb-30">
                            <i class="fa fa-eye" style="font-size: 60px; color: #2ecc71;"></i>
                        </div>
                        <h3 class="card-title mb-20">Our Vision</h3>
                        <p class="card-desc">To be a leading force in environmental consultancy, enabling sustainable development through science-driven solutions, ethical practices, and a commitment to preserving our planet for future generations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="rs-card-style text-center p-40" style="background: #fff; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%;">
                        <div class="card-icon mb-30">
                            <i class="fa fa-target" style="font-size: 60px; color: #3498db;"></i>
                        </div>
                        <h3 class="card-title mb-20">Our Mission</h3>
                        <ul class="text-left mission-list" style="list-style: none; padding: 20px 20px;">
                            <li class="mb-10"><i class="fa fa-check" style="color: #27ae60; margin-right: 8px;"></i>Deliver reliable, innovative, and high-quality environmental consultancy services</li>
                            <li class="mb-10"><i class="fa fa-check" style="color: #27ae60; margin-right: 8px;"></i>Guide clients through environmental regulations with integrity</li>
                            <li class="mb-10"><i class="fa fa-check" style="color: #27ae60; margin-right: 8px;"></i>Promote environmental stewardship through integrated solutions</li>
                            <li><i class="fa fa-check" style="color: #27ae60; margin-right: 8px;"></i>Continuously enhance technical capabilities and professional excellence</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="rs-card-style text-center p-40" style="background: #fff; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%;">
                        <div class="card-icon mb-30">
                            <i class="fa fa-heart" style="font-size: 60px; color: #e74c3c;"></i>
                        </div>
                        <h3 class="card-title mb-20">Our Core Values</h3>
                        <ul class="text-left values-list" style="list-style: none; padding: 20px 20px;">
                            <li class="mb-8"><i class="fa fa-leaf" style="color: #27ae60; margin-right: 8px;"></i>Sustainability</li>
                            <li class="mb-8"><i class="fa fa-shield" style="color: #27ae60; margin-right: 8px;"></i>Integrity</li>
                            <li class="mb-8"><i class="fa fa-star" style="color: #27ae60; margin-right: 8px;"></i>Excellence</li>
                            <li class="mb-8"><i class="fa fa-handshake-o" style="color: #27ae60; margin-right: 8px;"></i>Accountability</li>
                            <li class="mb-8"><i class="fa fa-users" style="color: #27ae60; margin-right: 8px;"></i>Collaboration</li>
                            <li class="mb-8"><i class="fa fa-graduation-cap" style="color: #27ae60; margin-right: 8px;"></i>Continuous Learning</li>
                            <li><i class="fa fa-tree" style="color: #27ae60; margin-right: 8px;"></i>Respect for Nature</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Mission Values Section End -->

    <!-- Message from Directors Section Start -->
    <div class="rs-about pt-120 pb-80 md-pt-75 md-pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12`11 pl-56 md-pl-15">
                    <div class="sec-title mb-30">
                        <div class="sub-text">Leadership Message</div>
                        <h2 class="title title3 pb-30">Message from the Managing Directors</h2>
                        <div class="desc pb-20" style="font-style: italic; font-size: 16px; line-height: 1.7;">
                            "At Bhoomija Envirocare Private Limited, our journey has always been guided by a simple yet profound principle: growth and development must walk hand in hand with environmental responsibility. In an era where ecological challenges are becoming increasingly complex, our role as environmental consultants is not only to meet regulatory standards but to inspire sustainable transformation across industries."
                        </div>
                        <div class="desc pb-20">
                            Since our inception, we have been committed to delivering solutions that are scientifically sound, legally compliant, and ethically grounded. Our NABET accreditation stands as a testament to our credibility, technical expertise, and unwavering commitment to quality.
                        </div>
                        <div class="desc pb-20">
                            At Bhoomija Envirocare, we believe that environmental protection is not a checkbox—it is a mindset, a value system that must be integrated into every decision, policy, and project. Our mission is to be a trusted partner for organizations that are committed to responsible growth.
                        </div>
                        <div class="btn-part mt-30">
                            <a class="readon learn-more learn-btn" href="{{route('contact-us')}}">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Message from Directors Section End -->

    <!-- Key Professionals Section Start -->
    <div class="rs-team style2 pt-120 pb-120 md-pt-80 md-pb-80" style="background: #f7f7f7;">
        <div class="container">
            <div class="sec-title text-center mb-60">
                <h2 class="title wow fadeInDown pb-20">Our Key Professionals</h2>
                <div class="desc pb-30">Meet our experienced team of environmental experts and industry leaders who drive our mission forward.</div>
            </div>
            <div class="row">
                <!-- Director 1 -->
                <div class="col-lg-6 col-md-6 mb-50">
                    <div class="team-item text-center" style="background: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="team-img mb-25">
                            <img src="{{asset('assets/images/team/Ashish-gupta.jpg')}}" alt="Ashish Kumar Gupta" style="width: 200px; height: 200px; border-radius: 30%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name mb-5">Mr. Ashish Kumar Gupta</h4>
                            <span class="team-title" style="color: #27ae60; font-weight: 600;">Director</span>
                            <p class="team-desc mt-15">M.Sc. in Applied Geology with over two decades of experience in mining and mineral exploration. Registered Qualified Person (RQP) under the Directorate of Geology and Mining, Chhattisgarh.</p>
                            <div class="team-expertise mt-20">
                                <small><strong>Expertise:</strong> Mine Planning, Reserve Estimation, Geological Assessments, Environmental Regulations</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Director 2 -->
                <div class="col-lg-6 col-md-6 mb-50">
                    <div class="team-item text-center" style="background: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="team-img mb-25">
                            <img src="{{asset('assets/images/team/Kaunain-sidqui.jpg')}}" alt="Kaunain Sidqui" style="width: 200px; height: 200px; border-radius: 30%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name mb-5">Mr. Kaunain Sidqui</h4>
                            <span class="team-title" style="color: #27ae60; font-weight: 600;">Director</span>
                            <p class="team-desc mt-15">M.Tech in Environmental Science with specialized expertise in water pollution management and Environmental Impact Assessment (EIA), particularly for building and construction sector.</p>
                            <div class="team-expertise mt-20">
                                <small><strong>Expertise:</strong> Water Quality Assessment, Wastewater Management, Environmental Monitoring, Urban Planning</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Senior Expert 1 -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="team-item text-center" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="team-img mb-20">
                            <img src="{{asset('assets/images/team/Tanzeem-Siddiqui.jpg')}}" alt="Dr. Tanzeem Ahmad Siddiqui" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <div class="team-content">
                            <h5 class="team-name mb-5">Dr. Tanzeem Ahmad Siddiqui</h5>
                            <span class="team-title" style="color: #3498db; font-weight: 600;">Senior Environmental Expert</span>
                            <p class="team-desc mt-10">Ph.D. Environmental Sciences, IIT Delhi. Chemical Engineer with 40+ years of experience across global organizations including KEO International, ADNOC, and Engineers India Limited.</p>
                        </div>
                    </div>
                </div>

                <!-- Senior Expert 2 -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="team-item text-center" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="team-img mb-20">
                            <img src="{{asset('assets/images/team/J.K-Moitra.jpg')}}" alt="Dr. JK Moitra" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <div class="team-content">
                            <h5 class="team-name mb-5">Dr. J.K. Moitra</h5>
                            <span class="team-title" style="color: #3498db; font-weight: 600;">Environmental Scientist</span>
                            <p class="team-desc mt-10">Ph.D. Environmental Science. Former Scientist 'B' at Central Pollution Control Board (CPCB). Expert in metallurgical industries, cement, mining, and thermal power plants.</p>
                        </div>
                    </div>
                </div>

                <!-- Senior Expert 3 -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="team-item text-center" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="team-img mb-20">
                            <img src="{{asset('assets/images/team/A.K-Srivastava.jpg')}}" alt="Dr. A.K. Srivastava" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <div class="team-content">
                            <h5 class="team-name mb-5">Dr. A.K. Srivastava</h5>
                            <span class="team-title" style="color: #3498db; font-weight: 600;">Advisor - Geology & Mining</span>
                            <p class="team-desc mt-10">Ph.D. Environmental Management of Mines. Former Chief Mineral Geologist (CMG), IBM. QCI/NABET Accredited Consultant and RQP certified by Indian Bureau of Mines.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Team Members Row -->
            <div class="row mt-40">
                <div class="col-lg-3 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Sujata-Moitra.jpg')}}" alt="Sujata Moitra" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <h6 class="mb-10">Ms. Sujata Moitra</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Social Work Professional</span>
                        <p style="font-size: 13px; margin-top: 10px;">MSW with 20+ years in community development and social welfare</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Bhagwan-Sahay.jpg')}}" alt="Bhagwan Sahay" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <h6 class="mb-10">Mr. Bhagwan Sahay</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Land Use Planning Expert</span>
                        <p style="font-size: 13px; margin-top: 10px;">Specialist in EIA processes and spatial planning</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Aseem-Rashid.jpg')}}" alt="Mohammad Asim Rasheed" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <h6 class="mb-10">Mr. Mohammad Asim Rasheed</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Ecology & Biodiversity Expert</span>
                        <p style="font-size: 13px; margin-top: 10px;">Specialist in ecological surveys and conservation planning</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Naresh-Nishad.jpg')}}" alt="Naresh Kumar Nishad" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div>
                        <h6 class="mb-10">Mr. Naresh Kumar Nishad</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Geology & Hydrology Expert</span>
                        <p style="font-size: 13px; margin-top: 10px;">M.Sc. Applied Geology from NIT Raipur</p>
                    </div>
                </div>
            </div>

            <!-- Final Row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        {{-- <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Ajaykumar-Krushna-Kadam.jpg')}}" alt="Dr. Ajaykumar Krushna Kadam" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div> --}}
                        <h6 class="mb-10">Dr. Ajaykumar Krushna Kadam</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Environmental Specialist</span>
                        <p style="font-size: 13px; margin-top: 10px;">Ph.D. Watershed Development & Hydrogeology. Expert in noise assessment and soil conservation</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="team-card-compact" style="background: #fff; padding: 25px 20px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); text-center;">
                        {{-- <div class="team-img mb-15">
                            <img src="{{asset('assets/images/team/Mukesh-Kumar-Singh.jpg')}}" alt="Mukesh Kumar Singh" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto;">
                        </div> --}}
                        <h6 class="mb-10">Mr. Mukesh Kumar Singh</h6>
                        <span style="color: #27ae60; font-size: 14px; font-weight: 600;">Process Engineering Expert</span>
                        <p style="font-size: 13px; margin-top: 10px;">M.Tech Environmental Engineering. 10+ years in distillery and wastewater management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Key Professionals Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="rs-why-choose style3 bg14 pt-120 pb-120 md-pt-75 md-pb-80" style="background: linear-gradient(rgba(0, 24, 24, 0.84), rgba(0, 44, 2, 0.84)), url({{asset('assets/images/why-choose-bg.jpg')}}) no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="sec-title text-center mb-60">
                <h2 class="title wow fadeInDown pb-20 text-white">Why Choose Bhoomija Envirocare?</h2>
                <div class="desc pb-30 text-white">Our commitment to excellence, expertise, and environmental stewardship sets us apart in the consultancy landscape.</div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="why-choose-item text-center" style="background: rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; backdrop-filter: blur(10px);">
                        <div class="icon mb-20">
                            <i class="fa fa-certificate" style="font-size: 50px; color: #fff;"></i>
                        </div>
                        <h4 class="title text-white mb-15">NABET Accredited</h4>
                        <p class="text-white">Quality Council of India (QCI) certified organization ensuring highest standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="why-choose-item text-center" style="background: rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; backdrop-filter: blur(10px);">
                        <div class="icon mb-20">
                            <i class="fa fa-users" style="font-size: 50px; color: #fff;"></i>
                        </div>
                        <h4 class="title text-white mb-15">Expert Team</h4>
                        <p class="text-white">Multidisciplinary professionals with decades of combined experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="why-choose-item text-center" style="background: rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; backdrop-filter: blur(10px);">
                        <div class="icon mb-20">
                            <i class="fa fa-cogs" style="font-size: 50px; color: #fff;"></i>
                        </div>
                        <h4 class="title text-white mb-15">End-to-End Solutions</h4>
                        <p class="text-white">Comprehensive services from clearances to implementation and maintenance</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="why-choose-item text-center" style="background: rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; backdrop-filter: blur(10px);">
                        <div class="icon mb-20">
                            <i class="fa fa-leaf" style="font-size: 50px; color: #fff;"></i>
                        </div>
                        <h4 class="title text-white mb-15">Sustainable Focus</h4>
                        <p class="text-white">Commitment to environmental protection and sustainable development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Call to Action Section Start -->
    <div class="rs-call-us bg1 pt-120 pb-100 md-pt-80" style="background: #f7f7f7;">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-8">
                    <div class="sec-title">
                        <h2 class="title wow fadeInLeft pb-20">Ready to Partner with Environmental Excellence?</h2>
                        <div class="desc">Let Bhoomija Envirocare be your trusted partner in navigating environmental challenges and achieving sustainable growth. Our team of experts is ready to provide tailored solutions for your unique requirements.</div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="btn-part">
                        <a class="readon learn-more learn-btn" href="{{route('contact-us')}}">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Section End -->
@endsection