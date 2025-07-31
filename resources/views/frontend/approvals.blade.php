@extends('frontend.layout.base')
@section('content')
    {{-- <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1 animated-breadcrumb"
        style="background: linear-gradient(135deg, #156e68, #0d4b46);">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title animated-breadcrumb-title">Approvals</h1>
            <ul class="animated-breadcrumb-nav">
                <li title="Bhoomija - Environmental Consultancy Services">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li>Approvals</li>
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
                        <h2 class="animated-title mb-4">Our Approvals Portfolio</h2>
                        
                        <div class="icon-section mb-4">
                            <div class="approvals-animation">
                                <!-- Certificate/Approval Animation -->
                                <div class="certificate-container">
                                    <div class="certificate-bg"></div>
                                    <div class="certificate-main">
                                        <div class="cert-header"></div>
                                        <div class="cert-lines">
                                            <div class="cert-line line-1"></div>
                                            <div class="cert-line line-2"></div>
                                            <div class="cert-line line-3"></div>
                                        </div>
                                        <div class="cert-seal"></div>
                                    </div>
                                </div>
                                
                                <!-- Floating Approval Stamps -->
                                <div class="floating-stamps">
                                    <div class="stamp stamp-1"></div>
                                    <div class="stamp stamp-2"></div>
                                    <div class="stamp stamp-3"></div>
                                </div>
                                
                                <!-- Gentle Progress Dots -->
                                <div class="approval-dots">
                                    <div class="approval-dot dot-1"></div>
                                    <div class="approval-dot dot-2"></div>
                                    <div class="approval-dot dot-3"></div>
                                </div>
                            </div>
                        </div>
                        
                        <p class="animated-desc">Portfolio updating. Check back soon.</p>
                        
                        <!-- Approval Progress -->
                        <div class="approval-progress">
                            <div class="progress-text">Updating Certifications</div>
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
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
                    <a href="{{route('contact-us')}}" class="btn animated-button" style="background: #156e68; color: white; padding: 12px 30px; border-radius: 25px; text-decoration: none; display: inline-block; margin: 20px 0;">Contact Us</a>
                    <p class="animated-cta-desc text-white mt-3">{{env('SITENAME')}} - Environmental Excellence</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact CTA End -->

<style>
/* APPROVALS COMING SOON PAGE WITH SOFT ANIMATIONS */

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

.animated-breadcrumb::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    animation: breadcrumbShimmer 3s infinite;
}

@keyframes breadcrumbShimmer {
    0% { left: -100%; }
    100% { left: 100%; }
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

/* Approvals Animation Container */
.icon-section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    opacity: 0;
    animation: fadeIn 1s ease forwards 1s;
}

.approvals-animation {
    position: relative;
    width: 180px;
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Certificate Animation */
.certificate-container {
    position: relative;
    width: 120px;
    height: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.certificate-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(21, 110, 104, 0.05);
    border-radius: 8px;
    opacity: 0;
    transform: scale(0.8);
    animation: certGrow 1s ease forwards 1.2s;
}

.certificate-main {
    position: relative;
    width: 90%;
    height: 80%;
    background: linear-gradient(135deg, #fff, #f8f9fa);
    border-radius: 6px;
    border: 2px solid rgba(21, 110, 104, 0.2);
    opacity: 0;
    transform: scale(0.5);
    animation: certGrow 0.8s ease forwards 1.4s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 8px;
    box-shadow: 0 4px 15px rgba(21, 110, 104, 0.1);
}

@keyframes certGrow {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Certificate Details */
.cert-header {
    width: 60%;
    height: 8px;
    background: linear-gradient(90deg, #156e68, #aec944);
    border-radius: 2px;
    align-self: center;
    opacity: 0;
    animation: fadeIn 0.6s ease forwards 1.8s;
}

.cert-lines {
    display: flex;
    flex-direction: column;
    gap: 3px;
    align-items: center;
}

.cert-line {
    height: 2px;
    background: rgba(21, 110, 104, 0.3);
    border-radius: 1px;
    opacity: 0;
    animation: lineGrow 0.6s ease forwards;
}

.line-1 {
    width: 70%;
    animation-delay: 2s;
}

.line-2 {
    width: 80%;
    animation-delay: 2.2s;
}

.line-3 {
    width: 60%;
    animation-delay: 2.4s;
}

@keyframes lineGrow {
    from {
        opacity: 0;
        width: 0;
    }
    to {
        opacity: 1;
    }
}

/* Certificate Seal */
.cert-seal {
    width: 16px;
    height: 16px;
    background: radial-gradient(circle, #156e68, #1a7a73);
    border-radius: 50%;
    align-self: flex-end;
    opacity: 0;
    transform: scale(0);
    animation: sealPop 0.5s ease forwards 2.6s;
    position: relative;
}

.cert-seal::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 10px;
    font-weight: bold;
}

@keyframes sealPop {
    0% {
        opacity: 0;
        transform: scale(0);
    }
    70% {
        transform: scale(1.2);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Floating Stamps */
.floating-stamps {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.stamp {
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(174, 201, 68, 0.6);
    border-radius: 50%;
    opacity: 0;
    animation: stampFloat 4s ease-in-out infinite;
}

.stamp::before {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: rgba(174, 201, 68, 0.6);
    font-size: 10px;
    font-weight: bold;
}

.stamp-1 {
    top: 15%;
    left: 10%;
    animation-delay: 2.8s;
}

.stamp-2 {
    top: 20%;
    right: 15%;
    animation-delay: 3.5s;
}

.stamp-3 {
    bottom: 25%;
    left: 20%;
    animation-delay: 4.2s;
}

@keyframes stampFloat {
    0%, 100% {
        opacity: 0;
        transform: translateY(0) scale(0.8);
    }
    25% {
        opacity: 0.7;
        transform: translateY(-15px) scale(1);
    }
    75% {
        opacity: 0.7;
        transform: translateY(-10px) scale(1);
    }
}

/* Approval Dots */
.approval-dots {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
}

.approval-dot {
    width: 8px;
    height: 8px;
    background: rgba(21, 110, 104, 0.3);
    border-radius: 50%;
    opacity: 0;
    animation: dotApproval 2.5s ease-in-out infinite;
}

.dot-1 { animation-delay: 3s; }
.dot-2 { animation-delay: 3.3s; }
.dot-3 { animation-delay: 3.6s; }

@keyframes dotApproval {
    0%, 100% { 
        opacity: 0.3; 
        transform: scale(1);
    }
    50% { 
        opacity: 1; 
        background: #156e68;
        transform: scale(1.2);
    }
}

/* Approval Progress */
.approval-progress {
    margin-top: 35px;
    opacity: 0;
    animation: fadeIn 0.8s ease forwards 2.2s;
}

.progress-text {
    font-size: 12px;
    color: #888;
    margin-bottom: 10px;
    font-weight: 400;
}

.progress-bar-container {
    width: 180px;
    height: 3px;
    background: rgba(21, 110, 104, 0.1);
    border-radius: 2px;
    margin: 0 auto;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #156e68, #aec944);
    border-radius: 2px;
    width: 0;
    animation: approvalProgress 6s ease-in-out infinite;
    animation-delay: 2.5s;
}

@keyframes approvalProgress {
    0% { width: 0; }
    40% { width: 70%; }
    60% { width: 70%; }
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
    animation: fadeInDown 0.8s ease forwards 2.4s;
}

.animated-button {
    opacity: 0;
    transform: scale(0.95);
    animation: buttonFloat 0.8s ease forwards 2.6s;
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
    animation: fadeInUp 0.8s ease forwards 2.8s;
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
    
    .approvals-animation {
        width: 140px;
        height: 120px;
    }
    
    .certificate-container {
        width: 100px;
        height: 75px;
    }
    
    .cert-seal {
        width: 12px;
        height: 12px;
    }
    
    .cert-seal::after {
        font-size: 8px;
    }
    
    .progress-bar-container {
        width: 140px;
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
