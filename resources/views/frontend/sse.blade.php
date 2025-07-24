@extends('frontend.layout.base')

@section('content')
<!-- Page Banner Start -->
<div class="rs-breadcrumbs img1">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Sector-Specific Expertise</h1>
        <ul class="breadcrumbs-meta">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Sector-Specific Expertise</li>
        </ul>
    </div>
</div>
<!-- Page Banner End -->

<!-- SSE Section Start -->
<div class="rs-services style2 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <span class="sub-title">Our Environmental Expertise</span>
            <h2 class="title">Sector-Specific Domains Covered Under EIA Notification, 2006</h2>
            <div class="desc mt-10">We specialize in providing compliance support and environmental consultancy across key industrial sectors that mandate Environmental Clearance (EC).</div>
        </div>

        <div class="row gutter-40">

            <!-- Mining of Minerals -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/mining.jpg') }}" alt="Mining Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Mining of Minerals</h4>
                        <p class="desc">As per Schedule 1(a) of the EIA Notification, 2006, all mining projects including opencast and underground mining must acquire Environmental Clearance before commencement to address environmental impacts effectively.</p>
                    </div>
                </div>
            </div>

            <!-- Thermal Power Plants -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.1s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/power-plant.png') }}" alt="Power Plant Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Thermal Power Plants</h4>
                        <p class="desc">Thermal power projects using coal, gas, biomass etc. are listed under Schedule 1(d). Environmental Clearance is required to assess impacts related to emissions, water use, ash disposal, and land consumption.</p>
                    </div>
                </div>
            </div>

            <!-- Coal Washeries -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.2s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/coal.png') }}" alt="Coal Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Coal Washeries</h4>
                        <p class="desc">Covered under Schedule 2(a), coal washeries must obtain EC prior to setup or expansion. Activities like washing, screening, and handling can cause pollution and must be addressed through an EMP.</p>
                    </div>
                </div>
            </div>

            <!-- Mineral Beneficiation -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.3s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/beneficiation.jpg') }}" alt="Beneficiation Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Mineral Beneficiation</h4>
                        <p class="desc">Projects involving crushing, grinding, separation or flotation of ores fall under Schedule 2(a) and require EC due to possible emissions, wastewater, and tailings generation.</p>
                    </div>
                </div>
            </div>

            <!-- Metallurgical Industries -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.4s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/metallurgy.jpg') }}" alt="Metallurgy Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Metallurgical Industries</h4>
                        <p class="desc">Ferrous and non-ferrous industries (iron, steel, copper, etc.) are listed under Schedule 3(a). Smelting and refining generate hazardous emissions that must be mitigated via EC-guided planning.</p>
                    </div>
                </div>
            </div>

            <!-- Cement Plants -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.5s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/cement.jpg') }}" alt="Cement Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Cement Plants</h4>
                        <p class="desc">Cement manufacturing contributes to particulate emissions and high energy use. Under Schedule 3(b), new and expanding plants require EC to assess and minimize environmental footprint.</p>
                    </div>
                </div>
            </div>

            <!-- Building and Construction -->
            <div class="col-lg-6 col-md-6 mb-40 wow fadeInUp" data-wow-delay="0.6s">
                <div class="services-item hover-bg h-100">
                    <div class="services-icon-wrapper">
                        <div class="services-icon">
                            <img src="{{ asset('assets/images/icons/building.jpeg') }}" alt="Building Icon" class="sector-icon">
                        </div>
                    </div>
                    <div class="services-content">
                        <h4 class="title">Building & Construction Projects</h4>
                        <p class="desc">Projects like malls, IT parks, and housing colonies fall under Schedule 8(a). They must acquire EC for managing impacts on land, air, water, energy, and solid waste generation.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- SSE Section End -->

<style>
/* Custom styles for sector expertise page */
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
    height: 200px;
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

.services-item:hover .sector-icon {
    transform: scale(1.1);
}

.services-content {
    text-align: center;
    flex-grow: 1;
}

.services-content .title {
    font-size: 20px;
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
        height: 180px;
    }
    
    .services-content .title {
        font-size: 18px;
    }
}

@media (max-width: 991px) {
    .col-lg-6 {
        margin-bottom: 30px;
    }
    
    .services-item {
        padding: 20px 18px;
    }
    
    .services-icon-wrapper {
        height: 160px;
    }
    
    .services-content .title {
        font-size: 17px;
        margin-bottom: 12px;
    }
    
    .services-content .desc {
        font-size: 13px;
    }
}

@media (max-width: 767px) {
    .rs-services {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    
    .services-item {
        padding: 25px 20px;
        margin-bottom: 20px;
    }
    
    .services-icon-wrapper {
        height: 180px;
        margin-bottom: 20px;
    }
    
    .services-content .title {
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .services-content .desc {
        font-size: 14px;
        line-height: 1.5;
    }
}

@media (max-width: 575px) {
    .services-item {
        padding: 20px 15px;
    }
    
    .services-icon-wrapper {
        height: 150px;
    }
    
    .services-content .title {
        font-size: 16px;
    }
    
    .services-content .desc {
        font-size: 13px;
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

/* Equal height for all cards */
.row {
    display: flex;
    flex-wrap: wrap;
}

.h-100 {
    height: 100%;
}

@media (min-width: 992px) {
    .row > [class*="col-"] {
        display: flex;
    }
}
</style>
@endsection