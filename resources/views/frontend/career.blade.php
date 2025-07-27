@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: linear-gradient(135deg, rgba(21, 110, 104, 0.85), rgba(13, 75, 70, 0.9)), url({{asset('assets/images/career-banner-bg.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Careers at {{ env('SITENAME') }}</h1>
                <ul>
                    <li title="{{ env('SITENAME') }} - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Intro Section Start -->
        <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                                <img src="{{asset('assets/images/career-intro-img.webp')}}" alt="Careers at {{ env('SITENAME') }}" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Join Our Team</div>
                                <h2 class="title pb-38">
                                    Shape the Future of Environmental Sustainability
                                </h2>
                                <div class="desc pb-35">
                                    At <strong>{{ env('SITENAME') }} Envirocare Private Limited, </strong>we are passionate about creating a sustainable future. We believe that our people are our greatest asset, and we are always looking for talented individuals who share our vision and commitment to environmental excellence.
                                </div>
                                <div class="desc pb-35">
                                    Join our dynamic team of environmental professionals and contribute to meaningful projects that make a real difference. We offer exciting career opportunities in a collaborative and growth-oriented environment where innovation thrives.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- Intro Section End -->
        <!-- Why Join Us Section Start -->
        <div class="rs-services style2 pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Why {{ env('SITENAME') }}?</span>
                    <h2 class="title">Why Build Your Career With Us?</h2>
                    <div class="desc mt-10">Discover the benefits of joining our growing team</div>
                </div>
                <div class="row gutter-40">
                    <!-- Challenging Projects -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/challenging-projects-icon.png') }}" alt="Challenging Projects Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Challenging Projects</h4>
                                <p class="desc">Work on diverse and complex environmental projects across various sectors including mining, infrastructure, energy, and manufacturing.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Professional Growth -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/professional-growth-icon.png') }}" alt="Professional Growth Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Professional Growth</h4>
                                <p class="desc">Access to continuous learning opportunities, mentorship programs, and career advancement paths tailored to your aspirations.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Collaborative Culture -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/collaborative-culture-icon.png') }}" alt="Collaborative Culture Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Collaborative Culture</h4>
                                <p class="desc">Be part of a supportive team that values teamwork, open communication, and mutual respect in a dynamic work environment.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Work-Life Balance -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/work-life-balance-icon.png') }}" alt="Work-Life Balance Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Work-Life Balance</h4>
                                <p class="desc">Enjoy flexible work arrangements, wellness programs, and generous leave policies that support your well-being.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Competitive Compensation -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/competitive-compensation-icon.png') }}" alt="Competitive Compensation Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Competitive Compensation</h4>
                                <p class="desc">Receive attractive salary packages, performance bonuses, and comprehensive benefits including health insurance and retirement plans.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Sustainability Focus -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/sustainability-focus-icon.png') }}" alt="Sustainability Focus Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Sustainability Focus</h4>
                                <p class="desc">Contribute to meaningful work that aligns with your values and makes a positive impact on the environment and society.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Join Us Section End -->
        <!-- Current Openings Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Current Opportunities</span>
                    <h2 class="title">Current Job Openings</h2>
                    <div class="desc mt-10">Explore exciting career opportunities at {{ env('SITENAME') }}</div>
                </div>
                <div class="row gutter-40">
                    <!-- Job Opening 1 -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Environmental Consultant - Mining Sector</h4>
                                <p class="desc pb-15">Location: <strong>Noida, Uttar Pradesh</strong> | Experience: <strong>2-5 Years</strong></p>
                                <div class="job-description mb-20">
                                    <p>We are seeking an experienced Environmental Consultant with expertise in the mining sector to join our team in Noida. The ideal candidate will have hands-on experience in conducting Environmental Impact Assessments (EIAs), preparing Environment Management Plans (EMPs), and managing Environmental Clearances (ECs) for mining projects.</p>
                                </div>
                                <div class="job-responsibilities mb-20">
                                    <h5 class="sub-title">Key Responsibilities:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Lead EIA/EMP studies for mining projects</li>
                                        <li>Coordinate with regulatory authorities and stakeholders</li>
                                        <li>Manage EC application processes and documentation</li>
                                        <li>Conduct field surveys and data collection</li>
                                        <li>Prepare technical reports and presentations</li>
                                        <li>Ensure compliance with MoEF&CC guidelines</li>
                                    </ul>
                                </div>
                                <div class="job-requirements">
                                    <h5 class="sub-title">Requirements:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Bachelor's/Master's degree in Environmental Science/Engineering</li>
                                        <li>Minimum 2 years of experience in EIA/EC for mining</li>
                                        <li>Strong analytical and problem-solving skills</li>
                                        <li>Excellent written and verbal communication abilities</li>
                                        <li>Proficiency in MS Office and environmental software</li>
                                    </ul>
                                </div>
                                <div class="apply-button mt-25">
                                    <button class="readon learn-more submit">
                                        <a href="#apply-now" class="text-white">Apply Now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Opening 2 -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Senior Environmental Scientist - Water Resources</h4>
                                <p class="desc pb-15">Location: <strong>New Delhi</strong> | Experience: <strong>5-8 Years</strong></p>
                                <div class="job-description mb-20">
                                    <p>We are looking for a Senior Environmental Scientist specializing in water resources to lead complex water management projects. The candidate should have extensive experience in water quality assessment, wastewater treatment technologies, and water auditing for industrial clients.</p>
                                </div>
                                <div class="job-responsibilities mb-20">
                                    <h5 class="sub-title">Key Responsibilities:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Design and execute water quality monitoring programs</li>
                                        <li>Develop wastewater treatment solutions for industries</li>
                                        <li>Conduct water audits and prepare efficiency reports</li>
                                        <li>Lead technical teams on water-related projects</li>
                                        <li>Represent the company in client meetings and regulatory forums</li>
                                        <li>Mentor junior staff and contribute to proposal development</li>
                                    </ul>
                                </div>
                                <div class="job-requirements">
                                    <h5 class="sub-title">Requirements:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>M.Sc./Ph.D. in Environmental Science/Water Resources</li>
                                        <li>Minimum 5 years of experience in water management</li>
                                        <li>Knowledge of CPCB and state water board regulations</li>
                                        <li>Experience with water modeling software (e.g., QUAL2K, MIKE)</li>
                                        <li>Strong leadership and project management skills</li>
                                    </ul>
                                </div>
                                <div class="apply-button mt-25">
                                    <button class="readon learn-more submit">
                                        <a href="#apply-now" class="text-white">Apply Now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Opening 3 -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">GIS Analyst - Environmental Applications</h4>
                                <p class="desc pb-15">Location: <strong>Gurgaon, Haryana</strong> | Experience: <strong>1-3 Years</strong></p>
                                <div class="job-description mb-20">
                                    <p>We are seeking a skilled GIS Analyst to support our environmental consulting projects with spatial data analysis and mapping. The candidate should be proficient in GIS software and have experience applying geospatial technologies to environmental challenges.</p>
                                </div>
                                <div class="job-responsibilities mb-20">
                                    <h5 class="sub-title">Key Responsibilities:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Create thematic maps for EIA and monitoring reports</li>
                                        <li>Analyze spatial data for environmental impact assessment</li>
                                        <li>Perform remote sensing analysis for land use changes</li>
                                        <li>Support field teams with GPS data collection</li>
                                        <li>Maintain GIS databases and develop cartographic products</li>
                                        <li>Integrate GIS outputs into technical presentations</li>
                                    </ul>
                                </div>
                                <div class="job-requirements">
                                    <h5 class="sub-title">Requirements:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Bachelor's degree in Geography, GIS, or related field</li>
                                        <li>Proficiency in ArcGIS, QGIS, and ERDAS Imagine</li>
                                        <li>Experience with spatial analysis and raster processing</li>
                                        <li>Knowledge of GPS equipment and data collection methods</li>
                                        <li>Basic understanding of environmental principles</li>
                                    </ul>
                                </div>
                                <div class="apply-button mt-25">
                                    <button class="readon learn-more submit">
                                        <a href="#apply-now" class="text-white">Apply Now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Opening 4 -->
                    <div class="col-lg-6 col-md-12 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-content text-left">
                                <h4 class="title">Junior Environmental Engineer - Air Quality</h4>
                                <p class="desc pb-15">Location: <strong>Kolkata, West Bengal</strong> | Experience: <strong>0-2 Years</strong></p>
                                <div class="job-description mb-20">
                                    <p>We are looking for a motivated Junior Environmental Engineer to assist with air quality monitoring and assessment projects. This is an excellent opportunity for a recent graduate to gain hands-on experience in a growing environmental consultancy firm.</p>
                                </div>
                                <div class="job-responsibilities mb-20">
                                    <h5 class="sub-title">Key Responsibilities:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>Participate in field air quality monitoring campaigns</li>
                                        <li>Calibrate and operate air monitoring equipment</li>
                                        <li>Collect and analyze ambient air samples</li>
                                        <li>Prepare preliminary data reports and charts</li>
                                        <li>Assist senior engineers with dispersion modeling</li>
                                        <li>Maintain monitoring equipment and logs</li>
                                    </ul>
                                </div>
                                <div class="job-requirements">
                                    <h5 class="sub-title">Requirements:</h5>
                                    <ul style="list-style: disc; padding: 15px 20px; margin-top: 15px;">
                                        <li>B.E./B.Tech in Environmental/Civil Engineering</li>
                                        <li>Fresher or up to 2 years of relevant experience</li>
                                        <li>Understanding of air pollution control principles</li>
                                        <li>Ability to work outdoors in various weather conditions</li>
                                        <li>Good attention to detail and organizational skills</li>
                                    </ul>
                                </div>
                                <div class="apply-button mt-25">
                                    <button class="readon learn-more submit">
                                        <a href="#apply-now" class="text-white">Apply Now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Current Openings Section End -->
        <!-- Apply Now Section Start -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Can't find a suitable position? Send us your resume anyway!</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">We're always interested in connecting with talented professionals who share our passion for environmental sustainability. Submit your resume and cover letter, and we'll reach out if a suitable opportunity arises.</div>
                </div>
            </div>
        </div>
        <!-- Apply Now Section End -->
        <!-- Application Form Section Start -->
        <div class="rs-services style2 gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Job Application</span>
                    <h2 class="title">Submit Your Application</h2>
                    <div class="desc mt-10">Fill out the form below to apply for a position at {{ env('SITENAME') }}</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="rs-requset">
                            <div id="form-messages"></div>
                            <div class="wpcf7 no-js" id="wpcf7-f65-o1" lang="en-US" dir="ltr" data-wpcf7-id="65">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="#wpcf7-f65-o1" method="post" class="wpcf7-form init" aria-label="Career Application form" novalidate="novalidate" data-status="init" enctype="multipart/form-data">
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
                                                            placeholder="Full Name *" value="" type="text"
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
                                                <p><span class="wpcf7-form-control-wrap" data-name="current_location"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false"
                                                            placeholder="Current Location" value="" type="text"
                                                            name="current_location" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="total_experience"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number form-control"
                                                            aria-invalid="false"
                                                            placeholder="Total Experience (Years)" value="" type="number"
                                                            name="total_experience" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="relevant_experience"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number form-control"
                                                            aria-invalid="false"
                                                            placeholder="Relevant Experience (Years)" value="" type="number"
                                                            name="relevant_experience" /></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <p><span class="wpcf7-form-control-wrap" data-name="applied_position"><select
                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            name="applied_position">
                                                            <option value="">Select Position Applying For *</option>
                                                            <option value="Environmental Consultant - Mining Sector">Environmental Consultant - Mining Sector</option>
                                                            <option value="Senior Environmental Scientist - Water Resources">Senior Environmental Scientist - Water Resources</option>
                                                            <option value="GIS Analyst - Environmental Applications">GIS Analyst - Environmental Applications</option>
                                                            <option value="Junior Environmental Engineer - Air Quality">Junior Environmental Engineer - Air Quality</option>
                                                            <option value="Other">Other</option>
                                                        </select></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <p><span class="wpcf7-form-control-wrap" data-name="cover_letter"><textarea cols="40" rows="10"
                                                            maxlength="2000"
                                                            class="wpcf7-form-control wpcf7-textarea form-control"
                                                            aria-invalid="false"
                                                            placeholder="Cover Letter (Tell us why you're interested in joining {{ env('SITENAME') }})"
                                                            name="cover_letter"></textarea></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <p><span class="wpcf7-form-control-wrap" data-name="resume_upload"><input
                                                            type="file" accept=".pdf,.doc,.docx"
                                                            class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false"
                                                            name="resume_upload" /></span>
                                                    <small class="text-muted">Upload your resume (PDF/DOC/DOCX, Max 5MB)</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <p><button type="submit" value="SEND" id="send"
                                                        class="readon learn-more submit">Submit Application</button>
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
        <!-- Application Form Section End -->
        <!-- Life at Bhoomija Section Start -->
        <div class="rs-about pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-title">Life at {{ env('SITENAME') }}</span>
                    <h2 class="title">Our Workplace Culture</h2>
                    <div class="desc mt-10">Experience the vibrant and supportive environment we foster</div>
                </div>
                <div class="row gutter-40">
                    <!-- Team Collaboration -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/team-collaboration-icon.png') }}" alt="Team Collaboration Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Team Collaboration</h4>
                                <p class="desc">We believe in the power of teamwork. Our collaborative culture encourages knowledge sharing, cross-functional projects, and collective problem-solving to achieve exceptional results.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Continuous Learning -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/continuous-learning-icon.png') }}" alt="Continuous Learning Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Continuous Learning</h4>
                                <p class="desc">We invest in our employees' growth through workshops, training programs, conference attendance, and professional certifications to keep pace with industry advancements.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Recognition & Rewards -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/recognition-rewards-icon.png') }}" alt="Recognition & Rewards Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Recognition & Rewards</h4>
                                <p class="desc">We celebrate achievements and milestones through performance-based incentives, peer recognition programs, and annual awards to acknowledge outstanding contributions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Work-Life Balance -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/work-life-balance-icon.png') }}" alt="Work-Life Balance Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Work-Life Balance</h4>
                                <p class="desc">We understand the importance of personal time. Our flexible work arrangements, wellness initiatives, and generous leave policies help maintain a healthy balance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Diversity & Inclusion -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/diversity-inclusion-icon.png') }}" alt="Diversity & Inclusion Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Diversity & Inclusion</h4>
                                <p class="desc">We embrace diversity in thought, background, and perspective. Our inclusive environment ensures everyone feels valued, respected, and empowered to contribute their best.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Community Engagement -->
                    <div class="col-lg-4 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-item hover-bg h-100">
                            <div class="services-icon-wrapper">
                                <div class="services-icon">
                                    <img src="{{ asset('assets/images/icons/community-engagement-icon.png') }}" alt="Community Engagement Icon" class="sector-icon">
                                </div>
                            </div>
                            <div class="services-content text-left">
                                <h4 class="title">Community Engagement</h4>
                                <p class="desc">We encourage our employees to participate in volunteer activities and community outreach programs, reinforcing our commitment to social responsibility and environmental stewardship.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Life at Bhoomija Section End -->
        <!-- CTA Section Start -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), url(https://www.pnas.org/content/118/32/e2112863118/F1.large.jpg) no-repeat; background-size: cover;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Ready to take the next step in your environmental career?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="#apply-now" class="text-white">Apply Now</a>
                    </button>
                    <div class="text-white">Join our team of passionate environmental professionals at {{ env('SITENAME') }} Envirocare Private Limited and contribute to shaping a sustainable future. Explore current openings and submit your application today.</div>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->
<style>
/* Custom styles for career page - Reusing existing service page styles with minor adjustments */
.services-item {
    border: 1px solid #e8e8e8;
    border-radius: 12px;
    padding: 30px 25px;
    transition: all 0.3s ease;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    height: 100%; /* Ensure cards try to be equal height */
}
.services-item:hover {
    border-color: #156e68;
    box-shadow: 0 10px 30px rgba(21,110,104,0.15);
    transform: translateY(-5px);
}
.services-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}
.services-item:hover::before {
    transform: scaleX(1);
}
.services-icon-wrapper {
    width: 100%;
    height: 180px;
    margin-bottom: 25px;
    overflow: hidden;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #e8e8e8;
    transition: all 0.3s ease;
    display: flex; /* Use flexbox for centering */
    justify-content: center;
    align-items: center;
}
.services-item:hover .services-icon-wrapper {
    border-color: #156e68;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(21,110,104,0.15);
}
.services-icon {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.sector-icon {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: brightness(0.9);
}
.services-item:hover .sector-icon {
    transform: scale(1.05);
    filter: brightness(1);
}
.services-content {
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.services-content.text-left {
    text-align: left;
}
.services-content.text-left ul {
    flex-grow: 1; /* Push the ul to grow and fill space */
}
.services-content .title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}
.services-item:hover .services-content .title {
    color: #156e68;
}
.services-content .desc {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin: 0;
}
.services-content ul {
    text-align: left;
    color: #666;
    font-size: 13px;
}
.services-content ul li {
    margin-bottom: 5px;
}
/* Responsive Design */
@media (max-width: 1199px) {
    .services-item {
        padding: 25px 20px;
    }
    .services-icon-wrapper {
        height: 160px;
    }
    .services-content .title {
        font-size: 17px;
    }
}
@media (max-width: 991px) {
    .col-lg-4, .col-lg-6, .col-lg-3 {
        margin-bottom: 30px;
    }
    .services-item {
        padding: 20px 18px;
    }
    .services-icon-wrapper {
        height: 150px;
    }
    .services-content .title {
        font-size: 16px;
        margin-bottom: 12px;
    }
    .services-content .desc {
        font-size: 13px;
    }
}
@media (max-width: 767px) {
    .services-item {
        padding: 25px 20px;
        margin-bottom: 20px;
    }
    .services-icon-wrapper {
        height: 160px;
        margin-bottom: 20px;
    }
    .services-content .title {
        font-size: 17px;
        margin-bottom: 15px;
    }
    .services-content .desc {
        font-size: 14px;
        line-height: 1.5;
    }
}
/* Enhanced section styling */
.sec-title .sub-title {
    color: #156e68;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
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
/* Equal height for all cards - SCOPED TO SERVICES SECTION ONLY */
.rs-services .row, .rs-about .row {
    display: flex;
    flex-wrap: wrap;
}
.h-100 {
    height: 100%;
}
@media (min-width: 992px) {
    .rs-services .row > [class*="col-"], .rs-about .row > [class*="col-"] {
        display: flex;
    }
}
/* Specific banner adjustment if needed */
.rs-breadcrumbs.img1 {
    background-size: cover !important;
    background-position: center !important;
}

/* Process Step Indicators */
.process-step-indicator {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #156e68, #aec944);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 18px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Benefits Section - Improved Alignment */
.rs-services.style2.gray-color .services-item {
    align-items: center; /* Align items to center */
    text-align: center; /* Center text */
}
.rs-services.style2.gray-color .services-item .services-content {
    text-align: center; /* Center content */
    align-items: center; /* Align content items to center */
}
.rs-services.style2.gray-color .services-item .services-content .title,
.rs-services.style2.gray-color .services-item .services-content .desc {
    text-align: center; /* Ensure title and desc are centered */
}

/* Benefits Section - Icon Styling */
.benefit-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 120px; /* Set a fixed height for consistency */
    margin-bottom: 20px;
    padding: 15px;
}

.css-icon {
    position: relative;
    width: 60px;
    height: 60px;
}

/* --- Compliance Icon --- */
.css-icon.compliance {
    width: 50px;
    height: 60px;
}

.compliance .shield {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 45px;
    background: #156e68;
    clip-path: polygon(50% 0%, 0% 20%, 0% 80%, 50% 100%, 100% 80%, 100% 20%);
    border: 2px solid #aec944;
}

.compliance .check {
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    width: 18px;
    height: 9px;
    border-bottom: 3px solid #aec944;
    border-left: 3px solid #aec944;
    transform: translateX(-50%) rotate(-45deg);
}

/* --- Timely Icon --- */
.css-icon.timely {
    width: 60px;
    height: 60px;
}

.timely .clock-face {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #156e68;
    border-radius: 50%;
    background: #f0f8f7;
    box-sizing: border-box;
}

.timely .hour-hand {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 3px;
    height: 15px;
    background: #156e68;
    transform-origin: top center;
    transform: translate(-50%, -100%) rotate(90deg);
    border-radius: 1.5px;
}

.timely .minute-hand {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 2px;
    height: 20px;
    background: #aec944;
    transform-origin: top center;
    transform: translate(-50%, -100%) rotate(30deg);
    border-radius: 1px;
}

.timely .clock-gear {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    background: #156e68;
    border-radius: 50%;
    transform: translate(-50%, -50%);
}

/* --- Risk Icon --- */
.css-icon.risk {
    width: 50px;
    height: 60px;
}

.risk .risk-shield {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 45px;
}

.risk-shield .shield-base {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #156e68;
    clip-path: polygon(50% 0%, 0% 20%, 0% 80%, 50% 100%, 100% 80%, 100% 20%);
    border: 2px solid #aec944;
}

.risk-shield .shield-cross {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    background: #ff4d4d;
    clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%);
    transform: translate(-50%, -50%);
}

.risk .risk-barrier {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 25px;
    height: 4px;
    background: #156e68;
    border-radius: 2px;
}

/* --- Expert Icon --- */
.css-icon.expert {
    width: 40px;
    height: 60px;
}

.expert .person-head {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 20px;
    background: #156e68;
    border-radius: 50%;
    border: 2px solid #aec944;
}

.expert .person-body {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 25px;
    height: 20px;
    background: #156e68;
    border-radius: 50% 50% 0 0;
    border: 2px solid #aec944;
    border-bottom: none;
}

.expert .tie-knot {
    position: absolute;
    top: 30px;
    left: 50%;
    transform: translateX(-50%);
    width: 6px;
    height: 6px;
    background: #aec944;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

.expert .briefcase {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 30px;
    height: 12px;
    background: #156e68;
    border: 2px solid #aec944;
    border-radius: 2px;
}

.briefcase .briefcase-handle {
    position: absolute;
    top: -4px;
    left: 3px;
    right: 3px;
    height: 4px;
    border-top: 2px solid #aec944;
    border-left: 2px solid #aec944;
    border-right: 2px solid #aec944;
    border-radius: 3px 3px 0 0;
}

/* Application Form Styling */
.rs-requset {
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
@media (max-width: 767px) {
    .rs-requset {
        padding: 30px 20px;
    }
}
</style>
@endsection