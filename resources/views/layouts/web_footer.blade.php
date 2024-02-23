@php
    $isHomePage = (Route::currentRouteName() === 'website.home') ? true : false;
@endphp

@if ($isHomePage)
<div class="section" id="contact">
            <div id="container" class="contact-us-container">
                <div class="row align-items-center">
                    <div class="col-12 text-center ">
                        <div class="contact-us-section">
                            <h3 class="rp-contact-header">Contact us now for a <span class="half-header">free
                                    consultation</span> and unlock the power of flawless user interfaces for your
                                technology services</h3>
                            <a href="{{ route('website.contact') }}"" class="btn animated-rp-btn animated-rp-btn-secondary">Connect with us</a>
                        </div>
                    </div>
                </div>
                <footer id="footer">
        <div class="container-fluid">
            <div class="row footer-link-section">
                <div class="col-md-4">
                    <a class="navbar-brand" style="color:#fff;padding-bottom: 24px;font-weight: bold;"
                            href="{{ route('website.home') }}">
                            RS <span class="half-header">TEKSolutions</span></a>
                    <p class="text-left my-2">
                    1309, Coffeen Avenue<br/>
                    STE 12705 Sheridan<br/>
                    WY 82801<br><br>
                    </p>
                    <span class="social-media-icon"><i class="bx bxl-facebook"></i></span>
                    <span class="social-media-icon"><i class="bx bxl-twitter"></i></span>
                    <span class="social-media-icon"><i class="bx bxl-linkedin"></i></span>
                </div>

                <div class="col-md-2">
                    <h5 style="">Sitemap</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.home') }}" class="nav-link p-0 text-muted">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.about') }}" class="nav-link p-0 text-muted">About</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Solutions</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.ui-testing') }}" class="nav-link p-0 text-muted">UI testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.api-testing') }}" class="nav-link p-0 text-muted">API
                                testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.mobile-testing') }}" class="nav-link p-0 text-muted">Mobile
                                testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.performance-testing') }}" class="nav-link p-0 text-muted">Performance
                                testing</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.test-plan') }}" class="nav-link p-0 text-muted">Test Plan,
                                Strategy &amp; Executions</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Services</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.test-solutions') }}" class="nav-link p-0 text-muted">Test
                                Solutions</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Talent
                                Hiring</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.market-yourself') }}" class="nav-link p-0 text-muted">Market
                                Product/Yourself</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.qa-training') }}" class="nav-link p-0 text-muted">QA Automation
                                Trainings</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Company</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.partnership') }}" class="nav-link p-0 text-muted">Partner with
                                us</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.about') }}" class="nav-link p-0 text-muted">About us</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.contact') }}" class="nav-link p-0 text-muted">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row copyright-section">
                <div class="col-md-12 text-muted text-center">© 2024 RS TEKSolutions | A RahulShetty Academy Company. All rights reserved.
                </div>

            </div>
        </div>
    </footer>
</div>
@else
<div class="section" id="contact">
    <footer id="footer" class="other-page-footer">
        <div class="container-fluid">
            <div class="row footer-link-section">
                <div class="col-md-4">
                <a class="navbar-brand" style="color:#fff;padding-bottom: 24px;font-weight: bold;"
                        href="{{ route('website.home') }}">
                        RS <span class="half-header">TEKSolutions</span></a>
                        <p class="text-left my-2">
                        1309, Coffeen Avenue<br/>
                        STE 12705 Sheridan<br/>
                        WY 82801
                        </p><br><br>
                    <span class="social-media-icon"><i class="bx bxl-facebook"></i></span>
                    <span class="social-media-icon"><i class="bx bxl-twitter"></i></span>
                    <span class="social-media-icon"><i class="bx bxl-linkedin"></i></span>
                </div>

                <div class="col-md-2">
                    <h5 style="">Sitemap</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.home') }}" class="nav-link p-0 text-muted">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.about') }}" class="nav-link p-0 text-muted">About</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Solutions</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.ui-testing') }}" class="nav-link p-0 text-muted">UI testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.api-testing') }}" class="nav-link p-0 text-muted">API
                                testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.mobile-testing') }}" class="nav-link p-0 text-muted">Mobile
                                testing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.performance-testing') }}" class="nav-link p-0 text-muted">Performance
                                testing</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.test-plan') }}" class="nav-link p-0 text-muted">Test Plan,
                                Strategy &amp; Executions</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Services</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.test-solutions') }}" class="nav-link p-0 text-muted">Test
                                Solutions</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Talent
                                Hiring</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.market-yourself') }}" class="nav-link p-0 text-muted">Market
                                Product/Yourself</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.qa-training') }}" class="nav-link p-0 text-muted">QA Automation
                                Trainings</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h5>Company</h5>
                    <ul class="nav flex-column my-2">
                        <li class="nav-item mb-2"><a href="{{ route('website.partnership') }}" class="nav-link p-0 text-muted">Partner with
                                us</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('website.about') }}" class="nav-link p-0 text-muted">About us</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('website.contact') }}" class="nav-link p-0 text-muted">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row copyright-section">
                <div class="col-md-12 text-muted text-center">© 2024 RS TEKSolutions | A RahulShetty Academy Company. All rights reserved.
                </div>

            </div>
        </div>
    </footer>
</div>
@endif
