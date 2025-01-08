<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Docmedilink | Exceptional Care, Anywhere.</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--====||  All CSS Integration Start ||====-->
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/icons/style.css" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/style.css" />

    <!--====||  All CSS Integration End ||====-->
</head>

<body>
    <!--====||  Header Section Start ||====-->
    <header class="header">
        <div class="2xl:container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}">
                <img src="{{ URL::asset('assets') }}/img/logo.svg" alt="Docmedilink Logo" />
            </a>
            <nav class="header__menus">
                <ul class="flex gap-7">
                    <li><a href="#home" class="menu-link">Home</a></li>
                    <li><a href="#our-services" class="menu-link">Services</a></li>
                    <li><a href="#clinicians" class="menu-link">Clinicians</a></li>
                    <li><a href="#about-us" class="menu-link">About us</a></li>
                    <li><a href="#contact-us" class="menu-link">Contact us</a></li>
                    <li class="sm-block w-[100px]">
                        <a target="_blank" href="https://app.docmedilink.com/login"
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
    <footer class="footer pb-20">
        <img class="footer__img mx-auto lg:block hidden" src="assets/img/footer.png" alt="Hero Image" />
        <div class="2xl:container mx-auto">
            <div class="footer__content grid md:grid-cols-3 grid-cols-1">
                <div class="col-span-1 md:text-start text-center">
                    <img class="md:mx-[unset] mx-auto" src="assets/img/logo.svg" alt="DML Logo" />
                    <p class="lg:text-xl md:text-lg text-base lg:mt-5 mt-2">&copy; 2025 Docmedilink. Inc.</p>
                    <div class="flex items-center md:justify-start justify-center lg:gap-10 gap-5 lg:mt-16 mt-7">
                        <img class="w-[100px]" src="assets/img/hippa .svg" alt="Hippa Logo" />
                        <img class="w-[100px]" src="assets/img/surescripts.svg" alt="Surescript Logo" />
                    </div>
                </div>
                <div class="col-span-2 grid md:grid-cols-3 md:text-start text-center md:mt-0 mt-8">
                    <div>
                        <h4 class="font-bold">Quick Links</h4>
                        <ul class="footer__menus flex flex-col md:gap-7 gap-4 mt-5">
                            <li><a class="active" href="/{{ url('/') }}">Home</a></li>
                            <li><a href="/services.html">Services</a></li>
                            <li><a href="/{{ url('/') }}#about-us">About us</a></li>
                            <li><a href="/clinicians.html">Clinicians</a></li>
                            <li><a href="/{{ url('/') }}#contact-us">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="md:mt-0 mt-12">
                        <h4 class="font-bold">Social Links</h4>
                        <ul class="flex flex-col lg:gap-7 gap-4 mt-5">
                            <li><a href="">Linkedin</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="md:mt-0 mt-12">
                        <h4 class="font-bold">Contacts</h4>
                        <ul class="flex flex-col md:gap-7 gap-4 mt-5">
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
    <script src="{{ URL::asset('assets') }}/js/jquery-3.6.4.min.js"></script>
    <script src="{{ URL::asset('assets') }}/js/main.js"></script>
</body>

</html>
