@extends('layouts/frontend_main')

@section('content')
    <!--====||  Main Section Start ||====-->
    <main class="lg:pt-[130px] pt-[50px] overflow-hidden">
        <!--====|| Hero Section Start ||====-->

        @if ($page_name == 'frontend_home')
            @include('../frontend/inc/home_banner')
        @endif
        <!--====|| Hero Section End ||====-->

        <!--====|| Service Section Start ||====-->
        <section class="services lg:pt-[150px] pt-0 relative z-10" id="our-services">
            <!--Frame Integration Start-->
            <div class="frame-none">
                <img class="absolute -z-10 -left-[122px]" src="assets/img/frame/gear-1.svg" alt="Frame" />
                <img class="absolute -z-10 right-1/3" src="assets/img/frame/star-1.svg" alt="Frame" />
                <img class="absolute -z-10 -bottom-[200px] -right-[140px]" src="assets/img/frame/dice-1.svg"
                    alt="Frame" />
            </div>
            <!--Frame Integration End-->

            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center" data-aos="fade-up" data-aos-duration="500">Our <span
                        class="text-primary">Services</span>
                </h1>
                <div class="services__cards grid lg:grid-cols-3 gap-x-5 md:gap-y-16 gap-y-10">
                    <div class="services__card" data-aos="zoom-in" data-aos-duration="700">
                        <h5 class="services__card__heading bg-green">Virtual Consultations</h5>
                        <p>Offer seamless, secure, and HIPAA-compliant video and audio
                            consultations, enabling healthcare providers to deliver
                            high-quality care from anywhere.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card" data-aos="zoom-in" data-aos-duration="700">
                        <h5 class="services__card__heading bg-yellow">E-Prescription & Lab Integration</h5>
                        <p>Simplify the prescription process with our e-prescription
                            functionality, integrated directly into the patient care
                            workflow.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card" data-aos="zoom-in" data-aos-duration="700">
                        <h5 class="services__card__heading bg-cyan">Data Security & Analysis</h5>
                        <p>Leverage advanced analytics to gain insights into patient care
                            trends and operational efficiency. Our solutions prioritize data
                            protection through robust encryption ...
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card" data-aos="zoom-in" data-aos-duration="900">
                        <h5 class="services__card__heading bg-light-purple">Customize Workflows</h5>
                        <p>From managing patient intake forms to automating routine tasks,
                            our solutions are tailored to fit the unique needs of your
                            healthcare business.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card" data-aos="zoom-in" data-aos-duration="900">
                        <h5 class="services__card__heading bg-aqua-1">Patient Engagement Tools</h5>
                        <p>Engage patients with reminders, educational materials, and
                            self-service options, improving satisfaction and retention while
                            reducing administrative burden.
                        </p>
                    </div>
                    <!-- Single Service Card End -->
                    <div class="services__card flex justify-center items-center border-none !pt-5" data-aos="zoom-in"
                        data-aos-duration="500">
                        <a href="{{ url('our-services') }}" class="dml-btn dml-btn__outline">Learn More</a>
                    </div>
                    <!-- Single Service Card End -->
                </div>
            </div>
        </section>
        <!--====|| Service Section End ||====-->

        <!--====|| Who We Serve Section Start ||====-->
        <section class="serve lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 -right-[100px] -top-24 w-[200px] md:hidden block"
                    src="assets/img/frame/dice-1.svg" alt="Frame" />
                <img class="absolute -z-10 left-5 top-1/2" src="assets/img/frame/star-1.svg" alt="Frame" />
                <img class="absolute -z-10 left-3/4 top-20" src="assets/img/frame/gear-2.svg" alt="Frame" />
                <img class="absolute -z-10 md:top-1/2 top-[55%] right-5" src="assets/img/frame/blink-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 -bottom-10 md:left-1/4 left-0" src="assets/img/frame/blink-1.svg"
                    alt="Frame" />
            </div>
            <!--Frame Integration End-->

            <div class="container mx-auto relative z-10">
                <!--Frame Integration Start-->
                <div>
                    <img class="absolute -z-10 md:-bottom-8 -bottom-2 right-16" src="assets/img/frame/d-1.svg"
                        alt="Frame" />
                    <img class="absolute -z-10 md:-bottom-28 -bottom-20 right-0" src="assets/img/frame/diamond.svg"
                        alt="Frame" />
                </div>
                <!--Frame Integration End-->
                <h1 class="font-bold md:text-start text-center" data-aos="fade-up" data-aos-duration="500">Who <span
                        class="text-primary">We Serve</span>
                </h1>
                <div class="serve-cards grid md:grid-cols-2 grid-cols-1 md:gap-20 sm:gap-10 gap-5 mt-16">
                    <div class="serve-card md:text-start text-center" data-aos="fade-up-right" data-aos-duration="700">
                        <i class="icon-stethoscope text-[130px]"></i>
                        <h3 class="font-bold mt-4" data-aos="fade-up-right" data-aos-duration="900">Healthcare Providers
                        </h3>
                        <p class="serve__desc mt-2" data-aos="fade-up-right" data-aos-duration="1000">Expand your practice
                            with our cutting-edge telehealth platform,
                            specifically designed to cater to the diverse needs of patients.
                            Whether it's weight management, urgent care, or specialized
                            programs like hair loss treatment, sexual health support, and
                            brain health . . .
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center" data-aos="fade-up-left" data-aos-duration="700">
                        <i class="icon-suitcase text-[130px]"></i>
                        <h3 class="font-bold mt-4" data-aos="fade-up-left" data-aos-duration="900">Healthcare Entrepreneurs
                        </h3>
                        <p class="serve__desc mt-2" data-aos="fade-up-left" data-aos-duration="1000">Are you ready to
                            venture into the thriving world of virtual
                            healthcare? Our turnkey telehealth solutions make it easy for
                            entrepreneurs to establish robust virtual services with minimal
                            hassle. From launching innovative programs like weight loss
                            management, testosterone . . .
                        </p>
                    </div>
                    <!-- Serve Card End -->
                </div>
                <div class="flex justify-center mt-8">
                    <!-- <a href="who-we-serve.html"
                                           ><img
                                            class="md:max-w-[385px] sm:max-w-[250px] max-w-[200px]"
                                            src="assets/img/lg-arrow-right.svg"
                                            alt="Arrow"
                                          /></a> -->
                    <a href="{{ url('who-we-serve') }}" class="dml-btn dml-btn__outline" data-aos="zoom-in"
                        data-aos-duration="1000">Learn More</a>
                </div>
            </div>
        </section>
        <!--====|| Who We Serve Section End ||====-->

        <!--====|| Features Section Start ||====-->
        <section class="features lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10">
            <!--Frame Integration Start-->
            <div class="frame-none">
                <img class="absolute -z-10 top-[180px] -left-[122px]" src="assets/img/frame/gear-1.svg" alt="Frame" />
                <img class="absolute -z-10 top-2/3 left-5" src="assets/img/frame/star-1.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center" data-aos="fade-up" data-aos-duration="500">Telehealth
                    <span class="text-primary">Features</span>
                </h1>
                <div>
                    <div class="features__img mt-[100px] md:block hidden">
                        <img class="w-full" src="assets/img/features.svg" alt="Features" data-aos="zoom-in"
                            data-aos-duration="1500" />
                    </div>
                </div>

                <div class="serve-cards grid md:grid-cols-2 grid-cols-1 md:gap-20 sm:gap-10 gap-7 mt-16 md:hidden">
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-video-cal text-[60px]"></i>
                        <p class="serve__desc mt-2">Connect directly with patients through secure, scheduled video
                            or audio consultations.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-calendar text-[60px]"></i>
                        <p class="serve__desc mt-2">Leverage integrated lab solutions to seamlessly schedule tests,
                            review results, and prescribe treatments in one platform.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-certification text-[60px]"></i>
                        <p class="serve__desc mt-2">Optimize medication management with our SureScripts-certified
                            prescription platform.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-paint-board text-[60px]"></i>
                        <p class="serve__desc mt-2">Tailor our white-label solutions to align with your brand’s
                            unique needs and identity.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-map text-[60px]"></i>
                        <p class="serve__desc mt-2">Access a nationwide provider network, offering consistent,
                            top-tier healthcare services across all 50 states.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                    <div class="serve-card md:text-start text-center">
                        <i class="icon-gear-round text-[60px]"></i>
                        <p class="serve__desc mt-2">Simplify patient interactions with detailed and convenient
                            asynchronous questionnaires.
                        </p>
                    </div>
                    <!-- Serve Card End -->
                </div>
            </div>
        </section>
        <!--====|| Features Section End ||====-->

        <!--====|| CTA Section Start ||====-->
        <section class="cta lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10" id="clinicians">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 md:-top-5 top-5 md:left-1/4 left-2" src="assets/img/frame/blink-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 md:top-28 top-32 md:left-10 -left-6" src="assets/img/frame/clip-1.svg"
                    alt="Frame" />
                <img class="absolute -z-10 -top-5 -right-6 md:w-[122px] w-[62px]" src="assets/img/frame/hash-1.svg"
                    alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto text-center">
                <h1 class="font-medium" data-aos="fade-up" data-aos-duration="500">Empowering <br />
                    Healthcare Providers <br />
                    to
                    <span class="text-primary">Expand Their Reach</span>
                </h1>
                <p class="text-lg mt-5" data-aos="fade-up" data-aos-duration="700">At Docmedilink, we understand the
                    challenges clinicians face in
                    today’s dynamic healthcare environment. Our platform is crafted to
                    empower clinics of all sizes, enabling them to connect with more
                    patients, enhance service delivery, and streamline their daily
                    operations. </p>
                <a href="/clinicians" class="dml-btn dml-btn__outline mt-10" data-aos="zoom-in"
                    data-aos-duration="900">Learn More</a>
            </div>
        </section>
        <!--====|| CTA Section End ||====-->

        <!--====|| Why Choose Section Start ||====-->
        <section class="why-choose lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 top-0 md:right-0 -right-2 md:w-[168px] w-[80px]"
                    src="assets/img/frame/blink-1.svg" alt="Frame" />
                <img class="absolute -z-10 md:-bottom-[170px] bottom-[200px] md:-left-[140px] -left-[80px] rotate-180 md:w-[340px] w-[180px]"
                    src="assets/img/frame/dice-1.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto">
                <h1 class="font-bold md:text-start text-center" data-aos="fade-up" data-aos-duration="500">Why Choose
                    <span class="text-primary">Docmedilink?</span>
                </h1>
                <div
                    class="why-choose__cards grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 md:gap-20 gap-10 md:mt-16 sm:mt-12 mt-8 md:text-start text-center">
                    <div class="why-choose__card">
                        <i class="icon-idea md:text-[120px] sm:text-[80px] text-[60px] inline-block" data-aos="fade-up"
                            data-aos-duration="700"></i>
                        <h4 class="font-bold mt-2" data-aos="fade-up" data-aos-duration="700">Innovation
                        </h4>
                        <p class="why-choose__desc mt-2" data-aos="fade-up" data-aos-duration="900">At Docmedilink, we
                            leverage cutting-edge technologies to design
                            custom-built software tailored to meet your specific healthcare
                            needs...
                        </p>
                    </div>
                    <!-- why-choose Card End -->
                    <div class="why-choose__card">
                        <i class="icon-mobile md:text-[120px] sm:text-[80px] text-[60px] inline-block" data-aos="fade-up"
                            data-aos-duration="700"></i>
                        <h4 class="font-bold mt-2" data-aos="fade-up" data-aos-duration="900">Usability
                        </h4>
                        <p class="why-choose__desc mt-2" data-aos="fade-up" data-aos-duration="1100">Ease of use is at
                            the core of our platform design. Our
                            intuitive interfaces minimize the learning curve for healthcare
                            providers making it easy for...
                        </p>
                    </div>
                    <!-- why-choose Card End -->
                    <div class="why-choose__card">
                        <i class="icon-lock md:text-[120px] sm:text-[80px] text-[60px] inline-block" data-aos="fade-up"
                            data-aos-duration="700"></i>
                        <h4 class="font-bold mt-2" data-aos="fade-up" data-aos-duration="900">Security
                        </h4>
                        <p class="why-choose__desc mt-2" data-aos="fade-up" data-aos-duration="1100">We understand the
                            critical importance of safeguarding sensitive
                            patient data. That’s why our solutions are engineered with
                            robust security measures...
                        </p>
                    </div>
                    <!-- why-choose Card End -->
                    <div class="why-choose__card">
                        <i class="icon-handshake md:text-[120px] sm:text-[80px] text-[60px] inline-block"
                            data-aos="fade-up" data-aos-duration="700"></i>
                        <h4 class="font-bold mt-2" data-aos="fade-up" data-aos-duration="900">Reliability
                        </h4>
                        <p class="why-choose__desc mt-2" data-aos="fade-up" data-aos-duration="1100">Our platforms are
                            built to provide dependable and scalable
                            solutions for your healthcare needs. Designed with redundancy...
                        </p>
                    </div>
                    <!-- why-choose Card End -->
                </div>
                <div class="flex justify-center mt-8">
                    <!-- <a href="who-we-serve.html"
                                                            ><img
                                                                class="md:max-w-[385px] sm:max-w-[250px] max-w-[200px]"
                                                                src="assets/img/lg-arrow-right.svg"
                                                                alt="Arrow"
                                                        /></a> -->
                    <a href="{{ url('why-choose-docmedilink') }}" class="dml-btn dml-btn__outline" data-aos="zoom-in"
                        data-aos-duration="1500">Learn More</a>
                </div>
            </div>
        </section>
        <!--====|| Why Choose Section End ||====-->

        <!--====|| About Us Section Start ||====-->
        <section class="about lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10" id="about-us">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 md:top-10 -top-[500px] md:right-12 right-2" src="assets/img/frame/clip-2.svg"
                    alt="Frame" />
                <img class="absolute -z-10 md:top-[200px] -top-[250px] md:right-0 -right-10"
                    src="assets/img/frame/diamond.svg" alt="Frame" />
            </div>
            <!--Frame Integration End-->
            <div class="container mx-auto text-center">
                <img class="mx-auto" src="{{ URL::asset('assets') }}/img/about-us.png" alt="About Us" data-aos="fade-up"
                    data-aos-duration="500" />
                <h1 class="font-bold my-5 text-center" data-aos="fade-up" data-aos-duration="700">
                    About <span class="text-primary">Us</span>
                </h1>
                <p class="md:text-lg text-base" data-aos="fade-up" data-aos-duration="900">At Docmedilink, we prioritize
                    innovation, empathy, and excellence
                    to transform healthcare delivery. By staying at the forefront of
                    technology, we develop solutions that enhance efficiency, improve
                    patient care, and meet the ever-evolving needs of the industry.
                    Guided by compassion, we create tools that simplify processes and
                    foster a human connection, ensuring accessible and patient-focused
                    healthcare. Our commitment to excellence drives us to deliver
                    tailored, reliable, and affordable solutions that empower clients to
                    achieve their goals while setting new standards for quality and
                    impact in healthcare.</p>
            </div>
        </section>
        <!--====|| About Us Section End ||====-->

        <!--====|| FAQ Section Start ||====-->
        <section class="faq lg:pt-[150px] md:pt-[80px] pt-[50px] relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 top-0 -right-[100px]" src="assets/img/frame/dice-1.svg" alt="Frame">
            </div>
            <!--Frame Integration End-->

            <div class="container mx-auto">
                <h1 class="font-bold mb-7 md:text-start text-center aos-init" data-aos="fade-up" data-aos-duration="500">
                    FAQ
                </h1>
                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="700">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-1">
                        <h3>1. How easy is it to use your solutions?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-1">
                        <p class="text-lg">
                            Our software is designed with user-friendliness in mind. We
                            offer intuitive interfaces and comprehensive training materials
                            to ensure a smooth onboarding process for your staff. Video
                            tutorials are included in the software
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="800">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-2">
                        <h3>2. What kind of support do you offer?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-2">
                        <p class="text-lg">We offer comprehensive customer support over phone and e-mail
                            to ensure you receive the assistance you need. Our team is
                            available to answer questions, troubleshoot issues, and provide
                            ongoing guidance..</p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="900">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-3">
                        <h3>3. How can I learn more about a specific software solution?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-3">
                        <p class="text-lg">
                            We encourage you to contact us directly for detailed information
                            on software functionality, and to discuss your specific needs
                            and request a personalized demo.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1000">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-4">
                        <h3>4. Do you require long-term contracts?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-4">
                        <p class="text-lg"> No.</p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1100">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-5">
                        <h3>5. Does Docmedilink support ePrescribing?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-5">
                        <p class="text-lg">
                            Yes, Docmedilink supports ePrescribing. Our software includes a
                            secure and efficient ePrescribing feature that allows healthcare
                            providers to electronically transmit prescriptions directly to
                            pharmacies. This functionality is designed to improve the
                            accuracy of prescriptions, reduce errors, and enhance overall
                            patient safety. It integrates seamlessly with our other
                            healthcare management tools, making the prescription process
                            faster and more reliable.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1200">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-6">
                        <h3>6. Is your platform HIPPA Compliant?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-6">
                        <p class="text-lg">
                            Yes, our platform is fully HIPAA compliant, ensuring the
                            protection and privacy of patient health information.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1300">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-7">
                        <h3>7. What devices are compatible with your platform?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-7">
                        <p class="text-lg">
                            Our platform is designed to be user-friendly and accessible
                            across various devices, including desktops, laptops, tablets,
                            and smartphones.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1400">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-8">
                        <h3>8. Is my information safe and secure?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-8">
                        <p class="text-lg">
                            Docmedilink adheres to the national patient information security
                            standards found in both HIPAA and HITECH regulations, including
                            sharing information with any accepted insurance providers. Your
                            photos, personal and medical information, video chat, or
                            diagnosis will never be made public.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1500">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-9">
                        <h3>9. What can I expect to receive from my online visit?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-9">
                        <p class="text-lg">
                            Your board-certified doctor will review your case and then
                            provide you with a diagnosis and personalized treatment plan.
                            Once completed, you will be notified by email or text message
                            that your plan is available. You may access it at any time
                            through our secure portal. Additionally, you may print your
                            records or fax them to your primary care physician through our
                            portal.
                        </p>
                        <p class="text-lg mt-3">
                            Prescriptions are sent to the pharmacy of your choice
                            automatically. Your doctor will ask you for any additional
                            information (or new photos) if needed.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->

                <div class="accordion aos-init" data-aos="fade-up" data-aos-duration="1600">
                    <button class="question-btn font-bold md:py-7 py-4 w-full flex justify-between items-center text-start"
                        data-toggle="faq-10">
                        <h3>10. Will Docmedilink sell personal data?</h3>
                        <i
                            class="icon-arrow-down accordion__icon rotate-0 inline-block transition-transform duration-300 text-3xl"></i>
                    </button>
                    <div class="answer hidden md:pb-7 pb-3" id="faq-10">
                        <p class="text-lg">
                            No, per our terms of service Docmedilink will not sell your
                            personal data.
                        </p>
                    </div>
                </div>
                <!--Accordion Item End-->
            </div>
        </section>
        <!--====|| FAQ Section End ||====-->

        <!--====|| Contact Section Start ||====-->
        <section class="contact lg:py-[150px] md:py-[80px] py-[50px]" id="contact-us">
            <div class="container mx-auto grid md:grid-cols-2 gird-cols-1">
                <div class="lg:pe-24 md:pe-10 pe-0">
                    <h2 class="font-bold md:text-start text-center" data-aos="fade-up" data-aos-duration="500">Your
                        Health, <br />
                        Your Way <span class="text-primary block">Get in Touch </span></h2>
                    <p class="text-lg lg:mt-7 mt-3 md:text-start text-center" data-aos="fade-up" data-aos-duration="700">
                        We’re here to help you shape the future of healthcare. Reach out
                        and let’s create something extraordinary together!</p>
                    <div class="text-center lg:mt-12 md:mt-8 mt-0 md:block hidden" data-aos="fade-up"
                        data-aos-duration="900">
                        <img class="max-w-[400px]" src="assets/img/contact.png" alt="Contact" />
                    </div>
                </div>
                <div class="relative" id="contactFormWrapper">
                    <div class="input__wrapper lg:p-7 p-4 md:mt-0 mt-5" data-aos="fade-left" data-aos-duration="800">
                        <form id="contactForm">
                            <div class="input__item">
                                <label class="input__label" for="company_name">Company Name</label>
                                <input class="input__box" id="company_name" type="text" />
                            </div>
                            <div class="md:flex block lg:gap-5 gap-3">
                                <div class="input__item">
                                    <label class="input__label" for="first_name">
                                        First Name <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="first_name" type="text" />
                                </div>
                                <div class="input__item">
                                    <label class="input__label" for="last_name">Last Name</label>
                                    <input class="input__box" id="last_name" type="text" />
                                </div>
                            </div>
                            <div class="md:flex block lg:gap-5 gap-3">
                                <div class="input__item">
                                    <label class="input__label" for="email">
                                        Email Address <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="email" type="email" />
                                </div>
                                <div class="input__item">
                                    <label class="input__label" for="phone">
                                        Phone Number <span
                                            class="w-2 h-2 bg-danger inline-block rounded-full relative -top-[2px]"></span>
                                    </label>
                                    <input class="input__box" id="phone" type="text" maxlength="16"
                                        onchange="formatPhoneOnChange(this)" />
                                </div>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="services">What services are you interested in?</label>
                                <select class="input__box" id="services">
                                    <option disabled selected>Select an option</option>
                                    <option value="Telehealth Platform">Telehealth Platform</option>
                                    <option value="Physician Services">Physician Services</option>
                                    <option value="Pharmacy Services">Pharmacy Services</option>
                                    <option value="Partnership Opportunities">Partnership Opportunities</option>
                                </select>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="about">Please share a little about yourself</label>
                                <select class="input__box" id="about">
                                    <option disabled selected>Select an option</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Provider">Provider</option>
                                    <option value="Partner">Partner</option>
                                </select>
                            </div>
                            <div class="input__item">
                                <label class="input__label" for="details">Do you want to share more details with
                                    us?</label>
                                <textarea class="input__box" id="details" rows="4"></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button name="contact" value="contact" class="dml-btn dml-btn__primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!--====|| Contact Section End ||====-->
    </main>
    <!--====||  Main Section End ||====-->

    <!--====||  Footer Section Start ||====-->
@endsection
@section('scripts')
    <script>
        function formatPhoneOnChange(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            // Limit to 12 digits
            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            // Format the number as (XXX) XXX-XXXX
            if (value.length > 3 && value.length <= 6) {
                value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
            } else if (value.length > 6) {
                value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
            }

            input.value = value;
        }
        $(document).ready(function() {


            $('#phone').on('input', function() {
                formatPhoneOnChange(this);
            });

            $('#contactForm').on('submit', async function(event) {
                event.preventDefault();

                const $submitButton = $('button[name="contact"]');
                $submitButton.prop('disabled', true).text('Submitting...');

                // Remove previous error messages
                $('.text-danger').remove();

                // Get form values
                const firstName = $('#first_name').val();
                const email = $('#email').val();
                const phone = $('#phone').val();

                let isValid = true; // Flag to track validation status

                // First Name Validation
                const namePattern = /^[A-Za-z\s]+$/; // Allows alphabets and spaces
                if (!firstName || !namePattern.test(firstName)) {
                    $('#first_name').after(
                        '<p class="text-danger pt-1">First name is required.</p>'
                    );
                    isValid = false;
                }

                // Email Validation
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email pattern
                if (!email || !emailPattern.test(email)) {
                    $('#email').after(
                        '<p class="text-danger pt-1">Valid email is required.</p>');
                    isValid = false;
                }

                const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/; // Updated phone pattern
                // Phone Validation
                if (!phone) {
                    $('#phone').after('<p class="text-danger pt-1">Phone is required.</p>');
                    isValid = false;
                } else if (!phonePattern.test(phone)) {
                    $('#phone').after(
                        '<p class="text-danger pt-1">Valid phone format is required (e.g., (123) 456-7890).</p>');
                    isValid = false;
                }

                if (!isValid) {
                    // Re-enable submit button in case of validation failure
                    $submitButton.prop('disabled', false).text('Submit');
                    return;
                }

                // Collect other form data
                const formData = {
                    company_name: $('#company_name').val(),
                    first_name: firstName,
                    last_name: $('#last_name').val(),
                    email: email,
                    phone: phone,
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

                    console.log('Response:', response);

                    if (response.data.success) {
                        $('#contactForm').append(`
                            <div class="form-modal lg:p-20 md:p-10 p-5 md:mt-0 mt-5 flex flex-col items-center text-center h-full absolute top-0 right-0 bottom-0 left-0">
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

                        // Add modal logic
                        setTimeout(function() {
                            $('.form-modal').fadeOut(500, function() {
                                $(this).remove();
                            });
                        }, 3000);

                        // Reset the form safely
                        const formElement = document.getElementById('contactForm');
                        if (formElement) {
                            formElement.reset();
                        } else {
                            console.error('Form element not found for resetting.');
                        }

                    } else {
                        $('#contactForm').append(
                            '<p class="text-danger pt-1">There was an issue with your submission.</p>'
                        );
                    }
                } catch (error) {
                    console.error('Error submitting form:', error);
                    $('#contactForm').append(
                        '<p class="text-danger pt-1">An error occurred. Please try again later.</p>'
                    );
                } finally {
                    $submitButton.prop('disabled', false).text('Submit');
                }
            });
        });


	function updateActiveMenu() {
		const $sections = $("section");
		const $menuLinks = $(".menu-link");

		let currentSection = "";

		$sections.each(function () {
			const $section = $(this);
			const sectionTop = $section.offset().top;
			const sectionHeight = $section.outerHeight();

			if ($(window).scrollTop() >= sectionTop - sectionHeight / 3) {
				currentSection = $section.attr("id");
			}
		});

		$menuLinks.removeClass("active");
		$menuLinks.each(function () {
			const $link = $(this);
			if ($link.attr("href") === `#${currentSection}`) {
				$link.addClass("active");
			}
		});
	}
	// updateActiveMenu();

	$(window).on("scroll", updateActiveMenu);
    </script>
@endsection
