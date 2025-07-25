
@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: linear-gradient(135deg, #156e68, #0d4b46);">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Clientele</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Clientele</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        
        <!-- Coming Soon Section Start -->
        <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="sec-title mb-60">
                            <h2 class="title pb-30">
                                Our Clientele - Coming Soon
                            </h2>
                            <div class="coming-soon-icon mb-40">
                                <div style="font-size: 60px; color: #156e68; margin-bottom: 20px;">
                                    <i class="fas fa-handshake"></i>
                                </div>
                            </div>
                            <div class="desc pb-35">
                                We are currently updating our client portfolio. Please check back soon to see the organizations that trust {{env('SITENAME')}} for their environmental consultancy needs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Coming Soon Section End -->
        
        <!-- Contact CTA Start -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Want to learn more about our services?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
                    </button>
                    <div class="text-white">Our team at {{env('SITENAME')}} is ready to discuss how we can support your environmental consultancy needs.</div>
                </div>
            </div>
        </div>
        <!-- Contact CTA End -->
        
<style>
/* Coming Soon Page Specific Styles */
.coming-soon-icon {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

/* Reusing existing theme styles */
.sec-title .sub-text.style-bg {
    display: inline-block;
    padding: 5px 15px;
    background: #156e68;
    color: #fff;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 15px;
}

.sec-title .title {
    color: #333;
    font-weight: 700;
    margin-bottom: 15px;
}

.sec-title .desc {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
}

/* Responsive adjustments */
@media (max-width: 767px) {
    .sec-title .title {
        font-size: 24px;
    }
    
    .coming-soon-icon i {
        font-size: 48px !important;
    }
}
</style>
@endsection