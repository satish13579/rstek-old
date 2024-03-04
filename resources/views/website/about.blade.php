@extends('layouts.web_layout')

@section('title', 'About Us')

@section('content')
<div class="section page-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="body-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="body-content">
                                        <h1 class="rp-page-header-two">About <span class="half-page-header">RSTEK</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center about-us-vision rp-top-border-radius">
                                <div class="col-md-8 content">
                                    <h3>Our <span class="half-header">Vision</span></h3>
                                    <p class="text-justify" data-aos="fade-left">
                                        We aim to transform the QA landscape by offering comprehensive end-to-end QA
                                        Services.
                                        From
                                        expertly managing solutions and empowering recruiters to discover top-tier
                                        talent, to
                                        providing specialized QA Training and showcasing industry experts, our goal is
                                        to
                                        redefine
                                        QA excellence. Through strategic alliances and a collaborative approach, we're
                                        committed
                                        to
                                        elevating standards, fostering innovation, and leading the industry towards a
                                        more
                                        impactful
                                        future.
                                    </p>
                                </div>
                                <div class="col-md-4 about-us-img-col" data-aos="fade-right">
                                    <img src="{{ asset('image/our-vision.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row align-items-center about-us-expertise">
                                <div class="col-md-4 about-us-img-col" data-aos="fade-right">
                                    <img src="{{ asset('image/our-expertise.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8 content text-right">
                                    <h3 class="sub-header-title " data-aos="fade-left">Our <span
                                            class="half-header-dark">Expertise</span>
                                    </h3>
                                    <p class="text-justify" data-aos="fade-left">
                                        Driven by our deep passion for QA, RS TekSolutions is led by Rahul Shetty, a Top
                                        Software Testing voice on LinkedIn with over 100,000 followers. With over two
                                        decades of industry experience, our programs, solutions, and resources are of
                                        top quality, aligning seamlessly with the latest market trends.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center about-us-vision">
                                <div class="col-md-8 content">
                                    <h3>Udemy <span class="half-header">Success</span></h3>
                                    <p class="text-justify" data-aos="fade-left">
                                        Our Udemy courses, backed by 800,000+ QA students and 300,000+ reviews,
                                        underscore the impact we've made in the QA community. Trusted for QA training,
                                        our wide range of courses caters to beginners and experts alike.
                                    </p>
                                </div>
                                <div class="col-md-4 about-us-img-col" data-aos="fade-right">
                                    <img src="{{ asset('image/udemy-success.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row align-items-center about-us-expertise rp-bottom-border-radius">
                                <div class="col-md-4 about-us-img-col" data-aos="fade-right">
                                    <img src="{{ asset('image/growing-qa-community-about.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8 content text-right">
                                    <h3 class="sub-header-title " data-aos="fade-left">Growing <span
                                            class="half-header-dark">QA Community</span>
                                    </h3>
                                    <p class="text-justify" data-aos="fade-left">
                                        Come join us on this journey towards shaping the future of Quality Assurance.
                                        Together, let's make a difference and be part of our expanding QA community.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/><br/>

        <div class="container-fluid explore-section" data-aos="fade-in">
            <h3>Let's Explore Together</h3>
            <p class="paragraph">We don’t just consult; we innovate, we integrate, we inspire. Your digital
                transformation journey begins here.</p>
            <a class="btn animated-rp-btn animated-rp-btn-secondary" href="{{ route('website.contact') }}">Connect with us</a>
        </div>
        
@endsection