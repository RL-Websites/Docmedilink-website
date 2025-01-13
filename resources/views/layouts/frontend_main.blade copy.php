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
    <footer class="footer">
        <div class="container mx-auto">
            <div class="footer__content grid md:grid-cols-3 grid-cols-1">
                <div class="col-span-1 md:text-start text-center aos-init" data-aos="fade-right" data-aos-duration="500">
                    <img class="md:mx-[unset] mx-auto" src="assets/img/logo.svg" alt="DML Logo">
                    <p class="lg:text-xl md:text-lg text-base lg:mt-5 mt-2">© 2025 Docmedilink. Inc.</p>
                    <div class="flex items-center md:justify-start justify-center lg:gap-10 gap-5 lg:mt-16 mt-7">
                        <img class="w-[100px]" src="assets/img/hippa .svg" alt="Hippa Logo">
                        <img class="w-[100px]" src="assets/img/surescripts.svg" alt="Surescript Logo">
                    </div>
                </div>
                <div class="col-span-2 grid md:grid-cols-3 md:text-start text-center md:mt-0 mt-8">
                    <div data-aos="fade-left" data-aos-duration="500" class="aos-init">
                        <h4 class="font-bold aos-init" data-aos="fade-left" data-aos-duration="700">Quick Links</h4>
                        <ul class="footer__menus flex flex-col md:gap-7 gap-4 mt-5 aos-init" data-aos="fade-left" data-aos-duration="900">
                            <li><a class="active" href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/clinicians">Clinicians</a></li>
                            <li><a href="/#about-us">About us</a></li>
                            <li><a href="/#contact-us">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="md:mt-0 mt-12 aos-init" data-aos="fade-left" data-aos-duration="500">
                        <h4 class="font-bold aos-init" data-aos="fade-left" data-aos-duration="700">Social Links</h4>
                        <ul class="flex flex-col lg:gap-7 gap-4 mt-5 aos-init" data-aos="fade-left" data-aos-duration="900">
                            <li><a href="">Linkedin</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="md:mt-0 mt-12 aos-init" data-aos="fade-left" data-aos-duration="500">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ URL::asset('assets') }}/js/main.js"></script>
    <!-- Toastr CSS (in the <head> section) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Toastr JS (at the bottom of the <body> section) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        $(document).ready(function() {
            $('#contactForm').on('submit', async function(event) {
                event.preventDefault();

                const formData = {
                    company_name: $('#company_name').val(),
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    services: $('#services').val(),
                    about: $('#about').val(),
                    details: $('#details').val(),
                    submitButton: $('button[name="contact"]').val()
                };

                try {
                    const response = await axios.post('{{ url('form-submissions') }}', formData, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    if (response.data.success) {
                        toastr.success(response.data.message);
                        $('#contactForm')[0].reset();
                    } else {
                        toastr.error(
                            'There was an issue with your submission.');
                    }
                } catch (error) {
                    console.error('Error submitting form:', error);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#clinicForm').on('submit', function(e) {
                e.preventDefault();
                var formData = {
                    clinic_name: $('#clinic_name').val(),
                    contact_name: $('#contact_name').val(),
                    contact_email: $('#contact_email').val(),
                    contact_phone: $('#contact_phone').val(),
                    specialization: $('#specialization').val(),
                    practice_size: $('#practice_size').val(),
                    telehealth: $('#telehealth').val(),
                    preferred_demo_time: $('#time').val(),
                    about_us: $('#about_us').val(),
                    submitButton: 'clinicians'
                };

                axios.post('/clinicians-form-submissions', formData)
                    .then(function(response) {
                        toastr.success('Form submitted successfully!');
                        $('#clinicForm')[0].reset();
                    })
                    .catch(function(error) {
                        toastr.error('There was an error with your submission.');
                    });
            });
        });
    </script>
</body>
</html>
