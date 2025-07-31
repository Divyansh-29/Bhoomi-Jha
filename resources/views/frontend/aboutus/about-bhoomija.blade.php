@extends('frontend.layout.base')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about gray-color pt-80 pb-60 md-pt-60 md-pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- ANIMATED ABOUT CARD DESIGN -->
                    <div class="about-company-card">
                        <!-- Animated Header -->
                        <div class="card-header">
                            <div class="company-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 21V19C3 17.9 3.9 17 5 17H19C20.1 17 21 17.9 21 19V21H3Z" fill="currentColor"/>
                                    <path d="M20 8L18 3H6L4 8V15H20V8Z" fill="currentColor"/>
                                    <path d="M12 12C13.66 12 15 10.66 15 9S13.66 6 12 6 9 7.34 9 9 10.34 12 12 12Z" fill="currentColor"/>
                                </svg>
                                Company Profile
                            </div>
                            <h2 class="card-title">About {{ env('SITENAME') }}</h2>
                        </div>

                        <!-- Animated Content Section -->
                        <div class="card-content">
                            <div class="about-text">
                                <p class="opening-paragraph">
                                    <strong>Bhoomija Envirocare Private Limited</strong> is a professionally managed environmental consultancy firm, accredited by the National Accreditation Board for Education and Training (NABET) under the Quality Council of India (QCI). With a firm commitment to environmental sustainability and regulatory excellence, we specialize in providing end-to-end consultancy services across various sectors including infrastructure, mining, industry, energy, and real estate development.
                                </p>
                                
                                <p class="paragraph-animate">
                                    Since its inception, Bhoomija Envirocare has been guided by the philosophy of fostering sustainable development through scientific integrity, innovation, and a deep-rooted understanding of ecological systems. Our team comprises highly qualified and experienced professionals from multidisciplinary backgrounds—environmental science, engineering, ecology, hydrology, geology, and socio-economics—who work collaboratively to deliver comprehensive, accurate, and actionable environmental solutions.
                                </p>
                                
                                <p class="highlight-text paragraph-animate">
                                    As a NABET-accredited organization, Bhoomija Envirocare adheres strictly to the latest guidelines and procedures laid down by the Ministry of Environment, Forest and Climate Change (MoEF&CC). We ensure that all project documentation, assessments, and stakeholder consultations are carried out with utmost transparency, scientific rigor, and in alignment with legal frameworks.
                                </p>
                                
                                <p class="paragraph-animate">
                                    At the heart of our operations is a deep sense of responsibility toward the environment and communities. We believe in building long-term partnerships with clients by offering tailored, reliable, and cost-effective environmental solutions that not only meet statutory requirements but also contribute to broader ecological well-being.
                                </p>
                                
                                <p class="closing-paragraph paragraph-animate">
                                    Bhoomija Envirocare Private Limited continues to strive toward being a catalyst for sustainable development in India, helping clients navigate environmental challenges while aligning growth with green values.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    
    <!-- CTA Section Start -->
    <div class="rs-contact-wrap bg5 pt-50 pb-50 md-pt-40 pb-40" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
        <div class="container">
            <div class="sec-title2 text-center mb-20">
                <p class="title white-color" style="max-width:100%;">Partner with a NABET-accredited leader in environmental consultancy.</p>
                <button class="readon learn-more submit mb-15 mt-15">
                    <a href="{{route('contact-us')}}" class="text-white">Get In Touch</a>
                </button>
                <div class="text-white">Our multidisciplinary team and unwavering commitment to excellence position {{ env('SITENAME') }} Envirocare to support your environmental compliance and sustainability goals. Contact us today to discuss how we can ensure your project's success.</div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

<style>
/* ANIMATED ABOUT CARD DESIGN */
.about-company-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    margin: 20px auto;
    max-width: 1000px;
    border: 1px solid rgba(21, 110, 104, 0.1);
    opacity: 0;
    transform: translateY(30px);
    animation: cardFadeInUp 0.8s ease forwards;
}

/* Card Animation */
@keyframes cardFadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Animated Header */
.card-header {
    background: linear-gradient(135deg, #156e68, #1a7a73);
    padding: 30px 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.card-header::before {
    content: '';
    position: absolute;
    top: -100%;
    left: -100%;
    width: 300%;
    height: 300%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 20%, transparent 70%);
    animation: headerPulse 4s ease-in-out infinite;
}

@keyframes headerPulse {
    0%, 100% { opacity: 0; transform: scale(0.8); }
    50% { opacity: 1; transform: scale(1); }
}

.company-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    padding: 6px 14px;
    border-radius: 20px;
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    opacity: 0;
    transform: translateX(-20px);
    animation: slideInLeft 0.6s ease forwards 0.3s;
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.company-badge svg {
    opacity: 0.9;
    animation: scalePulse 3s ease-in-out infinite;
}

@keyframes scalePulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.card-title {
    color: #fff;
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
    position: relative;
    z-index: 2;
    opacity: 0;
    transform: translateY(20px);
    animation: titleFadeInUp 0.8s ease forwards 0.5s;
}

@keyframes titleFadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Animated Content Section */
.card-content {
    padding: 40px;
    opacity: 0;
    animation: contentFadeIn 0.8s ease forwards 0.7s;
}

@keyframes contentFadeIn {
    to {
        opacity: 1;
    }
}

.about-text {
    margin-bottom: 20px;
}

.about-text p {
    font-size: 16px;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 20px;
    text-align: justify;
}

/* Paragraph Animations - Staggered */
.paragraph-animate {
    opacity: 0;
    transform: translateY(20px);
    animation: paragraphFadeInUp 0.6s ease forwards;
}

.paragraph-animate:nth-child(2) { animation-delay: 0.9s; }
.paragraph-animate:nth-child(3) { animation-delay: 1.1s; }
.paragraph-animate:nth-child(4) { animation-delay: 1.3s; }
.paragraph-animate:nth-child(5) { animation-delay: 1.5s; }

@keyframes paragraphFadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Animated Opening Highlight */
.opening-paragraph {
    font-size: 17px;
    color: #2d3748;
    font-weight: 500;
    border-left: 3px solid #156e68;
    padding-left: 15px;
    margin-bottom: 25px;
    opacity: 0;
    transform: translateX(-30px);
    animation: slideInFromLeft 0.8s ease forwards 0.8s;
    position: relative;
}

.opening-paragraph::before {
    content: '';
    position: absolute;
    left: -3px;
    top: 0;
    width: 3px;
    height: 0;
    background: #156e68;
    animation: borderGrow 1s ease forwards 0.8s;
}

@keyframes slideInFromLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes borderGrow {
    to {
        height: 100%;
    }
}

/* Animated Highlight Text */
.highlight-text {
    font-weight: 500;
    color: #2d3748;
    border-left: 3px solid #4ade80;
    padding-left: 15px;
    margin: 25px 0;
    position: relative;
    background: rgba(74, 222, 128, 0.03);
    padding: 20px;
    border-radius: 0 10px 10px 0;
}

.highlight-text::before {
    content: '';
    position: absolute;
    left: -3px;
    top: 0;
    width: 3px;
    height: 0;
    background: #4ade80;
    animation: borderGrow 1s ease forwards 1.1s;
}

/* Animated Closing Paragraph */
.closing-paragraph {
    font-style: italic;
    font-weight: 500;
    color: #156e68;
    border-left: 3px solid #156e68;
    padding-left: 15px;
    position: relative;
}

.closing-paragraph::before {
    content: '';
    position: absolute;
    left: -3px;
    top: 0;
    width: 3px;
    height: 0;
    background: #156e68;
    animation: borderGrow 1s ease forwards 1.5s;
}

/* Hover Animations */
.about-company-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(21, 110, 104, 0.15);
    transition: all 0.3s ease;
}

.card-title:hover {
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    transition: text-shadow 0.3s ease;
}

.opening-paragraph:hover,
.highlight-text:hover,
.closing-paragraph:hover {
    transform: translateX(5px);
    transition: transform 0.3s ease;
}

/* Text Justification for all content */
p, div, span, h1, h2, h3, h4, h5, h6, li, td, th, label {
    text-align: justify;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-company-card {
        margin: 15px;
        border-radius: 12px;
    }
    
    .card-header {
        padding: 25px 25px;
    }
    
    .card-title {
        font-size: 1.7rem;
    }
    
    .card-content {
        padding: 30px 25px;
    }
    
    .about-text p {
        font-size: 15px;
        line-height: 1.6;
    }
    
    .opening-paragraph {
        font-size: 16px;
    }
    
    .highlight-text {
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .card-header {
        padding: 20px;
    }
    
    .card-title {
        font-size: 1.5rem;
    }
    
    .card-content {
        padding: 25px 20px;
    }
    
    .company-badge {
        font-size: 12px;
        padding: 5px 12px;
    }
    
    .company-badge svg {
        width: 16px;
        height: 16px;
    }
}

/* Section Spacing - Increased top padding since banner is removed */
.rs-about {
    padding-top: 80px !important; /* Increased from original */
    padding-bottom: 60px !important;
}

.rs-contact-wrap {
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}

@media (max-width: 767px) {
    .rs-about {
        padding-top: 60px !important;
        padding-bottom: 40px !important;
    }
    
    .rs-contact-wrap {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }
}

/* Additional spacing reductions for cleaner layout */
.mb-50 { margin-bottom: 25px !important; }
.mb-40 { margin-bottom: 20px !important; }
.mb-30 { margin-bottom: 15px !important; }
.pb-30 { padding-bottom: 15px !important; }
.pb-40 { padding-bottom: 20px !important; }
.mt-30 { margin-top: 15px !important; }
.pt-80 { padding-top: 50px !important; }
.pb-80 { padding-bottom: 50px !important; }
</style>
@endsection
