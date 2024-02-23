@php
    $isHomePage = (Route::currentRouteName() === 'website.home') ? true : false;
@endphp

<!-- Sub navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark redpanda-sub-navbar{{ $isHomePage ? '' : ' other-page-navbar'}}">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item">
                <a class="nav-link" href="#"><i class="bx bx-phone"></i> +1-212-456-7890</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bx bx-envelope"></i> consulting@rsteksolutions.com</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- <li class="nav-item">
                <a class="nav-link" href="#"><i class="bx bxl-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bx bxl-twitter"></i></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.linkedin.com/company/rs-tek-solutions/"><i class="bx bxl-linkedin"></i></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light redpanda-navbar">
    <a class="navbar-brand" href="{{ route('website.home') }}"><img class="rs-logo" src="{{ asset('image/logo.jpeg') }}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('website.home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solutions
                </a>
                <div class="dropdown-menu" aria-labelledby="solutionsDropdown">
                    <a class="dropdown-item" href="{{ route('website.ui-testing') }}">UI Testing</a>
                    <a class="dropdown-item" href="{{ route('website.api-testing') }}">API Testing</a>
                    <a class="dropdown-item" href="{{ route('website.mobile-testing') }}">Mobile Testing</a>
                    <a class="dropdown-item" href="{{ route('website.performance-testing') }}">Performance Testing</a>
                    <a class="dropdown-item" href="{{ route('website.test-plan') }}">Test Plan, Strategy & Executions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item" href="{{ route('website.test-solutions') }}">Test Solutions</a>
                    <a class="dropdown-item" href="{{ route('website.talent-hiring') }}">Talent Hiring</a>
                    <a class="dropdown-item" href="{{ route('website.market-yourself') }}">Market Product/Yourself</a>
                    <a class="dropdown-item" href="{{ route('website.qa-training') }}">QA Automation Trainings</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.career') }}">Careers</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Company
                </a>
                <div class="dropdown-menu" aria-labelledby="companyDropdown">
                    <a class="dropdown-item" href="{{ route('website.about') }}">About Us</a>
                    <a class="dropdown-item" href="{{ route('website.partnership') }}">Partnership</a>
                    <a class="dropdown-item" href="{{ route('website.contact') }}">Contact</a>
                </div>
            </li>
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <div class="btn-nav"><a class="btn btn-rp-grad" href="{{ route('website.contact') }}">Get in touch</a>
            </div>
        </li>
    </ul>
</nav>

<!-- End of Main Navbar -->