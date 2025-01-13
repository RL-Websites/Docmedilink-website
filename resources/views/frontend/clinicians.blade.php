@extends('layouts/frontend_main')

@section('styles')
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
@endsection

@section('content')
    <!--====||  Main Section Start ||====-->
    <main class="lg:pt-[130px] pt-[50px] overflow-x-hidden">
        <!--====|| Hero Section Start ||====-->
        <section class="hero">
            <img class="hero__img" src="assets/img/clinicians.webp" alt="Hero Image" />
            <div class="hero__content hero__content--alt">
                <h1 class="font-medium"><span class="gradient-heading"> Clinicians</span>
                </h1>
                <h4 class="font-bold h4-alt">Empowering healthcare providers to <br />
                    <span class="text-primary"> Expand Their Reach </span>
                </h4>
            </div>
        </section>
        <!--====|| Hero Section End ||====-->

        <!--====|| Service Section Start ||====-->
        <section class="services relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 -left-[122px] -top-20" src="assets/img/frame/gear-1.svg" alt="Frame" />
                <img class="absolute -z-10 -top-20 left-3/4" src="assets/img/frame/star-1.svg" alt="Frame" />
                <img class="absolute -z-10 top-3/4 left-7 w-8" src="assets/img/frame/clip-1.svg" alt="Frame" />
                <img class="absolute -z-10 top-1/2 right-10 w-8" src="assets/img/frame/gear-2.svg" alt="Frame" />
                <img class="absolute -z-10 top-3/4 left-2/3 w-[137px]" src="assets/img/frame/blink-1.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center">
                    <span class="text-primary">Key Features</span> for <br />
                    Clinicians
                </h1>
                <div class="services__cards grid lg:grid-cols-3 gap-x-5 md:gap-y-16 gap-y-10">
                    <div class="services__card">
                        <h5 class="services__card__heading bg-green">Customizable Scheduling Tools</h5>
                        <p>Manage your availability with ease and ensure a seamless
                            booking experience for your patients.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card">
                        <h5 class="services__card__heading bg-yellow">Seamless Experience</h5>
                        <p>Offer secure video consultations, messaging, and prescription
                            management, all within a HIPAA-compliant environment.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card">
                        <h5 class="services__card__heading bg-cyan">Patient Management Dashboard</h5>
                        <p>Track patient records, medical history, and lab results—all in
                            one place.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card">
                        <h5 class="services__card__heading bg-light-purple">Prescription Fulfillment</h5>
                        <p>Simplify the e-prescription process and connect patients with
                            their preferred pharmacies.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card">
                        <h5 class="services__card__heading bg-aqua-1">Data-Driven Insights</h5>
                        <p>Gain actionable insights to optimize operations and enhance
                            patient outcomes.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                </div>
            </div>
        </section>
        <!--====|| Service Section End ||====-->

        <!--====|| How It Works Section Start ||====-->
        <section class="work lg:pt-[100px] md:pt-[80px] pt-[50px] relative z-10" relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 lg:-right-[150px] -right-unset lg:left-[unset] -left-[120px] lg:-top-20 top-0 lg:w-[340px] md:w-[200px] rotate-[130deg]"
                    src="assets/img/frame/dice-1.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center">How it <span class="text-primary">Works</span>
                </h1>
            </div>
            <div class="work__cards">
                <div class="container mx-auto relative z-10">
                    <!--Frame Integration Start-->
                    <div>
                        <img class="absolute -z-10 -left-16 -top-16 w-[138px]" src="assets/img/frame/star-1.svg"
                            alt="Frame" />
                        <img class="absolute -z-10 -right-24 -bottom-4 w-[130px]" src="assets/img/frame/blink-1.svg"
                            alt="Frame" />
                        <img class="absolute -z-10 left-1/4 -bottom-16 w-[35px] rotate-45" src="assets/img/frame/d-1.svg"
                            alt="Frame" />
                    </div>
                    <!--Frame Integration End-->
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 md:gap-[unset] gap-7  mt-20">
                        <div class="work__card">
                            <img class="work__frame" src="assets/img/frame.png" alt="Frame" />
                            <div class="work__content">
                                <span class="work__number bg-light-purple">1</span>
                                <h4 class="work__heading">PATIENT REGISTERS</h4>
                                <img class="work__img w-[100px]" src="assets/img/services/service-1.png"
                                    alt="PATIENT REGISTER" />
                            </div>
                        </div>
                        <!--Work Card End-->

                        <div class="work__card work__card--alt">
                            <img class="work__frame" src="assets/img/frame.png" alt="Frame" />
                            <div class="work__content">
                                <span class="work__number work__number--alt bg-aqua-1 -bottom-2">2</span>
                                <h4 class="work__heading">CLINICIAN REVIEWS PATIENT REQUEST</h4>
                                <img class="work__img w-[100px]" src="assets/img/services/service-2.png"
                                    alt="PATIENT REGISTER" />
                            </div>
                        </div>
                        <!--Work Card End-->

                        <div class="work__card">
                            <img class="work__frame" src="assets/img/frame.png" alt="Frame" />
                            <div class="work__content">
                                <span class="work__number bg-yellow">3</span>
                                <h4 class="work__heading">CLINICIAN SCHEDULES A VIRTUAL CONSULT VISIT</h4>
                                <img class="work__img" src="assets/img/consult.png"
                                    alt="CLINICIAN SCHEDULES A VIRTUAL CONSULT VISIT" />
                            </div>
                        </div>
                        <!--Work Card End-->

                        <div class="work__card work__card--alt">
                            <img class="work__frame" src="assets/img/frame.png" alt="Frame" />
                            <div class="work__content">
                                <span class="work__number work__number--alt bg-green -bottom-6">4</span>
                                <h4 class="work__heading">Happy <br />
                                    Patient</h4>
                                <img class="work__img" src="assets/img/happy-patient.png" alt="Happy Patient" />
                            </div>
                        </div>
                        <!--Work Card End-->
                    </div>
                </div>
            </div>
        </section>
        <!--====|| How It Works Section End ||====-->

        <!--====|| Docmedilink Ideology Section Start ||====-->
        <section class="ideology lg:pt-[100px] relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 -left-[240px] top-0 w-[340px] rotate-180" src="assets/img/frame/dice-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 -right-4 top-[100px] w-[42px] rotate-180" src="assets/img/frame/gear-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 right-4 bottom-[50px] w-[42px] rotate-45" src="assets/img/frame/d-1.svg"
                    alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center">
                    <span class="text-primary">Docmedilink</span> is Ideal For
                </h1>
                <div class="serve-cards grid md:grid-cols-3 md:text-start text-center lg:gap-20 md:gap-10 gap-5 mt-16">
                    <div class="serve-card">
                        <i class="icon-graph text-[130px]"></i>
                        <h4 class="font-bold mt-2 text-[30px]">Clinics Seeking Growth</h4>
                        <p class="text-lg">Connect with more patients and expand your presence beyond
                            physical boundaries.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card">
                        <i class="icon-suitcase-2 text-[130px]"></i>
                        <h4 class="font-bold mt-2 text-[30px]">Busy Healthcare Providers</h4>
                        <p class="text-lg">Simplify your workflow with tools designed to save time and
                            improve efficiency.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card">
                        <i class="icon-user text-[130px]"></i>
                        <h4 class="font-bold mt-2 text-[30px]">Practices Focused on Patient-Centric Care</h4>
                        <p class="text-lg">Enhance patient satisfaction with modern, accessible, and
                            secure healthcare solutions.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                </div>
            </div>
        </section>
        <!--====|| Docmedilink Ideology Section End ||====-->

        <!--====|| Community Section Start ||====-->
        <section class="community lg:pt-[180px] md:pt-[100px] pt-[80px] relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 left-20 top-1/2 w-[42px]" src="assets/img/frame/gear-1.svg" alt="Frame" />
                <img class="absolute -z-10 left-1/3 top-[100px] w-[42px]" src="assets/img/frame/blink-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 -right-8 top-2/3" src="assets/img/frame/hash-1.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <div
                    class="bg-[#F7F4F4] lg:py-20 md:py-10 py-7  lg:px-16 md:px-8 px-5 text-center max-w-[930px] mx-auto rounded-[10px] relative -rotate-[5deg]">
                    <img class="absolute top-[-40px] left-1/2 -translate-x-1/2" src="assets/img/pin.svg"
                        alt="Pin" />
                    <h3 class="font-bold">Join the
                        <span class="text-primary">Docmedilink</span> Community
                    </h3>
                    <p class="text-lg mt-3">Take your clinic to the next level with a platform designed to
                        grow with you. Docmedilink ensures you have the tools to deliver
                        outstanding care, manage your operations efficiently, and reach
                        new patients effectively. </p>
                </div>
            </div>
        </section>
        <!--====|| Community Section End ||====-->

        <!--====|| Contact Section Start ||====-->
        <section class="contact lg:pt-[180px] md:pt-[100px] pt-[80px] lg:pb-[150px] md:pb-[80px] pb-[50px] relative z-10">
            <div class="container mx-auto grid md:grid-cols-2 gird-cols-1">
                <div class="lg:pe-24 pe-0 relative">
                    <!--Frame Integration Start-->
                    <div>
                        <img class="absolute -z-10 -left-20 top-12 w-[90px]" src="assets/img/frame/clip-1.svg"
                            alt="Frame" />
                        <img class="absolute -z-10 right-28 bottom-1/3 w-[20px]" src="assets/img/frame/d-1.svg"
                            alt="Frame" />
                        <img class="absolute -z-10 left-1/2 bottom-0 w-[100px]" src="assets/img/frame/blink-1.svg"
                            alt="Frame" />
                    </div>
                    <!--Frame Integration End-->
                    <h2 class="font-bold md:text-start text-center">Get Started <span class="text-primary block">Today
                        </span></h2>
                    <p class="text-lg mt-7 md:text-start text-center">Ready to transform your clinic’s operations and
                        patient care?
                        Join the Docmedilink network and discover the difference our
                        platform can make. </p>
                    <img class="w-2/3 relative -z-10 md:block hidden" src="assets/img/contact-2.png" alt="Contact" />
                </div>
                <div class="relative z-10" id="contact">
                    <!--Frame Integration Start-->
                    <div>
                        <img class="absolute -z-10 -right-12 top-1/3 w-[60px]" src="assets/img/frame/clip-2.svg"
                            alt="Frame" />
                    </div>
                    <!--Frame Integration End-->
                    <div class="input__wrapper lg:p-7 p-4 md:mt-0 mt-5">
                        <form id="clinicForm">
                            <div class="md:flex lg:gap-5 gap-3">
                                <div class="input__item">
                                    <label class="input__label" for="clinic_name">Clinic Name
                                        <span class="font-normal">(If applicable)</span>
                                    </label>
                                    <input class="input__box" id="clinic_name" type="text" />
                                </div>
                                <div class="input__item">
                                    <label class="input__label" for="contact_name">
                                        Contact Name
                                        <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="contact_name" type="text" />
                                </div>
                            </div>
                            <div class="md:flex lg:gap-5 gap-3">
                                <div class="input__item">
                                    <label class="input__label" for="contact_email">
                                        Email Address
                                        <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="contact_email" type="text" />
                                </div>
                                <div class="input__item">
                                    <label class="input__label" for="contact_phone">
                                        Phone Number
                                        <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="contact_phone" type="text" maxlength="12" />
                                </div>
                            </div>

                            <div class="input__item">
                                <label class="input__label" for="specialization">Specialization</label>
                                <div class="input__select">
                                    <select class="input__box" id="specialization">
                                        <option disabled selected>Select an option</option>
                                        <option value="Psychiatry">Psychiatry</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Therapy">Therapy</option>
                                        <option value="Dermatology">Dermatology</option>
                                    </select>
                                    <i class="icon-arrow-down input__select-icon"></i>
                                </div>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="practice_size">Practice Size</label>
                                <div class="input__select">
                                    <select class="input__box" id="practice_size">
                                        <option disabled selected>Select an option</option>
                                        <option value="Solo Practitioner">Solo Practitioner</option>
                                        <option value="Small Group">Small Group</option>
                                        <option value="Large Clinic">Large Clinic</option>
                                    </select>
                                    <i class="icon-arrow-down input__select-icon"></i>
                                </div>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="telehealth">Tell us about your current telehealth
                                    needs</label>
                                <textarea class="input__box" id="telehealth" rows="4"></textarea>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="time">Preferred Demo Time</label>
                                <input type="datetime-local" class="input__box" id="time" type="text" />
                            </div>

                            <div class="input__item">
                                <label class="input__label" for="about_us">How did you hear about us?</label>
                                <div class="input__select">
                                    <select class="input__box" id="about_us">
                                        <option selected disabled>Select an option</option>
                                        <option value="Facebook Ad/Post">Facebook Ad/Post</option>
                                        <option value="Instagram Ad/Post">Instagram Ad/Post</option>
                                        <option value="Google Search">Google Search</option>
                                        <option value="Newspaper Ad">Newspaper Ad</option>
                                        <option value="Television Ad">Television Ad</option>
                                        <option value="Word of Mouth (Through a Friend)">Word of Mouth (Through a Friend)
                                        </option>
                                    </select>
                                    <i class="icon-arrow-down input__select-icon"></i>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <button name="clinicians" value="clinicians" class="dml-btn dml-btn__primary"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>
        <!--====|| Contact Section End ||====-->
    </main>
    <!--====||  Main Section End ||====-->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contact_phone').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
            $('#clinicForm').on('submit', function(e) {
                e.preventDefault();

                // Remove previous error messages
                $('.text-danger').remove();

                var $submitButton = $('button[type="submit"]');
                $submitButton.prop('disabled', true).text('Submitting...');

                var contactName = $('#contact_name').val();
                var contactEmail = $('#contact_email').val();
                var contactPhone = $('#contact_phone').val();

                var isValid = true;

                // Validate Contact Name (Only letters and spaces)
                const namePattern = /^[A-Za-z\s]+$/;
                if (!contactName || !namePattern.test(contactName)) {
                    $('#contact_name').after(
                        '<p class="text-danger pt-1">Please enter a valid contact name (letters and spaces only).</p>'
                    );
                    isValid = false;
                }

                // Validate Contact Email (Simple email pattern)
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!contactEmail || !emailPattern.test(contactEmail)) {
                    $('#contact_email').after(
                        '<p class="text-danger pt-1">Please enter a valid email address.</p>'
                    );
                    isValid = false;
                }

                // Validate Contact Phone (10-12 digits, numbers only)
                const phonePattern = /^[0-9]{10,12}$/;
                if (!contactPhone || !phonePattern.test(contactPhone)) {
                    $('#contact_phone').after(
                        '<p class="text-danger pt-1">Please enter a valid phone number (10 to 12 digits only).</p>'
                    );
                    isValid = false;
                }

                // If validation fails, stop submission
                if (!isValid) {
                    $submitButton.prop('disabled', false).text('Submit');
                    return;
                }

                var formData = {
                    clinic_name: $('#clinic_name').val(),
                    contact_name: contactName,
                    contact_email: contactEmail,
                    contact_phone: contactPhone,
                    specialization: $('#specialization').val(),
                    practice_size: $('#practice_size').val(),
                    telehealth: $('#telehealth').val(),
                    preferred_demo_time: $('#time').val(),
                    about_us: $('#about_us').val(),
                    submitButton: 'clinicians'
                };

                // Send the form data using Axios
                axios.post("{{ url('clinicians-form-submissions') }}", formData)
                    .then(function(response) {
                        $('#contact').append(`
                            <div class="form-modal hidden lg:p-20 md:p-10 p-5 md:mt-0 mt-5 flex flex-col items-center text-center h-full absolute top-0 right-0 bottom-0 left-0">
                                <div class="form-modal--content">
                                    <div class="success-animation">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold mt-5">Thank You</h3>
                                    <p class="mt-2 text-lg">Thank you for submitting your information! We've emailed you the details, and our team will get in touch with you shortly.</p>
                                </div>
                            </div>
                        `);

                        $('.form-modal').removeClass('hidden').fadeIn();

                        setTimeout(function() {
                            $('.form-modal').fadeOut(function() {
                                $(this).remove();
                            });
                        }, 3000);

                        $('#clinicForm')[0].reset();
                    })
                    .catch(function(error) {
                        toastr.error('There was an error with your submission.');
                    })
                    .finally(function() {
                        $submitButton.prop('disabled', false).text('Submit');
                    });
            });
        });
    </script>
@endsection
