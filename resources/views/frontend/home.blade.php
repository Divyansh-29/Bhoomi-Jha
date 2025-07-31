@extends('frontend.layout.base')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
    <!-- Modern Hero Carousel Section Start -->
    <div class="modern-hero-carousel" id="heroCarousel">
        <div class="carousel-container">
            <!-- Slide 1 -->
            <div class="hero-slide active" data-bg="{{asset('assets/images/slider3.jpg')}}">
                <div class="slide-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="content-wrapper">
                            <div class="hero-badge">Environment • Sustainability</div>
                            <h1 class="hero-title">
                                <span class="title-line">We Believe In Making</span>
                                <span class="title-highlight">The Environment Sustainable Through Suggestions and Solutions</span>
                            </h1>
                            <div class="hero-actions">
                                <a href="{{route('contact-us')}}" class="btn-primary">Get started now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" data-bg="{{asset('assets/images/slide2-bg.jpg')}}">
                <div class="slide-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="content-wrapper">
                            <div class="hero-badge">Clearances • Compliance • Audits</div>
                            <h1 class="hero-title">
                                <span class="title-line">We Help You Towards</span>
                                <span class="title-highlight">Environmental Clearances, Compliances and Audits, Treating Waste, Harvesting Rain, Reducing Pollution, Conserving Energy and Online Monitoring</span>
                            </h1>
                            <div class="hero-actions">
                                <a href="{{route('contact-us')}}" class="btn-primary">Get started now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" data-bg="{{asset('assets/images/slide3-bg.jpg')}}">
                <div class="slide-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="content-wrapper">
                            <div class="hero-badge">Design • Implementation • Maintenance</div>
                            <h1 class="hero-title">
                                <span class="title-line">We help fulfil your</span>
                                <span class="title-highlight">Design, Implementation, Commissioning and O&M needs for Treatment Plants, RWH, Anti Smog Guns, Scrubbers, Piezometers and Flowmeters.</span>
                            </h1>
                            <div class="hero-actions">
                                <a href="{{route('contact-us')}}" class="btn-primary">Get started now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="hero-slide" data-bg="{{asset('assets/images/slide4-bg.jpg')}}">
                <div class="slide-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="content-wrapper">
                            <div class="hero-badge">Industry Leaders • Trusted Partners</div>
                            <h1 class="hero-title">
                                <span class="title-line">We Lead In Our Offerings</span>
                                <span class="title-highlight">for Townships, Heavy Industries, Building and Construction, Mining, Highways and Distilleries</span>
                            </h1>
                            <div class="hero-actions">
                                <a href="{{route('contact-us')}}" class="btn-primary">Get started now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation with SVG Icons -->
        <div class="carousel-nav">
            <button class="nav-btn prev-btn" onclick="changeSlide(-1)">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="nav-btn next-btn" onclick="changeSlide(1)">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <span class="indicator active" onclick="currentSlide(1)"></span>
            <span class="indicator" onclick="currentSlide(2)"></span>
            <span class="indicator" onclick="currentSlide(3)"></span>
            <span class="indicator" onclick="currentSlide(4)"></span>
        </div>

        <!-- Scroll Indicator with SVG -->
        <div class="scroll-indicator">
            <div class="scroll-text">Scroll Down</div>
            <div class="scroll-arrow">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
    <!-- Modern Hero Carousel Section End -->

    <style>
    /* Modern Hero Carousel Styles */
    .modern-hero-carousel {
        position: relative;
        height: 100vh;
        min-height: 600px;
        max-height: 800px;
        overflow: hidden;
        background: #000;
    }

    .carousel-container {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .hero-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0;
        transition: opacity 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        transform: translateZ(0);
        will-change: opacity;
    }

    .hero-slide.active {
        opacity: 1;
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 50, 30, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
        padding: 0 15px;
    }

    .content-wrapper {
        max-width: 700px;
        animation: slideInUp 1s ease-out;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(46, 204, 113, 0.1);
        border: 2px solid #2ecc71;
        color: #2ecc71;
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
    }

    /* REDUCED FONT SIZES */
    .hero-title {
        font-size: 2.2rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 25px;
        color: #fff;
    }

    .title-line {
        display: block;
        color: #fff;
        margin-bottom: 8px;
        font-size: 2rem;
    }

    .title-highlight {
        display: block;
        background: linear-gradient(135deg, #2ecc71, #27ae60);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        font-size: 1.4rem;
        line-height: 1.3;
        margin-top: 10px;
    }

    .hero-actions {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 25px;
    }

    .btn-primary {
        padding: 14px 28px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: inline-flex;
        align-items: center;
        font-size: 14px;
        border: 2px solid transparent;
        background: linear-gradient(135deg, #2ecc71, #27ae60);
        color: #fff;
        box-shadow: 0 10px 30px rgba(46, 204, 113, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 40px rgba(46, 204, 113, 0.4);
        color: #fff;
        text-decoration: none;
    }

    /* Navigation */
    .carousel-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 30px;
        z-index: 3;
        pointer-events: none;
        transform: translateY(-50%);
    }

    .nav-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
        pointer-events: all;
        outline: none;
    }

    /* SVG Icon Styling */
    .nav-btn svg {
        width: 16px;
        height: 16px;
        color: inherit;
        transition: transform 0.3s ease;
    }

    .nav-btn:hover {
        background: rgba(46, 204, 113, 0.2);
        border-color: #2ecc71;
        transform: scale(1.1);
    }

    .nav-btn:hover svg {
        transform: scale(1.1);
    }

    .nav-btn:focus {
        outline: 2px solid #2ecc71;
        outline-offset: 2px;
    }

    /* Indicators */
    .carousel-indicators {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
        z-index: 3;
    }

    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: #2ecc71;
        transform: scale(1.2);
    }

    .indicator:hover {
        background: rgba(46, 204, 113, 0.8);
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        right: 30px;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
        animation: bounce 2s infinite;
        z-index: 3;
    }

    .scroll-text {
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    .scroll-arrow {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .scroll-arrow svg {
        width: 14px;
        height: 14px;
        color: inherit;
    }

    /* FIXED: Service cards - no white blocks, flexible heights */
    .rs-number.flip-card {
        height: auto;
        margin-bottom: 0; /* Remove bottom margin that was creating white space */
        border: none; /* Remove any borders */
        padding: 0; /* Remove padding */
    }

    .rs-number-text.flip-card-inner {
        height: 100%;
        border: none;
        margin: 0;
        padding: 0;
    }

    .rs-number-area.flip-card-front {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        margin: 0;
        padding: 0;
    }

    .rs-number-area.flip-card-front:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    /* Image stretches to fit card height naturally */
    .rs-number-area.flip-card-front img {
        width: 100%;
        height: auto;
        min-height: 180px;
        max-height: 250px;
        object-fit: cover;
        object-position: center;
        flex-shrink: 0;
        transition: transform 0.3s ease;
        border: none;
        margin: 0;
        padding: 0;
        display: block; /* Ensures proper display */
    }

    .flip-card:hover .rs-number-area.flip-card-front img {
        transform: scale(1.05);
    }

    /* Service text area */
    .services-text {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px 15px;
        text-align: center;
        min-height: 100px;
        background: #fff;
        border: none;
        margin: 0;
    }

    .services-text .ser-title {
        margin: 0;
        font-size: 16px;
        line-height: 1.4;
        font-weight: 600;
    }

    .services-text .ser-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .services-text .ser-title a:hover {
        color: #2ecc71;
    }

    /* Fix for any potential container issues */
    .rs-services .row {
        margin: 0;
    }

    .rs-services .col-lg-3 {
        padding: 0 12px 25px 12px; /* Only side padding, no bottom margin on container */
    }

    /* Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .title-line {
            font-size: 1.6rem;
        }
        
        .title-highlight {
            font-size: 1.2rem;
        }
        
        .btn-primary {
            font-size: 13px;
            padding: 12px 24px;
        }
    }

    @media (max-width: 768px) {
        .modern-hero-carousel {
            height: 100vh;
            min-height: 500px;
        }
        
        .content-wrapper {
            max-width: 100%;
        }
        
        .hero-title {
            font-size: 1.5rem;
        }
        
        .title-line {
            font-size: 1.4rem;
        }
        
        .title-highlight {
            font-size: 1rem;
        }
        
        .btn-primary {
            padding: 12px 24px;
            font-size: 12px;
        }
        
        .carousel-nav {
            padding: 0 20px;
        }
        
        .nav-btn {
            width: 50px;
            height: 50px;
        }
        
        .nav-btn svg {
            width: 14px;
            height: 14px;
        }
        
        .scroll-indicator {
            display: none;
        }

        .rs-number-area.flip-card-front img {
            min-height: 150px;
            max-height: 200px;
        }
        
        .services-text .ser-title {
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .modern-hero-carousel {
            min-height: 450px;
        }
        
        .hero-badge {
            font-size: 10px;
            padding: 5px 12px;
        }
        
        .hero-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .title-line {
            font-size: 1.2rem;
        }
        
        .title-highlight {
            font-size: 0.9rem;
        }
        
        .btn-primary {
            font-size: 11px;
            padding: 10px 20px;
        }

        .rs-number-area.flip-card-front img {
            min-height: 130px;
            max-height: 180px;
        }
        
        .services-text {
            padding: 15px 10px;
            min-height: 80px;
        }
        
        .services-text .ser-title {
            font-size: 14px;
        }
    }
    </style>

    <script>
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');

    // Initialize carousel (NO AUTO-SLIDE)
    function initCarousel() {
        showSlide(0);
        
        // Set background images using your original image paths
        slides.forEach((slide, index) => {
            const slideNumber = index + 1;
            const bgImage = slide.getAttribute('data-bg');
            // Set the background image from data-bg attribute
            if (bgImage) {
                slide.style.backgroundImage = `url(${bgImage})`;
            } else {
                // Fallback to numbered naming convention
                slide.style.backgroundImage = `url(${window.location.origin}/assets/images/slide${slideNumber}-bg.jpg)`;
            }
        });
    }

    // Show specific slide
    function showSlide(index) {
        // Remove active class from all slides and indicators
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Add active class to current slide and indicator
        if (slides[index]) slides[index].classList.add('active');
        if (indicators[index]) indicators[index].classList.add('active');
        
        currentSlideIndex = index;
    }

    // Go to next/previous slide (MANUAL ONLY)
    function changeSlide(direction) {
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= slides.length) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = slides.length - 1;
        }
        
        showSlide(currentSlideIndex);
    }

    // Go to specific slide
    function currentSlide(index) {
        showSlide(index - 1);
    }

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', initCarousel);

    // Handle keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            changeSlide(-1);
        } else if (e.key === 'ArrowRight') {
            changeSlide(1);
        }
    });
    </script>

    <!-- About Section Start -->
    <div class="rs-about pt-relative style3 pt-120 pb-120 md-pt-75 md-pb-80" style="background: #f7f7f7;" id="about">
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
                            <li><i class="fa fa-check"></i><span>Mining of Minerals</span></li>
                            <li><i class="fa fa-check"></i><span>Thermal Plants</span></li>
                            <li><i class="fa fa-check"></i><span>Coal Washeries</span></li>
                            <li><i class="fa fa-check"></i><span>Mineral Beneficiation</span></li>
                            <li><i class="fa fa-check"></i><span>Metallurgical Industries (Ferrous & Non-Ferrous)</span></li>
                            <li><i class="fa fa-check"></i><span>Cement Plants</span></li>
                            <li><i class="fa fa-check"></i><span>Building and Construction Projects </span></li>
                        </ul>
                        <div class="btn-part mt-40">
                            <a class="readon learn-more learn-btn" href="{{route('about-us','about-bhoomija')}}">Learn More</a>
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
    {{-- <div class="rs-services main-home style3 bg13 pt-120 pb-120 md-pt-80 md-pb-80" id="services">
        <div class="container pt-relative">
            <div class="sec-title">
                <h2 class="title wow fadeInDown pb-20">Our Services</h2>
                <div class="desc pb-30">Our services cover a large spectrum, starting from helping you prepare and get consents and environmental clearances from various state and centre level bodies to
                    conducting periodic audits as mandated in the clearances to helping you get Green Building
                    Certifications.</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="rs-number flip-card">
                        <div class="rs-number-text flip-card-inner">
                            <div class="rs-number-area flip-card-front">
                                <img src="{{asset('assets/images/service/environmental-impacts.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','environmental-clearence') }}">Environmental Impacts Assessment (EIA) Studies</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Environmental Impacts Assessment (EIA) Studies
                                </h4>
                                <div class="desc pb-10 text-dark">Essential assessment for new or modified projects to evaluate potential environmental impacts.<br>
                                    <p><a href="{{ route('service','environmental-impacts-assessment') }}"
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
                                <img src="{{asset('assets/images/service/environmental-monitoring.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','ground-water-clearence') }}">Environmental Monitoring</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Environmental Monitoring
                                </h4>
                                <div class="desc pb-10 text-dark">Monitoring environmental parameters, including groundwater usage, to ensure compliance and sustainability.<br>
                                    <p><a href="{{ route('service','environmental-monitoring') }}"
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
                                <img src="{{asset('assets/images/service/environmental-audits.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','consent-to-establish-and-operate') }}">Environmental Audits</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Environmental Audits
                                </h4>
                                <div class="desc pb-10 text-dark">Comprehensive audits to assess environmental compliance during project construction and operation phases.<br>
                                    <p><a href="{{ route('service','environmental-audits') }}"
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
                                <img src="{{asset('assets/images/service/fc-wc.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','periodic-compliance-audits') }}">Forest Clearance (FC), Wildlife Clearance (WC)</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Forest Clearance (FC), Wildlife Clearance (WC)
                                </h4>
                                <div class="desc pb-10 text-dark">Navigating complex clearances for projects impacting forest or wildlife areas with expert guidance.<br>
                                    <p><a href="{{ route('service','fc-wc') }}" style="font-weight:800;color:#000;">Read
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
                                <img src="{{asset('assets/images/service/consent-to-establish.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','green-building-cetification') }}">Consent to Estalish and Operate (SPBs)</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Consent to Estalish and Operate (SPBs)
                                </h4>
                                <div class="desc pb-10 text-dark">Securing necessary consents for establishing and operating Small Pollution Control Boards (SPBs).<br>
                                    <p><a href="{{ route('service','consent-to-estalish-and-operate') }}" style="font-weight:800;color:#000;">Read
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
                                <img src="{{asset('assets/images/service/six-monthly.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','design-services') }}">Six Monthly Compliance Report Preparation For EC Conditions</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Six Monthly Compliance Report Preparation For EC Conditions
                                </h4>
                                <div class="desc pb-10 text-dark">Preparing mandatory six-monthly reports demonstrating adherence to Environmental Clearance (EC) conditions.<br>
                                    <p><a href="{{ route('service','six-monthly-compliance-report-preparation-for-ec-conditions') }}" style="font-weight:800;color:#000;">Read
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
                                <img src="{{asset('assets/images/service/carbon-footprints.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','operations-and-maintenance') }}">Carbon Foot Print & Climate Change Studies</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Carbon Foot Print & Climate Change Studies
                                </h4>
                                <div class="desc pb-10 text-dark">Analyzing your project's carbon footprint and potential climate change impacts for informed decisions.<br>
                                    <p><a href="{{ route('service','carbon-foot-print-&-climate-change-studies') }}"
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
                                <img src="{{asset('assets/images/service/socio.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','periodic-compliance-audits') }}">Socio-Economic Impact Assessment</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Socio-Economic Impact Assessment
                                </h4>
                                <div class="desc pb-10 text-dark">Evaluating the potential social and economic effects of projects on local communities and regions.<br>
                                    <p><a href="{{ route('service','socio-economic-impact-assessment') }}" style="font-weight:800;color:#000;">Read
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
                                <img src="{{asset('assets/images/service/stp.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','green-building-cetification') }}">Design & Engineering for Tech MBBR, SBR, ASP, MBR, etc (STP, ETP & CPU etc)</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Design & Engineering for Tech MBBR, SBR, ASP, MBR, etc (STP, ETP & CPU etc)
                                </h4>
                                <div class="desc pb-10 text-dark">Expert design and engineering for advanced wastewater treatment technologies like MBBR, SBR, ASP, MBR.<br>
                                    <p><a href="{{ route('service','design-&-engineering-for-tech') }}" style="font-weight:800;color:#000;">Read
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
                                <img src="{{asset('assets/images/service/annual-statement.jpg')}}" alt="">
                                <div class="services-text">
                                    <h3 class="ser-title"><a href="{{ route('service','design-services') }}">Annual Environmental Statement (Form-V)</a></h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h4 class="ser-title mb-1">Annual Environmental Statement (Form-V)
                                </h4>
                                <div class="desc pb-10 text-dark">Preparing the mandatory Annual Environmental Statement (Form-V) for regulatory compliance reporting.<br>
                                    <p><a href="{{ route('service','annual-environmental-statement') }}" style="font-weight:800;color:#000;">Read
                                            more>></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services Section End -->

    <!-- Contact Section -->
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
                        <!-- Display success or error messages -->
                        <div id="form-messages-home"></div>
                        <div class="alert alert-success-2 alert-dismissible fade show" role="alert" id="success-alert-home" style="display: none;">
                            <strong>Success!</strong> <span id="success-message-home"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Feedback Form Start -->
                        <form action="{{ route('contact-us.post') }}" method="POST" id="home-feedback-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <!-- Name Field -->
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <p>
                                            <input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Your Name *" value="" type="text"
                                                name="name" id="home_name" required />
                                            <small class="text-danger error" id="error-home_name"></small>
                                        </p>
                                    </div>
                                    <!-- Email Field -->
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <p>
                                            <input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Email *" value="" type="email"
                                                name="email" id="home_email" required />
                                            <small class="text-danger error" id="error-home_email"></small>
                                        </p>
                                    </div>
                                    <!-- Phone Field -->
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <p>
                                            <input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Phone no. *" value="" type="text"
                                                name="phone" id="home_phone" required
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)" />
                                            <small class="text-danger error" id="error-home_phone"></small>
                                        </p>
                                    </div>
                                    <!-- Subject Field -->
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <p>
                                            <input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Your Subject *" value="" type="text"
                                                name="subject" id="home_subject" required />
                                            <small class="text-danger error" id="error-home_subject"></small>
                                        </p>
                                    </div>
                                    <!-- Message Field -->
                                    <div class="col-lg-12 mb-30">
                                        <p>
                                            <textarea cols="40" rows="10"
                                                maxlength="2000"
                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Message" name="message" id="home_message" required></textarea>
                                            <small class="text-danger error" id="error-home_message"></small>
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <p>
                                            <button type="submit" value="SEND" id="send-home" class="readon learn-more submit" onclick="submitHomeFeedback(event)">
                                                <span class="loading"></span> Submit Now
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                        <!-- Feedback Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Home Page Specific Feedback Submission Function
    function submitHomeFeedback(event) {
        event.preventDefault(); // Prevent default form submission

        // Define fields for validation (matching the form field names/ids)
        const fields = [
            { id: 'home_name', label: 'Name' },
            { id: 'home_email', label: 'Email', type: 'email' },
            { id: 'home_phone', label: 'Phone', type: 'tel' },
            { id: 'home_subject', label: 'Subject' },
            { id: 'home_message', label: 'Message' }
        ];

        // Clear previous errors
        $('.error').text('');
        $('#form-messages-home').hide().removeClass('alert-success alert-danger').html('');
        $('#success-alert-home').hide().removeClass('alert-success alert-danger');

        // Basic client-side validation
        let isValid = true;
        fields.forEach(field => {
            const value = $(`#${field.id}`).val() || null;
            if (!value || value.trim() === '') {
                $(`#error-${field.id}`).text(`${field.label} is required`);
                isValid = false;
            } else if (field.type === 'email' && !validateEmail(value.trim())) {
                $(`#error-${field.id}`).text(`Please enter a valid email`);
                isValid = false;
            } else if (field.type === 'tel' && !/^\d{10}$/.test(value.trim())) {
                $(`#error-${field.id}`).text(`Phone must be 10 digits`);
                isValid = false;
            }
        });

        if (!isValid) {
            return false; // Stop submission if validation fails
        }

        // Show loading spinner
        $('.readon.learn-more.submit').addClass('loading-show');

        // Get form data and action URL
        const form = $('#home-feedback-form');
        const actionUrl = form.attr('action');
        const formData = form.serialize();

        // Perform AJAX POST request
        $.ajax({
            type: 'POST',
            url: actionUrl,
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                // Hide loading spinner
                $('.readon.learn-more.submit').removeClass('loading-show');

                if (data.status === 'success') {
                    // Show success message using the unique home page elements
                    $('#success-message-home').html(`${data.message}`);
                    $('#success-alert-home').fadeIn();
                    form[0].reset(); // Reset the form

                    // Auto-hide success message after 5 seconds
                    setTimeout(() => {
                        $('#success-alert-home').fadeOut();
                    }, 5000);
                } else {
                    // Handle unexpected success response structure
                    $('#form-messages-home').removeClass('alert-success').addClass('alert-danger').html('<strong>Error!</strong> Unexpected response.').show();
                }
            },
            error: function (xhr, status, error) {
                // Hide loading spinner
                $('.readon.learn-more.submit').removeClass('loading-show');

                // Handle error response
                let errorMessage = 'An error occurred while submitting the form. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }

                // Show error message using the unique home page elements
                $('#form-messages-home').removeClass('alert-success').addClass('alert-danger').html(`<strong>Error!</strong> ${errorMessage}`).show();

                // Auto-hide error message after 5 seconds
                setTimeout(() => {
                    $('#form-messages-home').fadeOut();
                }, 7000);
            }
        });
    }

    // Simple email validation helper function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
    </script>
@endsection
