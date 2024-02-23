@extends('layouts.web_layout')

@section('title', 'Home')

@section('styles')
<!-- Fullpage.js CSS -->
<link rel="stylesheet" href="{{ asset('css/fullPageScroll.min.css') }}">
@endsection

@section('content')
        <!-- Section 1: Slides -->
        <div class="section" id="home">
            <div class="container-fluid full-page-section full-page-section-bg">
                <div class="custom-text">
                    <div id="typing-text"></div>
                    <div id="sub-title">Let us take care of all your A&DoubleRightArrow;Z QA needs</div>
                    <div class="text-center py-4">
                        <!-- <a class="btn btn-primary btn-rp-primary" data-aos="fade-up" data-aos-delay="1000">Get
                            Started</a> -->
                        <a class="rp-bounce-btn" data-aos="bounce-in"><i class="bx bx-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Services -->
        <div class="section" id="services">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="rp-sec-title text-left">
                            <h1 class="section-header-title text-clr-blue" data-aos="fade-in">Our <span
                                    class="half-header">Services</span>
                            </h1>

                            <p class="rp-section-para text-left text-clr-blue" data-aos="fade-in">Whether you are
                                operating at an
                                enterprise-scale or
                                just starting, we are here to provide you A-Z QA Test Automation
                                Solutions such as <span class="rp-bold">Project implementation</span></Project>, <span
                                    class="rp-bold">Talent
                                    Hiring</span>, <span class="rp-bold">Marketing</span>, <span class="rp-bold">
                                    Training needs</span>.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-baseline">
                            <div class="col-md-6 text-center">
                                <div class="service-box" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="service-icon ui-testing"><img class="rpbouncein"
                                            src="{{ asset('image/test-solutions.png') }}"></div>
                                    <div class="service-title"><a href="./solution.html">Test Solutions</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <div class="service-box" data-aos="zoom-out" data-aos-delay="200">
                                    <div class="service-icon api-testing"><img class="rpbouncein"
                                            src="{{ asset('image/talent-hiring.png') }}"></div>
                                    <div class="service-title"><a href="./talent-hiring.html">Talent Hiring</a></div>
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <div class="service-box" data-aos="zoom-out" data-aos-delay="300">
                                    <div class="service-icon mobile-testing"><img class="rpbouncein"
                                            src="{{ asset('image/market-yourself.png') }}"></div>
                                    <div class="service-title"><a href="./market-yourself.html">Market Yourself</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <div class="service-box" data-aos="zoom-out" data-aos-delay="400">
                                    <div class="service-icon performance-testing"><img class="rpbouncein"
                                            src="{{ asset('image/qa-trainings.png') }}"></div>
                                    <div class="service-title"><a href="./qa-training.html">QA Trainings</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: About -->
        <div class="section" id="vision">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('image/our-vision-homepage.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="rp-sec-title text-left">
                            <h1 class="section-header-title text-clr-blue" data-aos="fade-in">Our <span
                                    class="half-header">Vision</span>
                            </h1>
                            <p class="rp-section-para-two text-left text-clr-blue" data-aos="fade-left">
                                We aim to transform the QA landscape by offering comprehensive end-to-end QA Services.
                                From
                                expertly managing solutions and empowering recruiters to discover top-tier talent, to
                                providing specialized QA Training and showcasing industry experts, our goal is to
                                redefine
                                QA excellence. Through strategic alliances and a collaborative approach, we're committed
                                to
                                elevating standards, fostering innovation, and leading the industry towards a more
                                impactful
                                future.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <svg preserveAspectRatio="xMidYMid slice" viewBox="10 10 80 80">
                <defs>
                    <style>
                        @keyframes rotate {
                            0% {
                                transform: rotate(0deg);
                            }

                            100% {
                                transform: rotate(360deg);
                            }
                        }

                        .out-top {
                            animation: rotate 20s linear infinite;
                            transform-origin: 13px 25px;
                        }

                        .in-top {
                            animation: rotate 10s linear infinite;
                            transform-origin: 13px 25px;
                        }

                        .out-bottom {
                            animation: rotate 25s linear infinite;
                            transform-origin: 84px 93px;
                        }

                        .in-bottom {
                            animation: rotate 15s linear infinite;
                            transform-origin: 84px 93px;
                        }
                    </style>
                </defs>
                <path fill="#9b5de5" class="out-top"
                    d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z" />
                <path fill="#f15bb5" class="in-top"
                    d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z" />
                <path fill="#00bbf9" class="out-bottom"
                    d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z" />
                <path fill="#00f5d4" class="in-bottom"
                    d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z" />
            </svg>

        </div>


        <!-- Section 4: Contact -->
@endsection

@section('scripts')
<script>
            $(document).ready(function () {

                // const sections = document.querySelectorAll('#main .section');
                // let currentSectionIndex = 0;

                // function scrollToSection(index) {
                //     const newPosition = index * window.innerHeight;
                //     window.scrollTo({
                //     top: newPosition,
                //     behavior: 'smooth'
                //     });
                // }

                // document.addEventListener('wheel', (event) => {
                //     if (event.deltaY > 0 && currentSectionIndex < sections.length - 1) {
                //     currentSectionIndex++;
                //     } else if (event.deltaY < 0 && currentSectionIndex > 0) {
                //     currentSectionIndex--;
                //     }

                //     console.log("currentSectionIndex", currentSectionIndex);

                //     scrollToSection(currentSectionIndex);
                // });
                
                const sections = document.querySelectorAll('#main .section');
                let currentSectionIndex = 0;
                let isScrolling = false;

                function scrollToSection(index) {
                    const newPosition = index * window.innerHeight;
                    window.scrollTo({
                        top: newPosition,
                        behavior: 'smooth'
                    });
                }

                document.addEventListener('wheel', (event) => {
                    if (!isScrolling) {
                        isScrolling = true;

                        if (event.deltaY > 0 && currentSectionIndex < sections.length - 1) {
                            currentSectionIndex++;
                        } else if (event.deltaY < 0 && currentSectionIndex > 0) {
                            currentSectionIndex--;
                        }

                        scrollToSection(currentSectionIndex);

                        setTimeout(() => {
                            isScrolling = false;
                        }, 1000); 
                    }
                });
                // const page = new FullPage("#main", {
                //     default: ".section",
                //     pagination: true,
                //     easing: "easeInOutCubic",
                //     duration: 3000,
                //     onLeave: function (index) { console.log("leaving ->", index) },
                //     afterLoad: function (index) {
                //         console.log("after load ->", index);
                //         const $section = $('.section').eq(index)
                //         $section.find('[data-aos]').addClass('aos-animate')
                //     }
                // });
                // $(".owl-carousel").owlCarousel({
                //     items: 1,
                //     loop: true,
                //     autoplay: true,
                //     autoplayTimeout: 5000,
                //     autoplayHoverPause: true,
                // });
                const typed = new Typed('#typing-text', {
                    strings: [
                        'We <b>implement</b> and Provide <b>QA Solutions</b>',
                        'We <b>Find</b> and provide <b>QA Technical Talent Resources</b>',
                        'We <b>implement</b> and Provide <b>QA Trainings</b>',
                        'We <b>showcase</b> and boost <b>your QA product</b>',

                    ],
                    typeSpeed: 50,
                    backSpeed: 0,
                    cursorChar: '_',
                    smartBackspace: true,
                    loop: true
                });
                // const moveToTop=document.getElementById("moveToTop"),moveToLast=document.getElementById("moveToLast");moveToTop.addEventListener("click",function(e){page.moveTo(0),e.preventDefault()}),moveToLast.addEventListener("click",function(e){page.moveTo(3),e.preventDefault()});
                // AOS.init();
            });
            document.addEventListener("DOMContentLoaded", function () {
                // make it as accordion for smaller screens
                if (window.innerWidth > 992) {

                    document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

                        everyitem.addEventListener('mouseover', function (e) {

                            let el_link = this.querySelector('a[data-bs-toggle]');

                            if (el_link != null) {
                                let nextEl = el_link.nextElementSibling;
                                el_link.classList.add('show');
                                nextEl.classList.add('show');
                            }

                        });
                        everyitem.addEventListener('mouseleave', function (e) {
                            let el_link = this.querySelector('a[data-bs-toggle]');

                            if (el_link != null) {
                                let nextEl = el_link.nextElementSibling;
                                el_link.classList.remove('show');
                                nextEl.classList.remove('show');
                            }


                        })
                    });

                }
            });
        </script>
@endsection