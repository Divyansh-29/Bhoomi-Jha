@extends('frontend.layout.base')
@section('content')
    <!-- Message Section Start -->
    <div class="rs-about gray-color pt-80 pb-60 md-pt-60 md-pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- ANIMATED CARD DESIGN -->
                    <div class="director-message-card">
                        <!-- Animated Header -->
                        <div class="card-header">
                            <div class="leadership-badge">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" fill="currentColor"/>
                                    <path d="M19 15L20.09 19.26L23 20L20.09 20.74L19 25L17.91 20.74L15 20L17.91 19.26L19 15Z" fill="currentColor"/>
                                    <path d="M5 15L6.09 19.26L9 20L6.09 20.74L5 25L3.91 20.74L1 20L3.91 19.26L5 15Z" fill="currentColor"/>
                                </svg>
                                Leadership Message
                            </div>
                            <h2 class="card-title">Message from the Managing Director</h2>
                        </div>

                        <!-- Animated Content Section -->
                        <div class="card-content">
                            <div class="message-text">
                                <p class="opening-paragraph">
                                    At Bhoomija Envirocare Private Limited, our journey has always been guided by a simple yet profound principle: <strong>growth and development must walk hand in hand with environmental responsibility</strong>. In an era where ecological challenges are becoming increasingly complex, our role as environmental consultants is not only to meet regulatory standards but to inspire sustainable transformation across industries.
                                </p>
                                
                                <p class="paragraph-animate">
                                    Since our inception, we have been committed to delivering solutions that are scientifically sound, legally compliant, and ethically grounded. Our NABET accreditation stands as a testament to our credibility, technical expertise, and unwavering commitment to quality. But beyond certifications, what truly defines us is our passion for the environment and the deep responsibility we feel toward future generations.
                                </p>
                                
                                <p class="paragraph-animate">
                                    We take pride in our multidisciplinary team of professionals who bring not only knowledge and experience, but also innovation and empathy to every project. Whether it's conducting rigorous Environmental Impact Assessments, designing sustainable waste management plans, or supporting industries through complex environmental clearances, we approach every task with diligence, integrity, and a problem-solving mindset.
                                </p>
                                
                                <p class="philosophy-text paragraph-animate">
                                    At Bhoomija Envirocare, we believe that environmental protection is not a checkbox—it is a mindset, a value system that must be integrated into every decision, policy, and project. Our mission is to be a trusted partner for organizations that are committed to responsible growth, and to contribute meaningfully to India's larger vision of sustainable development.
                                </p>
                                
                                <p class="paragraph-animate">
                                    As we look ahead, we remain focused on expanding our capabilities, deepening our impact, and continuing to deliver value—to our clients, to the environment, and to the communities we serve.
                                </p>
                            </div>

                            <!-- Animated Signature Section -->
                            <div class="signature-section">
                                <div class="closing-text">Warm regards,</div>
                                <div class="signature-name">Kaunain Sidqui</div>
                                <div class="signature-title">Managing Director</div>
                                <div class="company-name">{{ env('SITENAME') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Message Section End -->
    
    <!-- CTA Section Start -->
    <div class="rs-contact-wrap bg5 pt-50 pb-50 md-pt-40 pb-40" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
        <div class="container">
            <div class="sec-title2 text-center mb-20">
                <p class="title white-color" style="max-width:100%;">Inspired by our commitment to environmental responsibility?</p>
                <button class="readon learn-more submit mb-15 mt-15">
                    <a href="{{route('contact-us')}}" class="text-white">Get In Touch</a>
                </button>
                <div class="text-white">Our team at {{ env('SITENAME') }} Envirocare is ready to partner with you on your journey towards sustainable development. Contact us today to discuss how we can support your environmental goals.</div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

<style>
/* ANIMATED CLEAN CARD DESIGN */
.director-message-card {
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

.leadership-badge {
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

.leadership-badge svg {
    opacity: 0.9;
    animation: rotateSVG 3s ease-in-out infinite;
}

@keyframes rotateSVG {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(180deg); }
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

.message-text {
    margin-bottom: 30px;
}

.message-text p {
    font-size: 16px;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 18px;
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

/* Animated Philosophy Text */
.philosophy-text {
    font-style: italic;
    font-weight: 500;
    color: #2d3748;
    border-left: 3px solid #4ade80;
    padding-left: 15px;
    margin: 25px 0;
    position: relative;
}

.philosophy-text::before {
    content: '';
    position: absolute;
    left: -3px;
    top: 0;
    width: 3px;
    height: 0;
    background: #4ade80;
    animation: borderGrow 1s ease forwards 1.3s;
}

/* Animated Signature Section */
.signature-section {
    border-top: 1px solid rgba(21, 110, 104, 0.15);
    padding-top: 25px;
    text-align: left;
    opacity: 0;
    transform: translateY(20px);
    animation: signatureFadeInUp 0.8s ease forwards 1.7s;
}

@keyframes signatureFadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.closing-text {
    font-size: 16px;
    color: #4a5568;
    margin-bottom: 12px;
    font-style: italic;
    opacity: 0;
    animation: textFadeIn 0.5s ease forwards 1.9s;
}

.signature-name {
    font-size: 22px;
    font-weight: 700;
    color: #156e68;
    margin-bottom: 4px;
    opacity: 0;
    transform: translateX(-10px);
    animation: signatureSlideIn 0.6s ease forwards 2.1s;
}

.signature-title {
    font-size: 15px;
    color: #718096;
    font-weight: 600;
    margin-bottom: 4px;
    opacity: 0;
    transform: translateX(-10px);
    animation: signatureSlideIn 0.6s ease forwards 2.3s;
}

.company-name {
    font-size: 14px;
    color: #a0aec0;
    font-weight: 500;
    opacity: 0;
    transform: translateX(-10px);
    animation: signatureSlideIn 0.6s ease forwards 2.5s;
}

@keyframes textFadeIn {
    to {
        opacity: 1;
    }
}

@keyframes signatureSlideIn {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Hover Animations */
.director-message-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(21, 110, 104, 0.15);
    transition: all 0.3s ease;
}

.card-title:hover {
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    transition: text-shadow 0.3s ease;
}

.signature-name:hover {
    color: #1a7a73;
    transform: scale(1.05);
    transition: all 0.3s ease;
}

/* Responsive Design */
@media (max-width: 768px) {
    .director-message-card {
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
    
    .message-text p {
        font-size: 15px;
        line-height: 1.6;
    }
    
    .opening-paragraph {
        font-size: 16px;
    }
    
    .signature-section {
        padding-top: 20px;
    }
    
    .signature-name {
        font-size: 20px;
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
    
    .leadership-badge {
        font-size: 12px;
        padding: 5px 12px;
    }
    
    .leadership-badge svg {
        width: 16px;
        height: 16px;
    }
}

/* Section Spacing - Increased top padding since banner is removed */
.rs-about {
    padding-top: 80px !important; /* Increased from 60px */
    padding-bottom: 60px !important;
}

.rs-contact-wrap {
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}

@media (max-width: 767px) {
    .rs-about {
        padding-top: 60px !important; /* Increased from 40px */
        padding-bottom: 40px !important;
    }
    
    .rs-contact-wrap {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }
}
</style>
@endsection
