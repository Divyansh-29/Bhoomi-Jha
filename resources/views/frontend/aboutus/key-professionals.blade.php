<!-- resources/views/frontend/pages/key-professionals.blade.php (or similar path) -->

@extends('frontend.layout.base') {{-- Assuming this is the correct base --}}
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1 pt-120 pb-120" style="background: url({{asset('assets/images/Consent-bg.jpg')}}) no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title white-color">Our Key Professionals</h1>
                <ul>
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                    <li>Key Professionals</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Key Professionals Section Start -->
    <div class="rs-team style2 gray-color pt-120 pb-120 md-pt-80 md-pb-80 key-professionals-section">
        <div class="container">
            <div class="sec-title text-center mb-60">
                <span class="sub-title">Our Experts</span>
                <h2 class="title wow fadeInDown pb-20">Meet Our Key Professionals</h2>
                <div class="desc pb-30">Experienced leaders and experts driving our environmental consultancy services.</div>
            </div>

            <!-- Team Members Container -->
            <div class="team-members-list">

                <!-- Director 1: Mr. Ashish Kumar Gupta -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Ashish-gupta.jpg') }}" alt="Mr. Ashish Kumar Gupta">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Mr. Ashish Kumar Gupta</h3>
                            <h4 class="team-title">Director & Registered Qualified Person (RQP)</h4>
                            <p class="team-qualifications">M.Sc. in Applied Geology</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Mine Planning, Reserve Estimation, Geological Assessments, Environmental Regulations
                            </div>
                            <div class="team-bio">
                                <p>A seasoned geoscience and mining professional with over two decades of rich experience in the mining and mineral exploration sector. Recognized as a Registered Qualified Person (RQP), he is known for his technical proficiency and regulatory compliance.</p>
                                <p>His expertise spans prospecting, feasibility analysis, mine development planning, and resource management across metallic and non-metallic sectors. He possesses a sound understanding of environmental regulations, impact assessments, land degradation, waste management, water pollution control, and post-mining restoration.</p>
                                <p>Combines regulatory insight, scientific rigor, and on-ground execution skills, making him a reliable contributor to both public and private sector mining projects.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Director 2: Mr. +-in Sidqui -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Kaunain-sidqui.jpg') }}" alt="Mr. Kaunain Sidqui">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Mr. Kaunain Sidqui</h3>
                            <h4 class="team-title">Director & Environmental Specialist</h4>
                            <p class="team-qualifications">M.Tech in Environmental Science</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Water Pollution Management, EIA (Building/Construction), Wastewater Management, Sustainable Urban Planning
                            </div>
                            <div class="team-bio">
                                <p>A qualified environmental professional with specialized expertise in water pollution management and Environmental Impact Assessment (EIA), particularly for the building and construction sector.</p>
                                <p>His environmental subject knowledge spans hydrology, wastewater treatment technologies, environmental monitoring protocols, pollution control techniques, and sustainable urban planning.</p>
                                <p>Brings a detail-oriented, compliance-driven approach to every project, ensuring the integration of environmental safeguards into development planning.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Senior Expert 1: Dr. Tanzeem Ahmad Siddiqui -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Tanzeem-Siddiqui.jpg') }}" alt="Dr. Tanzeem Ahmad Siddiqui">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Dr. Tanzeem Ahmad Siddiqui</h3>
                            <h4 class="team-title">Senior Environmental Expert</h4>
                            <p class="team-qualifications">Ph.D. Environmental Sciences (IIT Delhi), B.E. Chemical Engineering (IIT Roorkee)</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> EIA, WWTP Design, Waste Management, Air Pollution Control, GHG Inventory, HSE/CSR/Compliance
                            </div>
                            <div class="team-bio">
                                <p>A distinguished Chemical Engineer and environmental expert with nearly four decades of experience in technical, operational, commercial, and strategic leadership roles globally.</p>
                                <p>His career includes impactful tenures at leading organizations such as KEO International Consultants (KSA), ADNOC Refining, Rabigh Refining & Petrochemical Company (Saudi Arabia), Engineers India Limited, and Hindustan Petroleum Corporation Ltd (India).</p>
                                <p>Has successfully led/contributed to over 100 projects in EIA, WWTP design, hazardous/solid waste management, air pollution control, ambient air quality monitoring, GHG emissions inventory, and climate change mitigation strategies.</p>
                                <p>Also played influential roles in Health, Safety & Environment (HSE), Corporate Social Responsibility (CSR), and legal/compliance functions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Senior Expert 2: Dr. J.K. Moitra -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/J.K-Moitra.jpg') }}" alt="Dr. J.K. Moitra">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Dr. J.K. Moitra</h3>
                            <h4 class="team-title">Environmental Scientist</h4>
                            <p class="team-qualifications">Ph.D. Environmental Science</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Metallurgical Industries, Cement, Mining, Thermal Power, Regulatory Policy
                            </div>
                            <div class="team-bio">
                                <p>A seasoned environmental scientist with extensive experience in regulatory, industrial, and scientific domains. Began his career at the Central Pollution Control Board (CPCB) as Scientist 'B'.</p>
                                <p>Played a key role in formulating and implementing critical environmental policies, regulatory frameworks, and national standards at CPCB.</p>
                                <p>Later transitioned to Larsen & Toubro Limited, enhancing expertise in industrial operations, environmental management systems, and pollution control strategies.</p>
                                <p>Developed deep expertise in metallurgical industries, cement manufacturing, mining operations, coal washeries, and thermal power plants. Technical proficiency in pollution control technologies, EIA, emission standards, and compliance monitoring.</p>
                                <p>Served on environmental committees and advisory panels, contributing to sustainable industrial policies. Widely respected for scientific rigor, regulatory insight, and commitment to sustainable development.</p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Senior Expert 3: Dr. A.K. Srivastava -->
                 <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/A.K-Srivastava.jpg') }}" alt="Dr. A.K. Srivastava">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Dr. A.K. Srivastava</h3>
                            <h4 class="team-title">Advisor - Geology & Mining</h4>
                            <p class="team-qualifications">Ph.D. in Environmental Management of Mines, M.Sc. (Geology), QCI/NABET Accredited Consultant, RQP</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> EIA, FAE Services, Groundwater Consultancy, CMG (Ex-IBM), Mineral Exploration
                            </div>
                            <div class="team-bio">
                                <p>A distinguished multidisciplinary professional with extensive expertise in geology, mineral exploration, mining, environmental management, and groundwater/petroleum resource development.</p>
                                <p>Former Chief Mineral Geologist (CMG), IBM, Ministry of Mines, Government of India, and ex-Joint Secretary, GSI, UPDGM, and CSIR (ITRC).</p>
                                <p>Served as Advisor (Mines) to JAL (JP Cements), Noida. Recognized as a Distinguished Geoscientist and Empaneled Consultant with the National Mineral Exploration Trust (NMET).</p>
                                <p>Acted as Expert (TLE) for Water and Power Consultancy Services (WAPCOS) Ltd. Founder and CMD of Geomin Envirotech Consultancy Co. (GMEC). Founder Director of the Mine & Mind Academy NGO.</p>
                                <p>Renowned Professor, Mentor, and Research Scientist in corporate communication, public relations, career counseling, and Rajbhasha (Hindi) development.</p>
                                <p><em>(Also holds qualifications in Psychotherapy, Psychology, Acupressure, Yoga, and Naturopathy - not detailed here for brevity)</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ms. Sujata Moitra -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Sujata-Moitra.jpg') }}" alt="Ms. Sujata Moitra">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Ms. Sujata Moitra</h3>
                            <h4 class="team-title">Social Work Professional</h4>
                            <p class="team-qualifications">MSW</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Community Development, Social Welfare, Women's Empowerment
                            </div>
                            <div class="team-bio">
                                <p>Accomplished social work professional with over two decades of rich experience in community development and social welfare. Dedicated to uplifting marginalized communities and implementing grassroots-level development programs.</p>
                                <p>Extensive field experience combined with strong academic grounding, enabling her to lead and support impactful initiatives across health, education, rural development, and environmental awareness.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mr. Bhagwan Sahay -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Bhagwan-Sahay.jpg') }}" alt="Mr. Bhagwan Sahay">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Mr. Bhagwan Sahay</h3>
                            <h4 class="team-title">Land Use Planning Expert</h4>
                            <p class="team-qualifications">Expertise in Geography & Spatial Planning</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Land Use Planning, EIA Processes, Site Suitability, Regulatory Compliance
                            </div>
                            <div class="team-bio">
                                <p>Seasoned Land Use and Planning Expert with significant expertise in Environmental Impact Assessment (EIA) processes.</p>
                                <p>Brings in-depth knowledge of land use dynamics, site suitability analysis, and regulatory compliance related to land transformation. Ensures land use assessments align with sustainable development goals and ecological balance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mr. Mohammad Asim Rasheed -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Aseem-Rashid.jpg') }}" alt="Mr. Mohammad Asim Rasheed">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Mr. Mohammad Asim Rasheed</h3>
                            <h4 class="team-title">Ecology & Biodiversity Expert</h4>
                            <p class="team-qualifications">Specialist in EIA</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Ecology, Biodiversity, EIA, Habitat Conservation
                            </div>
                            <div class="team-bio">
                                <p>Dedicated Ecology and Biodiversity Expert with a specialized focus on Environmental Impact Assessment (EIA).</p>
                                <p>Brings deep knowledge in assessing ecological sensitivity, species diversity, and habitat conservation. Plays a critical role in identifying and evaluating potential ecological impacts of development projects, ensuring compliance with biodiversity guidelines.</p>
                                <p>Work includes baseline ecological surveys, impact prediction, and formulation of biodiversity management and conservation plans.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mr. Naresh Kumar Nishad -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Naresh-Nishad.jpg') }}" alt="Mr. Naresh Kumar Nishad">
                        </div>
                        <div class="team-content-wrapper">
                            <h3 class="team-name">Mr. Naresh Kumar Nishad</h3>
                            <h4 class="team-title">Geology & Hydrology Expert</h4>
                            <p class="team-qualifications">M.Sc. Applied Geology (NIT Raipur)</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Hydrogeology, Groundwater, Geological Mapping, EIA
                            </div>
                            <div class="team-bio">
                                <p>Qualified Geology and Hydrology Expert with a Master’s degree in Applied Geology from NIT Raipur.</p>
                                <p>Specializes in hydrogeological assessments, groundwater resource evaluation, and geological mapping for environmental and infrastructure projects.</p>
                                <p>Work in EIA involves analyzing geological stability, aquifer behavior, water table dynamics, and sustainable management of water resources. Dedicated to integrating scientific analysis with practical solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Ajaykumar Krushna Kadam -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <!-- <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Ajaykumar-Krushna-Kadam.jpg') }}" alt="Dr. Ajaykumar Krushna Kadam">
                        </div> -->
                        <div class="team-content-wrapper full-width-content"> <!-- Adjusted for missing image -->
                            <h3 class="team-name">Dr. Ajaykumar Krushna Kadam</h3>
                            <h4 class="team-title">Environmental Specialist</h4>
                            <p class="team-qualifications">Ph.D. Watershed Development & Hydrogeology, M.Sc. Environmental Science, M.Sc. Geoinformatics</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Noise Assessment, Soil Conservation, Land Use Planning, Watershed Analysis
                            </div>
                            <div class="team-bio">
                                <p>Highly qualified environmental specialist with over a decade of experience in environmental assessment and natural resource management.</p>
                                <p>Expert in noise and vibration impact assessment, soil conservation, and land use planning, with a strong command of geospatial tools and watershed analysis techniques.</p>
                                <p>Work plays a key role in EIA, particularly in evaluating and mitigating land degradation and monitoring acoustic environments. Integrated approach bridges scientific research with practical, field-based solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mr. Mukesh Kumar Singh -->
                <div class="team-member-card">
                    <div class="team-member-inner">
                        <!-- <div class="team-img-wrapper">
                            <img src="{{ asset('assets/images/team/Mukesh-Kumar-Singh.jpg') }}" alt="Mr. Mukesh Kumar Singh">
                        </div> -->
                        <div class="team-content-wrapper full-width-content"> <!-- Adjusted for missing image -->
                            <h3 class="team-name">Mr. Mukesh Kumar Singh</h3>
                            <h4 class="team-title">Process Engineering Expert</h4>
                            <p class="team-qualifications">M.Tech Environmental Engineering, B.Tech</p>
                            <div class="team-expertise">
                                <strong>Expertise:</strong> Distillery, Wastewater Mgmt, ETP Design, ZLD, Process Integration
                            </div>
                            <div class="team-bio">
                                <p>Highly experienced environmental and process engineering professional with over 10 years of specialized expertise in the distillery, water, and wastewater management sectors.</p>
                                <p>Worked extensively with prestigious distillery groups, contributing to the design, operation, and optimization of effluent treatment plants (ETPs), spent wash treatment systems, and Zero Liquid Discharge (ZLD) solutions.</p>
                                <p>Strong technical background in process engineering, coupled with practical understanding of environmental compliance. Hands-on expertise in water reuse systems, anaerobic digestion, biomethanation, CPUs, and process integration to meet CPCB/SPCB standards.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Team Members Container -->

        </div> <!-- End Container -->
    </div>
    <!-- Key Professionals Section End -->

    <!-- CTA Section Start (Optional, using existing pattern) -->
    <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
        <div class="container">
            <div class="sec-title2 text-center mb-30">
                <p class="title white-color" style="max-width:100%;">Interested in learning more about our team of experts?</p>
                <button class="readon learn-more submit mb-30 mt-30">
                    <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                </button>
                <div class="text-white">Our team at {{ env('SITENAME') }} Envirocare is ready to discuss how our expertise can support your project's environmental needs.</div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

<style>
/* Key Professionals Section Styles */
.key-professionals-section {
    background-color: #f8f9fa;
    position: relative;
    overflow: hidden;
}

/* Section Title */
.sec-title .sub-title {
    color: #156e68;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    display: inline-block;
    padding: 5px 15px;
    background: rgba(21, 110, 104, 0.1);
    border-radius: 30px;
    margin-bottom: 15px;
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

/* Team Member List */
.team-members-list {
    display: flex;
    flex-direction: column;
    gap: 40px; /* Space between cards */
}

/* Team Member Card Base Styles */
.team-member-card {
    background: #ffffff;
    border-radius: 12px; /* Consistent with your theme */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); /* Subtle shadow */
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
    border: 1px solid #e8e8e8; /* Consistent border */
}

.team-member-card:hover {
    box-shadow: 0 10px 30px rgba(21, 110, 104, 0.15); /* Hover shadow */
    border-color: #156e68; /* Hover border */
    transform: translateY(-5px); /* Lift on hover */
}

/* Inner wrapper for flex layout */
.team-member-inner {
    display: flex;
    flex-direction: row; /* Image left, content right */
    height: 100%;
    position: relative;
}

/* Image Wrapper */
.team-img-wrapper {
    flex: 0 0 30%; /* Takes 30% width */
    min-width: 250px; /* Minimum width for image area */
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #e9ecef, #f8f9fa); /* Consistent background */
    border-right: 1px solid #e8e8e8; /* Separator line */
}

.team-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Cover the area */
    transition: transform 0.5s ease;
}

.team-member-card:hover .team-img-wrapper img {
    transform: scale(1.05); /* Zoom image on hover */
}

/* Content Wrapper */
.team-content-wrapper {
    flex: 1; /* Takes remaining space */
    padding: 30px 35px; /* Consistent padding */
    display: flex;
    flex-direction: column;
}

/* For cards without images, content takes full width */
.team-content-wrapper.full-width-content {
    flex: 1 1 100%; /* Full width */
    border-left: none; /* No left border if no image */
    padding: 30px 35px; /* Same padding */
}

/* Team Member Titles and Info */
.team-name {
    font-size: 1.5rem; /* Slightly larger name */
    font-weight: 700;
    color: #333;
    margin-bottom: 8px;
    line-height: 1.2;
}

.team-title {
    font-size: 1.1rem; /* Slightly larger title */
    font-weight: 600;
    color: #156e68; /* Consistent color */
    margin-bottom: 10px;
    line-height: 1.3;
}

.team-qualifications {
    font-size: 0.95rem;
    color: #555;
    font-style: italic;
    margin-bottom: 15px;
    line-height: 1.4;
}

.team-expertise {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 20px;
    padding: 10px 15px;
    background-color: rgba(174, 201, 68, 0.1); /* Light green background */
    border-radius: 5px;
    border-left: 3px solid #aec944; /* Accent border */
}

/* Bio Text */
.team-bio {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #555;
    flex-grow: 1; /* Pushes content down */
    overflow-y: auto; /* Allow scrolling if content is too long */
    max-height: 400px; /* Limit height */
    padding-right: 10px; /* Space for scrollbar */
}

.team-bio p {
    margin-bottom: 15px;
}

/* Responsive Adjustments */
@media (max-width: 1199px) {
    .team-img-wrapper {
        flex: 0 0 35%; /* Adjust image width */
        min-width: 200px; /* Adjust min width */
    }
    .team-content-wrapper {
        padding: 25px 30px; /* Adjust padding */
    }
    .team-name {
        font-size: 1.4rem; /* Adjust name size */
    }
    .team-title {
        font-size: 1rem; /* Adjust title size */
    }
}

@media (max-width: 991px) {
    .team-member-inner {
        flex-direction: column; /* Stack on medium screens */
    }

    .team-img-wrapper {
        flex: 0 0 250px; /* Fixed height for image */
        min-width: 100%; /* Full width of card */
        border-right: none; /* No right border */
        border-bottom: 1px solid #e8e8e8; /* Bottom border instead */
    }

    .team-content-wrapper {
        padding: 25px 25px; /* Adjust padding */
    }

    .team-content-wrapper.full-width-content {
        padding: 25px 25px; /* Adjust padding for full width */
    }
}

@media (max-width: 767px) {
    .key-professionals-section {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .sec-title {
        margin-bottom: 40px;
    }

    .team-member-inner {
        flex-direction: column; /* Ensure stacking on small screens */
    }

    .team-img-wrapper {
        flex: 0 0 200px; /* Smaller image height */
        min-width: 100%; /* Full width */
        border-right: none;
        border-bottom: 1px solid #e8e8e8;
    }

    .team-content-wrapper,
    .team-content-wrapper.full-width-content {
        padding: 20px 20px; /* Smaller padding */
    }

    .team-name {
        font-size: 1.3rem; /* Smaller name */
    }

    .team-title {
        font-size: 1rem; /* Smaller title */
    }

    .team-qualifications {
        font-size: 0.9rem; /* Smaller qualifications */
    }

    .team-expertise {
        font-size: 0.85rem; /* Smaller expertise */
        padding: 8px 12px; /* Smaller padding */
    }

    .team-bio {
        font-size: 0.9rem; /* Smaller bio text */
        max-height: 300px; /* Smaller max height */
    }

    .team-members-list {
        gap: 30px; /* Smaller gap between cards */
    }
}
</style>

@endsection