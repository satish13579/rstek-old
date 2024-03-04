@extends('layouts.web_layout')

@section('title', 'Talent Hiring')

@section('content')
<div class="section page-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="body-content">
                            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark rp-jumbotron">
                                <div class="row">
                                    <div class="col-md-8 px-4">
                                        <h1 class="">Empower Your Project with Exceptional <span class="half-header-dark">QA Professionals</span> – Hire <span class="half-header-dark">Top-Quality</span> Talent Now!</h1>
                                        <p class="lead my-3">Experience the ease of enhancing your team with our trained and certified QA professionals, expertly matched to meet your needs—saving you countless hours and resources in the pursuit of the perfect candidate for your quality assurance challenges.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('image/talent-hiring-page.png') }}" alt="Market Yourself"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row effective-api-testing">
            <div class="col-md-12 test-plan-list">
                <h3>Why <span class="half-header">Hire</span> with us?</h3>
                <ul>
                    <li><b>Highly Trained Expertise</b>: Our QA engineers undergo rigorous training and certification,
                        constantly updating their skills with the latest industry tools and techniques. This commitment
                        ensures effective QA solutions tailored to your needs.</li>
                    <li><b>Diversity in Perspective</b>: We source QA engineers globally, offering you diverse
                        perspectives and rich experience. Whether you require local insight or a global viewpoint, our
                        pool of talent provides comprehensive coverage.</li>
                    <li><b>Efficiency in Time and Resources</b>: Say goodbye to lengthy hiring processes. We expedite
                        the connection with skilled QA talent, streamlining your search and conserving valuable
                        resources. Focus on your goals while we efficiently handle the talent acquisition process.</li>
                    <li><b>Tailored Matchmaking</b>: We prioritize understanding your specific needs to match you with
                        QA professionals whose expertise aligns perfectly with your project requirements. This tailored
                        approach ensures a seamless integration of talent into your workflow.</li>
                    <li><b>Continuous Support</b>: Our commitment doesn't end with the placement. We provide ongoing
                        support and engagement to ensure a smooth collaboration, helping you achieve sustained success
                        with our QA experts.</li>
                </ul>
                <br />
                <br />
            </div>
        </div>
        <div class="container">
            <div class="rp-cta-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>                            
                            <span>Let’s get started.</span> Share your requirements and our team will get back to you with the perfect solution.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 text-right">
                        <div class="btn-nav">
                            <span class="rp-cta-button">
                            <a class="btn btn-rp-grad" href="{{ route('website.forms.hiring-form') }}">Get Started</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid explore-section" data-aos="fade-in">
            <h3>We don't just hire <b>testers</b>; we invest in architects of <b>assurance</b></h3>
            <p class="paragraph">Be part of a team that values precision, performance, and passion for quality.</p>
            <br/>
            <a class="btn animated-rp-btn animated-rp-btn-secondary" href="{{ route('website.forms.hiring-form') }}">Connect with us</a>
        </div>
@endsection