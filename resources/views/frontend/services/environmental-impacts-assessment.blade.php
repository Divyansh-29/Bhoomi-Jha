@extends('frontend.layout.base')
@section('content')
    <!--Full width header End-->
        <!-- header end-->
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1"
            style="background: url({{asset('assets/images/EIA-banner.jpg')}} ) no-repeat; background-size: cover;">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Environmental Impact Assessment (EIA) Studies</h1>
                <ul>
                    <li title="Bhoomija - Environmental Consultancy Services">
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Services /</li>
                    <li>Environmental Impact Assessment (EIA) Studies</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- About Section Start -->
        <div class="rs-about gray-color pt-80 pb-80 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-30">
                        <div class="rs-animation-shape">
                            <div class="images">
                                <img src="{{asset('assets/images/eia-studies-img.jpg')}}" alt="EIA Studies">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-30">
                                <div class="sub-text style-bg">Services</div>
                                <h2 class="title pb-38">
                                    Environmental Impact Assessment (EIA) Studies
                                </h2>
                                <div class="desc pb-35">
                                    <strong>Environmental Impact Assessment (EIA)</strong> is a critical process that evaluates the potential environmental consequences of a proposed project before it is undertaken. It ensures that environmental factors are integrated into project planning and decision-making, in compliance with statutory requirements under the <strong>EIA Notification, 2006</strong>, by the <strong>Ministry of Environment, Forest and Climate Change (MoEF&CC)</strong> and respective <strong>SEIAA</strong> authorities.
                                </div>
                                <div class="desc pb-35">
                                    At <strong>{{env('SITENAME')}}</strong> we specialize in delivering <strong>comprehensive, scientifically robust, and regulation-compliant EIA studies</strong> across a wide range of industrial, infrastructure, mining, and urban development projects.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mb-30">
                            <div class="desc pb-20 fontbold">
                                Our EIA Study Services Include:
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul style="list-style: disc; padding: 0px 26px; margin-bottom: 20px;">
                                        <li><strong>Project Screening and Scoping</strong></li>
                                        <li><strong>Preparation of Form 1, Pre-feasibility Report (PFR), and ToR applications</strong></li>
                                        <li><strong>Baseline Environmental Monitoring</strong> (air, water, soil, noise, ecology, socio-economics, hydrology, etc.)</li>
                                        <li><strong>Impact Prediction and Mitigation Planning</strong></li>
                                        <li><strong>Public Consultation & Stakeholder Engagement</strong></li>
                                        <li><strong>Environmental Management Plan (EMP) Development</strong></li>
                                        <li><strong>Risk & Hazard Analysis</strong></li>
                                        <li><strong>Preparation of Draft & Final EIA Reports</strong></li>
                                        <li><strong>Representation before SEAC/SEIAA/MoEF&CC</strong></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="shape-image">
                </div>
            </div>
        </div>

<style>
/* Custom styles for EIA studies page */
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
}

.services-item:hover {
    border-color: #156e68;
    box-shadow: 0 10px 30px rgba(21,110,104,0.15);
    transform: translateY(-5px);
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
}

.services-item:hover .services-icon-wrapper {
    border-color: #156e68;
    background: linear-gradient(135deg, #156e68, #aec944);
    transform: translateY(-2px);
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
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: brightness(0.9);
}

.services-item:hover .sector-icon {
    transform: scale(1.05);
    filter: brightness(1);
}

.services-content {
    text-align: center;
    flex-grow: 1;
}

.services-content .title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.services-item:hover .services-content .title {
    color: #156e68;
}

.services-content .desc {
    font-size: 14px;
    line-height: 1.6;
    color: #666;
    margin: 0;
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
    .col-lg-4 {
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
}

/* Equal height for all cards - SCOPED TO SERVICES SECTION ONLY */
.rs-services .row {
    display: flex;
    flex-wrap: wrap;
}

.h-100 {
    height: 100%;
}

@media (min-width: 992px) {
    .rs-services .row > [class*="col-"] {
        display: flex;
    }
}
</style>
@endsection