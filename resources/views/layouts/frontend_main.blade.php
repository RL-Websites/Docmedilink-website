<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Docmedilink | Exceptional Care, Anywhere.</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets') }}/img/favicon.png" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!--====||  All CSS Integration Start ||====-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{ URL::asset('assets') }}/icons/style.css" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/style.css" />
    <style>
        .success-animation {
            margin: 0px auto;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #4bb71b;
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px #4bb71b;
            animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
            position: relative;
            top: 5px;
            right: 5px;
            margin: 0 auto;
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 4;
            stroke-miterlimit: 10;
            stroke: #4bb71b;
            fill: #fff;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            stroke-width: 3;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        .form-modal {
            z-index: 100;
            background: rgba(255, 255, 255, 0.92);

            &--content {
                position: relative;
                top: 25%;
            }
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #4bb71b;
            }
        }
    </style>
    @yield('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body id="home">
    <!--====||  Header Section Start ||====-->
    <header class="header">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}">
                <img class="md:w-auto  max-w-[200px]" src="assets/img/logo.svg" alt="Docmedilink Logo" />
            </a>
            <nav class="header__menus">
                <ul class="flex gap-7">
                    <li><a href="{{ request()->path() == '/' ? url('/#home') : '/' }}"
                            class="menu-link home {{ url()->current() === url('/') ? 'active' : '' }}">Home</a>
                    </li>

                    <li><a href="{{ request()->path() == '/' ? '#our-services' : url('/#our-services') }}"
                            class="menu-link our-services {{ request()->path() === 'our-services' ? 'active' : '' }}">Services</a>
                    </li>

                    <li><a href="{{ request()->path() == '/' ? '#clinicians' : url('/#clinicians') }}"
                            class="menu-link clinicians {{ request()->path() === 'clinicians' ? 'active' : '' }}">Clinicians</a>
                    </li>
                    <li><a href="{{ request()->path() == '/' ? '#about-us' : url('/#about-us') }}" class="menu-link about-us">About us</a></li>
                    <li><a href="{{ request()->path() == '/' ? '#contact-us' : url('/#contact-us') }}" class="menu-link contact-us">Contact us</a></li>
                    <li class="sm-block w-[100px]">
                        <a target="_blank" href="{{ url('login') }}"
                            class="dml-btn dml-btn__primary">Login</a>
                    </li>
                </ul>
            </nav>


            <div class="sm-hidden">
                <a target="_blank" href="https://app.docmedilink.com/login" class="dml-btn dml-btn__primary">Login</a>
            </div>



            <button class="toggle-menu">
                <img class="hamburger-icon" src="assets/img/hamburger.svg" alt="Hamburger" />
                <img class="close-icon" src="assets/img/close.svg" alt="Close" style="display: none" />
            </button>
        </div>
    </header>
    <!--====||  Header Section End ||====-->
    @yield('content')

    <!--====||  Footer Section Start ||====-->
    <footer class="footer">
        <div class="container mx-auto">
            <div class="footer__content grid md:grid-cols-3 grid-cols-1">
                <div class="col-span-1 md:text-start text-center">
                    <img class="md:mx-[unset] mx-auto max-w-[200px]" src="assets/img/logo.svg" alt="DML Logo"  />
                    <p class="lg:text-xl md:text-lg text-base lg:mt-5 mt-2" >
                        &copy; 2025 Docmedilink. Inc.
                    </p>
                    <div class="flex items-center md:justify-start justify-center lg:gap-10 gap-5 lg:mt-16 mt-7">
                        <img class="w-[100px]" src="assets/img/hippa .svg" alt="Hippa Logo" />
                        <img class="w-[100px]" src="assets/img/surescripts.svg" alt="Surescript Logo" />
                    </div>
                </div>
                <div class="col-span-2 grid md:grid-cols-3 md:text-start text-center md:mt-0 mt-8">
                    <div>
                        <h4 class="font-bold" >Quick Links</h4>
                        <ul class="footer__menus flex flex-col md:gap-7 gap-4 mt-5 aos-init">
                            <li><a href="{{ request()->path() == '/' ? url('/#home') : '/' }}"
                                    class="menu-link home {{ url()->current() === url('/') ? 'active' : '' }}">Home</a>
                            </li>

                            <li><a href="{{ request()->path() == '/' ? '#our-services' : url('/#our-services') }}"
                                    class="menu-link our-services {{ request()->path() === 'our-services' ? 'active' : '' }}">Services</a>
                            </li>

                            <li><a href="{{ request()->path() == '/' ? '#clinicians' : url('/#clinicians') }}"
                                    class="menu-link clinicians {{ request()->path() === 'clinicians' ? 'active' : '' }}">Clinicians</a>
                            </li>
                            <li><a href="{{ request()->path() == '/' ? '#about-us' : url('/#about-us') }}" class="menu-link about-us">About us</a></li>
                            <li><a href="{{ request()->path() == '/' ? '#contact-us' : url('/#contact-us') }}" class="menu-link contact-us">Contact us</a></li>

                        </ul>


                    </div>
                    <div class="md:mt-0 mt-12">
                        <h4 class="font-bold" >Social Links</h4>
                        <ul class="flex flex-col lg:gap-7 gap-4 mt-5" >
                            <li><a href="">Linkedin</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="md:mt-0 mt-12" >
                        <h4 class="font-bold" >Contacts</h4>
                        <ul class="flex flex-col md:gap-7 gap-4 mt-5" >
                            <li><a href="mailto:info@docmedilink.com">info@docmedilink.com</a></li>
                            <li><a href="tel:(972) 740-4622">(972) 740-4622</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====||  footer Section End ||====-->

    <!-- jQuery Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ URL::asset('assets') }}/js/jquery-3.6.4.min.js"></script>
    <script src="{{ URL::asset('assets') }}/js/main.js"></script>

    <script type="text/javascript">
        function formatPhone(phone) {
            phone = phone.replace(/\D/g, '');
            if (phone.length <= 3) {
                return phone.replace(/(\d{3})(\d{0,})/, '($1) $2');
            } else if (phone.length <= 6) {
                return phone.replace(/(\d{3})(\d{3})(\d{0,})/, '($1) $2-$3');
            } else {
                return phone.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            }
        }

        $(document).ready(function() {
            const setActiveClass = () => {
                const hash = window.location.hash;

                if (hash && hash !== undefined) {
                    const plainText = hash.replace('#', '');
                    $('.menu-link').removeClass('active');
                    $("." + plainText).addClass('active');
                }
                // console.log("hash,",hash);

                // $('.menu-link').removeClass('active');
                // if (hash) {
                //     $(`a[href="${hash}"]`).addClass('active');
                // }
            };
            setActiveClass();
            $(window).on('hashchange', setActiveClass);
        });
    </script>
    @yield('scripts')
</body>

</html>
