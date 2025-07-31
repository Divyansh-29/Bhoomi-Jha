@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape animated-image-container">
                            <div class="images">
                                <img src="{{asset('assets/images/building-construction-ec-img.jpg')}}" alt="Environmental Clearance for Building and Construction Projects" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);" class="animated-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg animated-badge">Services</div>
                                <h2 class="title pb-38 animated-title">
                                    Environmental Clearance for Building and Construction Projects
                                </h2>
                                <div class="desc pb-35 animated-desc">
                                    <strong>Large-scale building and construction projects</strong>—such as <strong>commercial complexes, housing developments, townships, malls, IT parks, and institutional buildings</strong>—have wide-ranging environmental impacts. These include <strong>land use change, water consumption, wastewater generation, solid waste production, energy use, and air/noise pollution</strong>.
                                </div>
                                <div class="desc pb-35 animated-desc-2">
                                    To manage these impacts sustainably, such projects are covered under <strong>Schedule 8(a)</strong> of the <strong>EIA Notification, 2006</strong>, and require prior <strong>Environmental Clearance (EC)</strong> before commencement.
                                </div>
                                <div class="desc pb-35 animated-desc-3">
                                    At <strong>{{env('SITENAME')}}, </strong>we provide expert consultancy services to guide building and construction projects through the EC process, ensuring compliance with all regulatory requirements and facilitating sustainable development.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>

<style>
/* ANIMATED BUILDING & CONSTRUCTION EC PAGE STYLES */

/* Image Container Animation */
.animated-image-container {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideInLeft 0.8s ease forwards 0.3s;
}

.animated-image {
    transition: all 0.3s ease;
    transform: scale(1);
}

.animated-image-container:hover .animated-image {
    transform: scale(1.03);
    box-shadow: 0 15px 40px rgba(21, 110, 104, 0.2) !important;
}

/* Badge Animation */
.animated-badge {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInDown 0.6s ease forwards 0.1s;
}

/* Title Animation */
.animated-title {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.3s;
}

/* Description Animations - Staggered */
.animated-desc {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.5s;
}

.animated-desc-2 {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.7s;
}

.animated-desc-3 {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards 0.9s;
}

/* Animation Keyframes */
@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Services Card Animations (for future sections) */
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
    height: 100%;
    opacity: 0;
    transform: translateY(30px);
    animation: cardFadeInUp 0.8s ease forwards;
}

/* Staggered animation delays for cards */
.services-item:nth-child(1) { animation-delay: 0.2s; }
.services-item:nth-child(2) { animation-delay: 0.4s; }
.services-item:nth-child(3) { animation-delay: 0.6s; }
.services-item:nth-child(4) { animation-delay: 0.8s; }
.services-item:nth-child(5) { animation-delay: 1.0s; }
.services-item:nth-child(6) { animation-delay: 1.2s; }

@keyframes cardFadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.services-item:hover {
    border-color: #156e68;
    box-shadow: 0 15px 35px rgba(21,110,104,0.2);
    transform: translateY(-8px);
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
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transform: scale(0.8);
    animation: iconZoomIn 0.6s ease forwards;
    animation-delay: 0.3s;
}

@keyframes iconZoomIn {
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.services-item:hover .services-icon-wrapper {
    border-color: #156e68;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: scale(1.02);
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
    width: 60%;
    height: 60%;
    max-width: 100%;
    max-height: 100%;
    transition: all 0.3s ease;
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
    flex-grow: 1;
}

.services-content .title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
    opacity: 0;
    transform: translateY(10px);
    animation: textSlideUp 0.6s ease forwards;
    animation-delay: 0.5s;
}

@keyframes textSlideUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.services-item:hover .services-content .title {
    color: #156e68;
}

.services-content .desc {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin: 0 0 15px 0;
    flex-grow: 1;
    text-align: justify;
    opacity: 0;
    animation: fadeIn 0.8s ease forwards;
    animation-delay: 0.7s;
}

.services-content ul {
    text-align: left;
    color: #666;
    font-size: 13px;
    padding-left: 0;
    margin-top: auto;
    opacity: 0;
    animation: fadeIn 0.8s ease forwards;
    animation-delay: 0.9s;
}

.services-content ul li {
    margin-bottom: 5px;
    padding-left: 1.5em;
    position: relative;
    opacity: 0;
    transform: translateX(-10px);
    animation: listItemSlideIn 0.5s ease forwards;
}

.services-content ul li:nth-child(1) { animation-delay: 1.0s; }
.services-content ul li:nth-child(2) { animation-delay: 1.1s; }
.services-content ul li:nth-child(3) { animation-delay: 1.2s; }
.services-content ul li:nth-child(4) { animation-delay: 1.3s; }
.services-content ul li:nth-child(5) { animation-delay: 1.4s; }

@keyframes listItemSlideIn {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Custom bullet point */
.services-content ul li::before {
    content: "\2022";
    color: #156e68;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
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
    opacity: 0;
    transform: scale(0);
    animation: stepIndicatorPop 0.5s ease forwards;
    animation-delay: 0.8s;
}

@keyframes stepIndicatorPop {
    0% {
        opacity: 0;
        transform: scale(0);
    }
    70% {
        transform: scale(1.1);
    }
    100% {
        opacity: 1;
        transform: scale(1);
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
    text-align: justify;
}

/* Equal height for all cards */
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
    
    .animated-image-container {
        animation: fadeIn 0.8s ease forwards 0.3s;
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
    
    .animated-image-container {
        margin-bottom: 30px;
    }
    
    .col-lg-6.pl-60 {
        padding-left: 15px !important;
    }
}

/* Benefits content text alignment */
.services-item.d-flex.flex-column.align-items-center.text-center .services-content .title,
.services-item.d-flex.flex-column.align-items-center.text-center .services-content .desc {
    text-align: center;
}

/* Ensure benefit cards also try to be equal height */
.rs-services.style2.gray-color .services-item {
    height: 100%;
}
</style>
@endsection
