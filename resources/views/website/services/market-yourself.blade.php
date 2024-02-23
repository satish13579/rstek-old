@extends('layouts.web_layout')

@section('title', 'Market Yourself or Your Business')

@section('content')
<div class="section page-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="body-content">
                            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark rp-jumbotron">
                                <div class="row">
                                    <div class="col-md-8 px-4">
                                        <h1 class="">Boost Your <span class="half-header-dark">Career/Products</span> with
                                            Our Cutting-Edge Marketing
                                            Solutions</span></h1>
                                        <p class="lead my-3">Highlight your QA expertise
                                            and
                                            products by joining the world's largest QA quarterly magazine. Connect with
                                            a
                                            community
                                            of over 1 million software testing professionals.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('image/market-yourself-page.png') }}" alt="Market Yourself"
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
                <h3>How We <span class="half-header">Support</span> You</h3>
                <p class="rp-para-one">For QA Automation Product Owners:</p>
                <!-- <br /> -->
                <ul>
                    <li><b>Showcase Your Product</b>: Featuring QA automation products in our magazine can give
                        significant reach. . Amplify visibility on a perfect platform.</li>
                    <li><b>Refine and Improve</b>: Gather feedback, pinpoint issues, and optimize your product's
                        performance. Utilize our community's expertise for top-notch standards.</li>
                    <li><b>Gain Expert Exposure</b>: Present your product to established QA professionals, establishing
                        credibility and recognition within the QA circle.</li>
                </ul>
                <br />
                <p class="rp-para-one">
                    <span class="rp-custom-btn-container">
                        <a class="btn btn-rp-grad" href="{{ route('website.forms.marketing-form') }}">Market your product today</a>
                    </span>
                </p>
                <br />
                <p class="rp-para-one">For QA Automation Experts:</p>
                <!-- <br /> -->
                <ul>
                    <li><b>Share Your Insights</b>: Contribute articles, research, or expertise to our magazine,
                        reaching over 1 million QA professionals. Gain exposure and establish yourself as an industry
                        leader in the thriving QA community.</li>
                    <li><b>Networking Opportunities</b>: Collaborate and expand your professional circle with
                        like-minded QA experts. Our magazine provides a unique space to exchange ideas and best
                        practices.</li>
                    <li><b>Showcase Success Stories</b>: Share real-world case studies highlighting QA automation
                        successes. Inspire others and demonstrate how your expertise solves challenging QA problems,
                        making a tangible difference.</li>
                </ul>
                <br />
                <p class="rp-para-one">
                    <span class="rp-custom-btn-container">
                        <a class="btn btn-rp-grad" href="{{ route('website.forms.marketing-form') }}">Market your
                            expertise</a>
                    </span>
                </p>
                <br />
                <br />
            </div>
        </div>

        <div class="container-fluid explore-section" data-aos="fade-in">
            <h3>Your software has a <b>story</b>. We help the world <b>read it</b></h3>
            <p class="paragraph">Because the best products deserve recognition - let's introduce your software to its audience.</p>
            <br/>
            <a class="btn animated-rp-btn animated-rp-btn-secondary" href="{{ route('website.contact') }}">Connect with us</a>
        </div>
@endsection