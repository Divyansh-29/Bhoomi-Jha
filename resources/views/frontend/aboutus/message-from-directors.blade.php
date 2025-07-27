@extends('frontend.layout.base')@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background:  url({{asset('assets/images/Consent-bg.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Message from the Managing Director</h1>
                <ul>
                    <li title="{{ env('SITENAME') }} - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>About Us /</li>
                    <li>Message from the Managing Director</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Message Section Start -->
        <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="contact-wrap">
                            <div class="sec-title mb-50">
                                <div class="sub-text style-bg">Leadership</div>
                                <h2 class="title pb-40">
                                    Message from the Managing Director
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="message-content-wrapper">
                            <div class="sec-title mb-40">
                                <div class="desc pb-30 lead highlight">
                                    At {{ env('SITENAME') }} Envirocare Private Limited, our journey has always been guided by a simple yet profound principle: growth and development must walk hand in hand with environmental responsibility.
                                </div>
                                <div class="desc pb-30">
                                    In an era where ecological challenges are becoming increasingly complex, our role as environmental consultants is not only to meet regulatory standards but to inspire sustainable transformation across industries.
                                </div>
                                <div class="desc pb-30">
                                    Since our inception, we have been committed to delivering solutions that are scientifically sound, legally compliant, and ethically grounded. Our NABET accreditation stands as a testament to our credibility, technical expertise, and unwavering commitment to quality. But beyond certifications, what truly defines us is our passion for the environment and the deep responsibility we feel toward future generations.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="message-content-wrapper">
                            <div class="sec-title mb-40">
                                <div class="desc pb-30">
                                    We take pride in our multidisciplinary team of professionals who bring not only knowledge and experience, but also innovation and empathy to every project. Whether it's conducting rigorous Environmental Impact Assessments, designing sustainable waste management plans, or supporting industries through complex environmental clearances, we approach every task with diligence, integrity, and a problem-solving mindset.
                                </div>
                                <div class="desc pb-30">
                                    At {{ env('SITENAME') }} Envirocare, we believe that environmental protection is not a checkbox—it is a mindset, a value system that must be integrated into every decision, policy, and project. Our mission is to be a trusted partner for organizations that are committed to responsible growth, and to contribute meaningfully to India's larger vision of sustainable development.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="message-content-wrapper">
                            <div class="sec-title mb-30">
                                <div class="desc pb-30">
                                    As we look ahead, we remain focused on expanding our capabilities, deepening our impact, and continuing to deliver value—to our clients, to the environment, and to the communities we serve.
                                </div>
                                <div class="desc pb-30 lead highlight font-weight-bold">
                                    Warm regards,<br>
                                    <span class="signature">Managing Director</span><br>
                                    {{ env('SITENAME') }} Envirocare Private Limited
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>
        <!-- Message Section End -->
        <!-- CTA Section Start -->
        <div class="rs-contact-wrap bg5 pt-80 pb-80 md-pt-80 pb-80" style="background: linear-gradient(rgb(0 24 24 / 84%) 100%, rgb(0 44 2) 100%), #0d4b46;">
            <div class="container">
                <div class="sec-title2 text-center mb-30">
                    <p class="title white-color" style="max-width:100%;">Inspired by our commitment to environmental responsibility?</p>
                    <button class="readon learn-more submit mb-30 mt-30">
                        <a href="{{route('contact-us')}}" class="text-white">Get In Touch</a>
                    </button>
                    <div class="text-white">Our team at {{ env('SITENAME') }} Envirocare is ready to partner with you on your journey towards sustainable development. Contact us today to discuss how we can support your environmental goals.</div>
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
    color: #555;
    font-size: 16px;
    line-height: 1.7;
    margin: 0 auto;
    max-width: 900px;
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
/* Signature styling */
.signature {
    font-weight: 600;
    color: #156e68;
    display: block;
    margin-top: 15px;
}
/* Specific banner adjustment if needed */
.rs-breadcrumbs.img1 {
    background-size: cover !important;
    background-position: center !important;
}
/* Wrapper for better content organization */
.message-content-wrapper {
    margin-bottom: 40px;
    padding: 20px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}
.message-content-wrapper:hover {
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
    .message-content-wrapper {
        padding: 15px 10px;
        margin-bottom: 30px;
    }
}
</style>
@endsection