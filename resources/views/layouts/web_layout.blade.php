<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @yield('styles')
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Owl Carousel CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" -->
    <!-- href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/redpanda.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <style>
        /* body, html {
        margin: 0;
        padding: 0;
        overflow: hidden;
        }

        #main .section {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2em;
        } */
    </style>
</head>

<body>

    @include('layouts.web_header')

    <div id="main">
        @yield('content')
        @include('layouts.web_footer')
    </div>

        <!-- Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

        <!-- Fullpage.js -->
        <!-- <script src="{{ asset('js/fullPageScroll.min.js') }}"></script> -->
        
        @yield('scripts')

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init({
                once: true,
                easing: 'ease-in-out'
            });

            $(document).ready(()=>{
                const $navbar = $('.redpanda-navbar');
                const $subNavbar = $('.redpanda-sub-navbar');

                const navbarOffsetTop = $navbar.offset().top;

                function toggleFixedTop() {
                    const scrollTop = $(window).scrollTop();
                    if (scrollTop >= navbarOffsetTop) {
                        $navbar.addClass('fixed-top');
                        $subNavbar.removeAttr('data-aos');
                        $subNavbar.attr('data-aos', 'fade-down');
                    } else {
                        $navbar.removeClass('fixed-top');
                        $subNavbar.removeAttr('data-aos');
                    }
                }

                $(window).on('scroll', toggleFixedTop);
            })
        </script>
        <!-- <script src="{{ asset('js/redpanda.js') }}"></script> -->
</body>

</html>