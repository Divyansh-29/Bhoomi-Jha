@extends('frontend.layout.base')
@section('content')

<!-- Enhanced EIA Studies Page - Subtle Animations -->
<div class="eia-page-wrapper">
    <!-- Enhanced About Section -->
    <div class="rs-about gray-color pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-40">
                    <div class="animated-image-container">
                        <div class="images">
                            <img src="{{asset('assets/images/service/environmental-impacts.jpg')}}" alt="EIA Studies" class="enhanced-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="content-wrap animated-content">
                        <div class="sec-title mb-40">
                            <div class="sub-text style-bg">Our Services</div>
                            <h2 class="title pb-30">
                                Environmental Impact Assessment (EIA) Studies
                            </h2>
                            <div class="desc pb-25">
                                <strong>Environmental Impact Assessment (EIA)</strong> is a critical process that evaluates the potential environmental consequences of a proposed project before it is undertaken. It ensures that environmental factors are integrated into project planning and decision-making, in compliance with statutory requirements under the <strong>EIA Notification, 2006</strong>, by the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong> and respective <strong>SEIAA</strong> authorities.
                            </div>
                            <div class="desc pb-25">
                                At <strong>{{env('SITENAME')}}</strong>, we specialize in delivering <strong>comprehensive, scientifically robust, and regulation-compliant EIA studies</strong> across a wide range of industrial, infrastructure, mining, and urban development projects.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* ENHANCED EIA STUDIES PAGE WITH SUBTLE ANIMATIONS */

/* Remove Banner Completely */
.rs-breadcrumbs {
    display: none !important;
}

/* Enhanced Page Wrapper - Subtle Background */
.eia-page-wrapper {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #f0f9f7 0%, #e8f5f0 50%, #ffffff 100%);
    min-height: 100vh;
    padding: 60px 0;
}

/* Subtle Floating Background Elements */
.eia-page-wrapper::before {
    content: '';
    position: absolute;
    top: 15%;
    right: -5%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(21, 110, 104, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatBackgroundGentle 12s ease-in-out infinite;
}

.eia-page-wrapper::after {
    content: '';
    position: absolute;
    bottom: 25%;
    left: -8%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(174, 201, 68, 0.03) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatBackgroundSmallGentle 15s ease-in-out infinite reverse;
}

@keyframes floatBackgroundGentle {
    0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
    50% { transform: translateY(-15px) translateX(8px) scale(1.03); }
}

@keyframes floatBackgroundSmallGentle {
    0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
    50% { transform: translateY(-12px) translateX(10px) scale(1.04); }
}

/* Enhanced Content Section */
.rs-about {
    position: relative;
    z-index: 2;
    opacity: 0;
    animation: sectionFadeIn 1s ease forwards 0.2s;
}

@keyframes sectionFadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Gentle Image Animation */
.animated-image-container {
    opacity: 0;
    transform: translateX(-25px);
    animation: imageSlideInGentle 1s ease forwards 0.4s;
}

@keyframes imageSlideInGentle {
    0% {
        opacity: 0;
        transform: translateX(-25px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.enhanced-image {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(21, 110, 104, 0.12);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.enhanced-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.8s ease;
}

.enhanced-image:hover::before {
    left: 100%;
}

.enhanced-image:hover {
    transform: scale(1.03);
    box-shadow: 0 20px 40px rgba(21, 110, 104, 0.18);
    filter: brightness(1.05);
}

/* Gentle Content Animation */
.animated-content {
    opacity: 0;
    transform: translateX(25px);
    animation: contentSlideInGentle 1s ease forwards 0.6s;
}

@keyframes contentSlideInGentle {
    0% {
        opacity: 0;
        transform: translateX(25px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Refined Typography */
.rs-about .sec-title .sub-text.style-bg {
    background: linear-gradient(135deg, #156e68, #1a7a73);
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    display: inline-block;
    opacity: 0;
    transform: scale(0.9) translateY(-5px);
    animation: badgeSlideIn 0.8s ease forwards 0.8s;
}

@keyframes badgeSlideIn {
    0% {
        opacity: 0;
        transform: scale(0.9) translateY(-5px);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.rs-about .sec-title .title {
    background: linear-gradient(45deg, #156e68, #2a9d8f, #aec944);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 700;
    font-size: 2.3rem;
    margin-bottom: 25px;
    opacity: 0;
    transform: translateY(15px);
    animation: titleSlideIn 0.8s ease forwards 1s;
}

@keyframes titleSlideIn {
    0% {
        opacity: 0;
        transform: translateY(15px);
        letter-spacing: 1px;
    }
    100% {
        opacity: 1;
        transform: translateY(0);
        letter-spacing: 0;
    }
}

/* Enhanced Justified Text */
.rs-about .desc {
    text-align: justify !important;
    text-justify: inter-word;
    line-height: 1.7;
    color: #2c2c2c;
    font-size: 1.1rem;
    font-weight: 400;
    margin-bottom: 25px;
    opacity: 0;
    transform: translateY(12px);
    animation: descFadeIn 0.6s ease forwards;
    transition: all 0.3s ease;
    padding: 10px;
    border-radius: 6px;
}

.rs-about .desc:nth-of-type(1) { 
    animation-delay: 1.2s; 
}
.rs-about .desc:nth-of-type(2) { 
    animation-delay: 1.4s; 
}

@keyframes descFadeIn {
    0% {
        opacity: 0;
        transform: translateY(12px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.rs-about .desc:hover {
    background: rgba(21, 110, 104, 0.02);
    transform: translateY(-1px);
    box-shadow: 0 5px 15px rgba(21, 110, 104, 0.05);
}

.rs-about .desc strong {
    color: #156e68;
    font-weight: 600;
    background: linear-gradient(135deg, #156e68, #2a9d8f);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Gentle Hover Effects */
.rs-about .sec-title .sub-text.style-bg:hover {
    transform: scale(1.02) translateY(-1px);
    box-shadow: 0 5px 15px rgba(21, 110, 104, 0.25);
    background: linear-gradient(135deg, #1a7a73, #2a9d8f);
}

.rs-about .sec-title .title:hover {
    transform: scale(1.01);
    filter: drop-shadow(0 3px 8px rgba(21, 110, 104, 0.2));
}

/* Subtle Background Animation */
.eia-page-wrapper {
    animation: pageBreathGentle 25s ease-in-out infinite;
}

@keyframes pageBreathGentle {
    0%, 100% { 
        background: linear-gradient(135deg, #f0f9f7 0%, #e8f5f0 50%, #ffffff 100%); 
    }
    50% { 
        background: linear-gradient(135deg, #e8f5f0 0%, #f0f9f7 50%, #f8fffe 100%); 
    }
}

/* Responsive Design */
@media (max-width: 991px) {
    .rs-about .sec-title .title {
        font-size: 2rem;
    }
    
    .pl-60 {
        padding-left: 15px !important;
    }
    
    .animated-image-container,
    .animated-content {
        animation-delay: 0.2s;
    }
}

@media (max-width: 767px) {
    .rs-about .sec-title .title {
        font-size: 1.7rem;
    }
    
    .rs-about .desc {
        font-size: 1rem;
        padding: 8px;
    }
    
    .eia-page-wrapper {
        padding: 40px 0;
    }
    
    .enhanced-image {
        border-radius: 15px;
    }
}
</style>

@endsection
