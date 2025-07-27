@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background:  url({{asset('assets/images/Consent-bg.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">About {{ env('SITENAME') }}</h1>
                <ul>
                    <li title="{{ env('SITENAME') }} - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="contact-wrap">
                            <div class="sec-title mb-50">
                                <div class="sub-text style-bg">Company</div>
                                <h2 class="title pb-40">
                                    About {{ env('SITENAME') }} Envirocare Private Limited
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="about-content-wrapper">
                            <div class="sec-title mb-40">
                                <div class="desc pb-30 lead highlight">
                                    {{ env('SITENAME') }} Envirocare Private Limited stands as a beacon of excellence in environmental consultancy, proudly accredited by the National Accreditation Board for Education and Training (NABET) under the Quality Council of India (QCI).
                                </div>
                                <div class="desc pb-30">
                                    Driven by an unwavering commitment to environmental sustainability and regulatory precision, we specialize in delivering comprehensive end-to-end consultancy services. Our expertise spans critical sectors including infrastructure, mining, industry, energy, and real estate development, ensuring projects not only comply with regulations but also champion ecological responsibility.
                                </div>
                                <div class="desc pb-30">
                                    Since our inception, the guiding philosophy at {{ env('SITENAME') }} Envirocare has been to foster sustainable development. We achieve this through the application of scientific integrity, continuous innovation, and a profound understanding of ecological systems. This approach ensures that every project we touch contributes positively to the environment and society.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="about-content-wrapper">
                            <div class="sec-title mb-40">
                                <div class="desc pb-30">
                                    Our strength lies in our exceptional team of highly qualified and experienced professionals. Hailing from diverse multidisciplinary backgrounds—encompassing environmental science, engineering, ecology, hydrology, geology, and socio-economics—our experts collaborate seamlessly. This synergy allows us to craft comprehensive, accurate, and highly actionable environmental solutions tailored to the unique needs of each client and project.
                                </div>
                                <div class="desc pb-30">
                                    As a prestigious NABET-accredited organization, {{ env('SITENAME') }} Envirocare rigorously adheres to the latest guidelines and procedures established by the Ministry of Environment, Forest and Climate Change (MoEF&CC). We ensure that every aspect of our work—from initial project documentation and detailed assessments to crucial stakeholder consultations—is conducted with the utmost transparency, scientific rigor, and strict alignment with all legal frameworks.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="about-content-wrapper">
                            <div class="sec-title mb-30">
                                <div class="desc pb-30">
                                    At the core of our operations beats a deep-rooted sense of responsibility towards both the environment and the communities we serve. We are dedicated to building enduring partnerships with our clients. This commitment means we consistently offer tailored, reliable, and cost-effective environmental solutions that not only fulfill statutory requirements but also actively contribute to the broader well-being of our planet's ecology.
                                </div>
                                <div class="desc pb-30 lead highlight font-weight-bold">
                                    {{ env('SITENAME') }} Envirocare Private Limited is more than a consultancy; we are a catalyst for sustainable development in India. We empower our clients to navigate complex environmental challenges successfully, ensuring their growth is synonymous with green values and a positive environmental legacy.
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
        <!-- CTA Section Start -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Partner with a NABET-accredited leader in environmental consultancy.</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Get In Touch</a>
                    </button>
                    <div class="text-white">Our multidisciplinary team and unwavering commitment to excellence position {{ env('SITENAME') }} Envirocare to support your environmental compliance and sustainability goals. Contact us today to discuss how we can ensure your project's success.</div>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->
<style>
/* Enhanced section styling for centered content */
.sec-title .sub-text.style-bg {
    display: inline-block;
    padding: 5px 15px;
    background: #156e68;
    color: #fff;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 15px;
    animation: fadeInUp 0.8s ease forwards;
}
.sec-title .title {
    color: #333;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 15px;
    animation: fadeInUp 1s ease forwards;
    opacity: 0;
    transform: translateY(20px);
}
.sec-title .title {
    animation-delay: 0.2s;
}
.sec-title .desc {
    color: #555; /* Slightly darker for better readability */
    font-size: 16px;
    line-height: 1.7; /* Increased line height for readability */
    margin: 0 auto;
    max-width: 900px; /* Constrain width for better readability */
    animation: fadeIn 1.2s ease forwards;
    opacity: 0;
}
.sec-title .desc:nth-child(1) { animation-delay: 0.4s; }
.sec-title .desc:nth-child(2) { animation-delay: 0.6s; }
.sec-title .desc:nth-child(3) { animation-delay: 0.8s; }
.sec-title .desc:nth-child(4) { animation-delay: 1.0s; }
.sec-title .desc:nth-child(5) { animation-delay: 1.2s; }
/* Make lead text stand out */
.sec-title .desc.lead {
    font-size: 18px;
    font-weight: 500;
    color: #444;
    position: relative;
    padding: 20px 30px;
    background: rgba(21, 110, 104, 0.05);
    border-left: 4px solid #156e68;
    border-radius: 0 8px 8px 0;
    margin: 30px auto;
}
.sec-title .desc.lead.highlight::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(21, 110, 104, 0.08), transparent);
    animation: shimmer 3s infinite;
}
/* Specific banner adjustment if needed */
.rs-breadcrumbs.img1 {
    background-size: cover !important;
    background-position: center !important;
}
/* Wrapper for better content organization */
.about-content-wrapper {
    margin-bottom: 40px;
    padding: 20px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}
.about-content-wrapper:hover {
    box-shadow: 0 10px 25px rgba(21, 110, 104, 0.1);
    transform: translateY(-5px);
}
/* Animations */
@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes shimmer {
    0% {
        background-position: -1000px 0;
    }
    100% {
        background-position: 1000px 0;
    }
}
/* Responsive adjustments */
@media (max-width: 767px) {
    .sec-title .desc {
        font-size: 15px;
        line-height: 1.6;
        padding: 0 10px;
    }
    .sec-title .desc.lead {
        font-size: 16px;
        padding: 15px 20px;
    }
    .about-content-wrapper {
        padding: 15px 10px;
        margin-bottom: 30px;
    }
}
</style>
@endsection