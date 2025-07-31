@extends('frontend.layout.base')

@section('content')
<!-- Vision Mission Values Section Start -->
<div class="rs-services style3 bg13 pt-120 pb-120 md-pt-80 md-pb-80 vission-mission-section">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <h2 class="title wow fadeInDown pb-20">Our Vision, Mission & Values</h2>
            <div class="desc pb-30">The guiding principles that drive our commitment to environmental excellence and sustainable development.</div>
        </div>
        <div class="row justify-content-center g-5">
            <!-- Vision Card -->
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="vision-card rs-card-style text-center p-40">
                    <div class="card-icon mb-30">
                        <div class="icon-wrapper">
                             <!-- Vision Icon SVG -->
                            <svg class="icon-symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2ecc71" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C9.5 3 7 5.5 7 9c0 1.7.7 3.3 1.8 4.4L12 21l3.2-7.6c1.1-1.1 1.8-2.7 1.8-4.4 0-3.5-2.5-6-5-6Z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title mb-20">Our Vision</h3>
                    <p class="card-desc">To be a leading force in environmental consultancy, enabling sustainable development through science-driven solutions, ethical practices, and a commitment to preserving our planet for future generations.</p>
                    <div class="card-footer-graphic">
                        <svg viewBox="0 0 100 10" class="footer-wave">
                            <path d="M0,5 Q25,0 50,5 T100,5" fill="none" stroke="#aec944" stroke-width="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="mission-card rs-card-style text-center p-40">
                    <div class="card-icon mb-30">
                        <div class="icon-wrapper">
                            <!-- Mission Icon SVG -->
                            <svg class="icon-symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12 9 9M12 12v6M12 12l3-3" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title mb-20">Our Mission</h3>
                    <ul class="text-left mission-list">
                        <li class="mb-15"><span class="list-icon">
                            <!-- Check Circle SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>Deliver reliable, innovative, and high-quality environmental consultancy services</li>
                        <li class="mb-15"><span class="list-icon">
                            <!-- Check Circle SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>Guide clients through environmental regulations with integrity</li>
                        <li class="mb-15"><span class="list-icon">
                            <!-- Check Circle SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>Promote environmental stewardship through integrated solutions</li>
                        <li><span class="list-icon">
                            <!-- Check Circle SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>Continuously enhance technical capabilities and professional excellence</li>
                    </ul>
                     <div class="card-footer-graphic">
                        <svg viewBox="0 0 100 10" class="footer-wave">
                            <path d="M0,5 Q25,0 50,5 T100,5" fill="none" stroke="#aec944" stroke-width="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Values Card -->
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="values-card rs-card-style text-center p-40">
                    <div class="card-icon mb-30">
                        <div class="icon-wrapper">
                            <!-- Values Icon SVG -->
                            <svg class="icon-symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#e74c3c" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title mb-20">Our Core Values</h3>
                    <ul class="text-left values-list">
                        <li class="mb-12"><span class="list-icon">
                            <!-- Leaf SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                        </span>Sustainability</li>
                        <li class="mb-12"><span class="list-icon">
                            <!-- Shield SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </span>Integrity</li>
                        <li class="mb-12"><span class="list-icon">
                            <!-- Star SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </span>Excellence</li>
                        <li class="mb-12"><span class="list-icon">
                            <!-- Tasks/Checklist SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><line x1="9" x2="9" y1="9" y2="15"/><line x1="15" x2="15" y1="9" y2="15"/><line x1="9" x2="15" y1="3" y2="3"/><line x1="9" x2="15" y1="21" y2="21"/></svg>
                        </span>Accountability</li>
                        <li class="mb-12"><span class="list-icon">
                            <!-- Hands Helping SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 11v-1a1 1 0 0 0-2 0v1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1Z"/><path d="M13 11v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1Z"/><path d="M5 12a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H5Z"/><path d="M19 12a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Z"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 6.34-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
                        </span>Collaboration</li>
                        <li class="mb-12"><span class="list-icon">
                            <!-- Book Open SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/><path d="M6.5 22v-5a2.5 2.5 0 0 1 0-5"/></svg>
                        </span>Continuous Learning</li>
                        <li><span class="list-icon">
                            <!-- Paw/Tree SVG (using Tree as it's more specific) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12v8"/><path d="M12 2v2"/><path d="M5 12h2"/><path d="M17 12h2"/><path d="m19 5-2 2"/><path d="m5 19 2-2"/><path d="m7 5 2 2"/><path d="m17 19-2-2"/><path d="M8 12a4 4 0 0 0 8 0z"/></svg>
                        </span>Respect for Nature & Communities</li>
                    </ul>
                     <div class="card-footer-graphic">
                        <svg viewBox="0 0 100 10" class="footer-wave">
                            <path d="M0,5 Q25,0 50,5 T100,5" fill="none" stroke="#aec944" stroke-width="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vision Mission Values Section End -->

<style>
/* Enhanced Vission/Mission/Values Section */
.vission-mission-section {
    background: #f8f9fa; /* Light background */
    position: relative;
    overflow: hidden;
    /* background: url('{{asset('assets/images/subtle-geo-pattern.png')}}') center center; */
    background-size: cover;
}

.vission-mission-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: url('path/to/subtle-geo-pattern.png') center center; */ /* Optional subtle background pattern */
    opacity: 0.03;
    pointer-events: none;
    z-index: 0;
}

.rs-card-style {
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    height: 100%;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.05);
    padding: 45px 35px;
    display: flex;
    flex-direction: column;
}

/* Hover effect for cards */
.vision-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 15px 40px rgba(21, 110, 104, 0.25);
    border-color: rgba(21, 110, 104, 0.2);
}

.mission-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 15px 40px rgba(52, 152, 219, 0.25);
    border-color: rgba(52, 152, 219, 0.2);
}

.values-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 15px 40px rgba(231, 76, 60, 0.25);
    border-color: rgba(231, 76, 60, 0.2);
}

/* Icon wrapper */
.card-icon .icon-wrapper {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
}

.vision-card .card-icon .icon-wrapper {
    background: rgba(46, 204, 113, 0.1);
    color: #2ecc71;
    border-color: rgba(46, 204, 113, 0.3);
}

.mission-card .card-icon .icon-wrapper {
    background: rgba(52, 152, 219, 0.1);
    color: #3498db;
    border-color: rgba(52, 152, 219, 0.3);
}

.values-card .card-icon .icon-wrapper {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border-color: rgba(231, 76, 60, 0.3);
}

/* Icon symbol size */
.card-icon .icon-wrapper .icon-symbol {
    width: 50px;
    height: 50px;
}

/* Card hover icon effect */
.rs-card-style:hover .card-icon .icon-wrapper {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* Card title */
.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
    position: relative;
    padding-bottom: 15px;
}

/* Add a subtle underline to titles */
.card-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    border-radius: 3px;
}

.vision-card .card-title::after {
    background: linear-gradient(to right, #2ecc71, #aec944);
}

.mission-card .card-title::after {
    background: linear-gradient(to right, #3498db, #156e68);
}

.values-card .card-title::after {
    background: linear-gradient(to right, #e74c3c, #c0392b);
}

/* Card description */
.card-desc {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    flex-grow: 1;
    text-align: justify; /* 👈 Added this line */
}

/* Mission and Values lists */
.mission-list, .values-list {
    list-style: none;
    padding: 0;
    margin: 25px 0 0 0;
    text-align: left;
    flex-grow: 1;
}

.mission-list li, .values-list li {
    margin-bottom: 18px;
    display: flex;
    align-items: flex-start;
    font-size: 0.95rem;
    line-height: 1.5;
    color: #555;
}

.list-icon {
    margin-right: 12px;
    min-width: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.mission-list .list-icon svg, .values-list .list-icon svg {
    width: 16px;
    height: 16px;
    /* Colors are defined directly in the SVG stroke attribute */
}

/* Footer graphic/wave */
.card-footer-graphic {
    margin-top: auto;
    padding-top: 20px;
    width: 100%;
}

.footer-wave {
    width: 100%;
    height: 20px;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .rs-card-style {
        padding: 35px 25px;
    }

    .card-icon .icon-wrapper {
        width: 80px;
        height: 80px;
    }

    .card-icon .icon-wrapper .icon-symbol {
        width: 40px;
        height: 40px;
    }

    .card-title {
        font-size: 1.3rem;
    }
}

@media (max-width: 767px) {
    .vission-mission-section {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .rs-card-style {
        padding: 30px 20px;
    }

    .card-icon .icon-wrapper {
        width: 70px;
        height: 70px;
        margin-bottom: 20px;
    }

    .card-icon .icon-wrapper .icon-symbol {
        width: 35px;
        height: 35px;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 15px;
    }

    .card-desc, .mission-list li, .values-list li {
        font-size: 0.9rem;
    }

    .mission-list, .values-list {
        margin-top: 20px;
    }

    .mission-list li, .values-list li {
        margin-bottom: 15px;
    }
}
</style>
@endsection