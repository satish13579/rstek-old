@php
    // $section = Route::getCurrentRoute()->getPrefix();
    use Illuminate\Support\Facades\Route;

    $section = 'home';
    $route = Route::currentRouteName();
    if ($route == 'website.home') {
        $section = 'home';
    } elseif ($route == 'website.solutions' || $route == 'website.ui-testing' || $route == 'website.mobile-testing' || $route == 'website.performance-testing' || $route == 'website.api-testing' || $route == 'website.test-plan') {
        $section = 'solutions';
    } elseif ($route == 'website.test-solutions' || $route == 'website.services-ui-testing' || $route == 'website.services-mobile-testing' || $route == 'website.services-performance-testing' || $route == 'website.services-api-testing' || $route == 'website.services-test-plan' || $route == 'website.talent-hiring' || $route == 'website.market-yourself' || $route == 'website.qa-training') {
        $section = 'services';
    } elseif ($route == 'website.career') {
        $section = 'careers';
    } elseif ($route == 'website.about' || $route == 'website.contact' || $route == 'website.contact.store' || $route == 'website.partnership') {
        $section = 'company';
    }
    $isHomePage = Route::currentRouteName() === 'website.home' ? true : false;
@endphp

<!-- Sub navbar -->
<nav
    class="navbar navbar-expand-lg navbar-dark bg-dark redpanda-sub-navbar{{ $isHomePage ? '' : ' other-page-navbar' }}">
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
                <a class="nav-link" target="_blank" href="https://www.linkedin.com/company/rs-tek-solutions/"><i
                        class="bx bxl-linkedin"></i></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light redpanda-navbar">
    <a class="navbar-brand" href="{{ route('website.home') }}"><img class="rs-logo"
            src="{{ asset('image/logo.jpeg') }}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item @if ($section == 'home') {{ 'active' }} @endif">
                <a class="nav-link" href="{{ route('website.home') }}">Home</a>
            </li>
            <li onclick="window.location.href='{{ route('website.solutions') }}'"
                class="nav-item dropdown @if ($section == 'solutions') {{ 'active' }} @endif">
                <a class="nav-link dropdown-toggle" href="{{ route('website.solutions') }}" id="solutionsDropdown"
                    role="button" bs-data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solutions
                </a>
                <div class="dropdown-menu" aria-labelledby="solutionsDropdown">
                    <a class="dropdown-item @if ($route == 'website.ui-testing') {{ 'active' }} @endif"
                        href="{{ route('website.ui-testing') }}">UI Testing</a>
                    <a class="dropdown-item @if ($route == 'website.api-testing') {{ 'active' }} @endif"
                        href="{{ route('website.api-testing') }}">API Testing</a>
                    <a class="dropdown-item @if ($route == 'website.mobile-testing') {{ 'active' }} @endif"
                        href="{{ route('website.mobile-testing') }}">Mobile Testing</a>
                    <a class="dropdown-item @if ($route == 'website.performance-testing') {{ 'active' }} @endif"
                        href="{{ route('website.performance-testing') }}">Performance Testing</a>
                    <a class="dropdown-item @if ($route == 'website.test-plan') {{ 'active' }} @endif"
                        href="{{ route('website.test-plan') }}">Test Plan, Strategy &
                        Executions</a>
                </div>
            </li>
            <li class="nav-item dropdown @if ($section == 'services') {{ 'active' }} @endif">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <li onclick="window.location.href='{{ route('website.test-solutions') }}'"
                        class="dropdown-submenu dropdown-item @if (
                            $route == 'website.test-solutions' ||
                                $route == 'website.services-ui-testing' ||
                                $route == 'website.services-api-testing' ||
                                $route == 'website.services-mobile-testing' ||
                                $route == 'website.services-performance-testing' ||
                                $route == 'website.services-test-plan') {{ 'active' }} @endif">
                        <a class="dropdown-toggle" href="{{ route('website.test-solutions') }}"
                            id="solutionssubDropdown" role="button" bs-data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Test Solutions
                        </a>
                        <div class="dropdown-menu" aria-labelledby="solutionssubDropdown">
                            <a class="dropdown-item @if ($route == 'website.services-ui-testing') {{ 'active' }} @endif"
                                href="{{ route('website.services-ui-testing') }}">UI Testing</a>
                            <a class="dropdown-item @if ($route == 'website.services-api-testing') {{ 'active' }} @endif"
                                href="{{ route('website.services-api-testing') }}">API Testing</a>
                            <a class="dropdown-item @if ($route == 'website.services-mobile-testing') {{ 'active' }} @endif"
                                href="{{ route('website.services-mobile-testing') }}">Mobile Testing</a>
                            <a class="dropdown-item @if ($route == 'website.services-performance-testing') {{ 'active' }} @endif"
                                href="{{ route('website.services-performance-testing') }}">Performance
                                Testing</a>
                            <a class="dropdown-item @if ($route == 'website.services-test-plan') {{ 'active' }} @endif"
                                href="{{ route('website.services-test-plan') }}">Test Plan, Strategy &
                                Executions</a>
                        </div>
                    </li>
                    <a class="dropdown-item @if ($route == 'website.talent-hiring') {{ 'active' }} @endif"
                        href="{{ route('website.talent-hiring') }}">Talent Hiring</a>
                    <a class="dropdown-item @if ($route == 'website.market-yourself') {{ 'active' }} @endif"
                        href="{{ route('website.market-yourself') }}">Market Product/Yourself</a>
                    <a class="dropdown-item @if ($route == 'website.qa-training') {{ 'active' }} @endif"
                        href="{{ route('website.qa-training') }}">QA Automation Trainings</a>
                </ul>
            </li>
            <li class="nav-item @if ($section == 'careers') {{ 'active' }} @endif">
                <a class="nav-link" href="{{ route('website.career') }}">Careers</a>
            </li>
            <li class="nav-item dropdown @if ($section == 'company') {{ 'active' }} @endif">
                <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Company
                </a>
                <div class="dropdown-menu" aria-labelledby="companyDropdown">
                    <a class="dropdown-item @if ($route == 'website.about') {{ 'active' }} @endif"
                        href="{{ route('website.about') }}">About Us</a>
                    <a class="dropdown-item @if ($route == 'website.partnership') {{ 'active' }} @endif"
                        href="{{ route('website.partnership') }}">Partnership</a>
                    <a class="dropdown-item @if ($route == 'website.contact.store' || $route == 'website.contact') {{ 'active' }} @endif"
                        href="{{ route('website.contact') }}">Contact</a>
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
