@extends('frontend.layout.base')
@section('content')
    {{-- <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1 animated-breadcrumb"
        style="background: linear-gradient(135deg, #156e68, #0d4b46);">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title animated-breadcrumb-title">Clientele</h1>
            <ul class="animated-breadcrumb-nav">
                <li title="Bhoomija - Environmental Consultancy Services">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li>Clientele</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End --> --}}
    
    <!-- Coming Soon Section Start -->
    <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="coming-soon-content">
                        <div class="animated-badge">Coming Soon</div>
                        <h2 class="animated-title mb-4">Our Valued Partners</h2>
                        
                        <div class="icon-section mb-4">
                            <div class="coming-soon-animation">
                                <!-- Soft Pulsing Circles -->
                                <div class="pulse-container">
                                    <div class="pulse-ring pulse-1"></div>
                                    <div class="pulse-ring pulse-2"></div>
                                    <div class="pulse-ring pulse-3"></div>
                                    <div class="center-dot"></div>
                                </div>
                                
                                <!-- Floating Particles -->
                                <div class="floating-particles">
                                    <div class="particle p1"></div>
                                    <div class="particle p2"></div>
                                    <div class="particle p3"></div>
                                    <div class="particle p4"></div>
                                    <div class="particle p5"></div>
                                    <div class="particle p6"></div>
                                </div>
                                
                                <!-- Gentle Countdown Elements -->
                                <div class="countdown-dots">
                                    <div class="dot dot-1"></div>
                                    <div class="dot dot-2"></div>
                                    <div class="dot dot-3"></div>
                                </div>
                            </div>
                        </div>
                        
                        <p class="animated-desc">Portfolio updating. Check back soon.</p>
                        
                        <!-- Optional: Subtle progress indicator -->
                        <div class="progress-indicator">
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Coming Soon Section End -->
    
    <!-- Contact CTA Start -->
    <div class="rs-contact-wrap animated-cta" style="background: linear-gradient(rgba(0, 24, 24, 0.84), rgba(0, 44, 2, 0.84)), #0d4b46; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="animated-cta-title text-white mb-3" style="font-size: 28px; font-weight: 600;">Ready to Partner?</p>
                    <a href="{{route('contact-us')}}" class="btn animated-button" style="background: #156e68; color: white; padding: 12px 30px; border-radius: 25px; text-decoration: none; display: inline-block; margin: 20px 0;">Get Started</a>
                    <p class="animated-cta-desc text-white mt-3">{{env('SITENAME')}} - Environmental Excellence</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact CTA End -->

<style>
/* SOFT COMING SOON PAGE WITH GENTLE ANIMATIONS */

/* Reset and base styles */
.coming-soon-content {
    position: relative;
    z-index: 1;
    padding: 40px 20px;
}

/* Breadcrumb animations */
.animated-breadcrumb {
    position: relative;
    overflow: hidden;
    z-index: 10;
}

.animated-breadcrumb-title {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInDown 0.8s ease forwards 0.2s;
}

.animated-breadcrumb-nav {
    opacity: 0;
    transform: translateY(10px);
    animation: fadeInUp 0.8s ease forwards 0.4s;
}

/* Soft Badge */
.animated-badge {
    display: inline-block;
    padding: 10px 25px;
    background: rgba(21, 110, 104, 0.08);
    color: #156e68;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 0;
    animation: gentlePulse 3s ease-in-out infinite, fadeIn 0.8s ease forwards 0.6s;
    border: 1px solid rgba(21, 110, 104, 0.15);
}

@keyframes gentlePulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(21, 110, 104, 0.1);
    }
    50% {
        transform: scale(1.02);
        box-shadow: 0 0 0 10px rgba(21, 110, 104, 0);
    }
}

/* Soft Title */
.animated-title {
    color: #333;
    font-weight: 600;
    font-size: 36px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.8s;
    letter-spacing: -0.5px;
}

/* Coming Soon Animation Container */
.icon-section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 180px;
    opacity: 0;
    animation: fadeIn 1s ease forwards 1s;
}

.coming-soon-animation {
    position: relative;
    width: 150px;
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Gentle Pulsing Rings */
.pulse-container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pulse-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(21, 110, 104, 0.2);
    opacity: 0;
    animation: softPulse 4s ease-in-out infinite;
}

.pulse-1 {
    width: 60px;
    height: 60px;
    animation-delay: 0s;
}

.pulse-2 {
    width: 90px;
    height: 90px;
    animation-delay: 1.3s;
}

.pulse-3 {
    width: 120px;
    height: 120px;
    animation-delay: 2.6s;
}

@keyframes softPulse {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    50% {
        opacity: 0.3;
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1.2);
    }
}

/* Center Dot */
.center-dot {
    width: 12px;
    height: 12px;
    background: linear-gradient(135deg, #156e68, #1a7a73);
    border-radius: 50%;
    position: relative;
    z-index: 2;
    opacity: 0;
    animation: centerGlow 2s ease-in-out infinite, fadeIn 0.8s ease forwards 1.2s;
    box-shadow: 0 0 20px rgba(21, 110, 104, 0.3);
}

@keyframes centerGlow {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 20px rgba(21, 110, 104, 0.3);
    }
    50% {
        transform: scale(1.2);
        box-shadow: 0 0 25px rgba(21, 110, 104, 0.5);
    }
}

/* Floating Particles */
.floating-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(174, 201, 68, 0.6);
    border-radius: 50%;
    opacity: 0;
    animation: floatParticle 6s ease-in-out infinite;
}

.p1 { top: 20%; left: 15%; animation-delay: 1.5s; }
.p2 { top: 30%; right: 20%; animation-delay: 2s; }
.p3 { bottom: 35%; left: 25%; animation-delay: 2.5s; }
.p4 { bottom: 25%; right: 15%; animation-delay: 3s; }
.p5 { top: 60%; left: 10%; animation-delay: 3.5s; }
.p6 { top: 15%; right: 30%; animation-delay: 4s; }

@keyframes floatParticle {
    0%, 100% {
        opacity: 0;
        transform: translateY(0) scale(0.5);
    }
    20% {
        opacity: 0.7;
        transform: translateY(-15px) scale(1);
    }
    80% {
        opacity: 0.7;
        transform: translateY(-10px) scale(1);
    }
}

/* Countdown Dots */
.countdown-dots {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
}

.dot {
    width: 6px;
    height: 6px;
    background: rgba(21, 110, 104, 0.3);
    border-radius: 50%;
    opacity: 0;
    animation: dotBlink 2s ease-in-out infinite;
}

.dot-1 { animation-delay: 1.8s; }
.dot-2 { animation-delay: 2s; }
.dot-3 { animation-delay: 2.2s; }

@keyframes dotBlink {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; background: #156e68; }
}

/* Progress Indicator */
.progress-indicator {
    width: 200px;
    height: 2px;
    background: rgba(21, 110, 104, 0.1);
    border-radius: 1px;
    margin: 30px auto 0;
    opacity: 0;
    animation: fadeIn 0.8s ease forwards 2s;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #156e68, #aec944);
    border-radius: 1px;
    width: 0;
    animation: progressFill 8s ease-in-out infinite;
    animation-delay: 2.5s;
}

@keyframes progressFill {
    0% { width: 0; }
    50% { width: 60%; }
    100% { width: 0; }
}

/* Description */
.animated-desc {
    color: #777;
    font-size: 16px;
    line-height: 1.6;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 1.8s;
    font-weight: 300;
}

/* CTA Section */
.animated-cta {
    position: relative;
    overflow: hidden;
}

.animated-cta-title {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInDown 0.8s ease forwards 2.2s;
}

.animated-button {
    opacity: 0;
    transform: scale(0.95);
    animation: buttonFloat 0.8s ease forwards 2.4s;
    transition: all 0.3s ease;
}

@keyframes buttonFloat {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.animated-button:hover {
    transform: scale(1.03) translateY(-2px);
    box-shadow: 0 10px 25px rgba(21, 110, 104, 0.25);
}

.animated-cta-desc {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 2.6s;
}

/* Base Animation Keyframes */
@keyframes fadeInDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

/* Responsive design */
@media (max-width: 768px) {
    .animated-title {
        font-size: 28px;
    }
    
    .coming-soon-animation {
        width: 120px;
        height: 120px;
    }
    
    .pulse-1 { width: 50px; height: 50px; }
    .pulse-2 { width: 75px; height: 75px; }
    .pulse-3 { width: 100px; height: 100px; }
    
    .progress-indicator {
        width: 150px;
    }
    
    .coming-soon-content {
        padding: 20px 10px;
    }
    
    .animated-cta-title {
        font-size: 24px !important;
    }
}

/* Ensure proper stacking */
.rs-about {
    position: relative;
    z-index: 1;
}

.rs-contact-wrap {
    position: relative;
    z-index: 1;
}
</style>
@endsection
