@extends('layouts/frontend_main')

@section('content')

<main class="lg:pt-[130px] pt-[50px] overflow-x-hidden">
    <!--====|| Hero Section Start ||====-->
    <section class="hero">
        <img class="hero__img" src="assets/img/why-choose.png" alt="Hero Image">
        <div class="hero__content">
            <h1 class="font-medium">Why Choose<br><span class="gradient-heading"> Docmedilink?</span>
            </h1>
        </div>
    </section>
    <!--====|| Hero Section End ||====-->

    <!--====|| Why Choose Items	Section Start ||====-->
    <section class="why-choose lg:pb-[120px] relative z-10">
        <!--Frame Integration Start-->
        <div>
            <img class="absolute -z-10 -left-[122px] -top-20" src="assets/img/frame/gear-1.svg" alt="Frame">
            <img class="absolute -z-10 top-[450px] -left-[200px] rotate-180" src="assets/img/frame/dice-1.svg" alt="Frame">
            <img class="absolute -z-10 top-[450px] -left-[200px] rotate-180" src="assets/img/frame/dice-1.svg" alt="Frame">

            <img class="absolute -z-10 right-10 top-1/3" src="assets/img/frame/blink-1.svg" alt="Frame">
            <img class="absolute -z-10 -right-10 top-3/4 rotate-45" src="assets/img/frame/hash-1.svg" alt="Frame">
        </div>
        <!--Frame Integration End-->
        <div class="2xl:container mx-auto relative z-10">
            <!--Frame Integration Start-->
            <div>
                <img class="absolute -z-10 left-10 top-[500px] w-12 rotate-180" src="assets/img/frame/diamond.svg" alt="Frame">
                <img class="absolute -z-10 -bottom-24 left-2/3 w-20" src="assets/img/frame/clip-1.svg" alt="Frame">
            </div>
            <!--Frame Integration End-->

            <div class="serve-cards grid md:grid-cols-2 grid-cols-1 lg:gap-x-[200px] sm:gap-x-10 gap-x-5 gap-y-12 lg:mt-10 mt-0">
                <div class="serve-card md:text-start text-center">
                    <i class="icon-idea text-[130px]"></i>
                    <h3 class="font-bold mt-4 pb-3" style="border-bottom: 1px solid #dadef2">Innovation</h3>
                    <p class="serve__desc mt-4">At Docmedilink, we leverage cutting-edge technologies to design
                        custom-built software tailored to meet your specific healthcare
                        needs. Our solutions seamlessly integrate with existing systems,
                        automating workflows, and optimizing efficiency. We embrace
                        innovation not just in technology but also in our approach to
                        solving complex challenges, enabling you to stay ahead in a
                        competitive healthcare environment. With a focus on scalability
                        and adaptability, our platforms grow alongside your practice,
                        ensuring long-term value and innovation.&nbsp;
                    </p>
                </div>
                <!-- Serve Card End -->
                <div class="serve-card md:text-start text-center">
                    <i class="icon-mobile text-[130px]"></i>
                    <h3 class="font-bold mt-4 pb-3" style="border-bottom: 1px solid #dadef2">Usability</h3>
                    <p class="serve__desc mt-4">Ease of use is at the core of our platform design. Our
                        intuitive interfaces minimize the learning curve for healthcare
                        providers, making it easy for your team to adopt and utilize the
                        system effectively. Built with user-centric design principles,
                        our platforms empower staff to provide exceptional care without
                        being bogged down by complicated processes. Minimal training
                        ensures that your team can focus on what matters most—delivering
                        high-quality patient care.&nbsp;
                    </p>
                </div>
                <!-- Serve Card End -->
                <div class="serve-card md:text-start text-center">
                    <i class="icon-lock text-[130px]"></i>
                    <h3 class="font-bold mt-4 pb-3" style="border-bottom: 1px solid #dadef2">Security&nbsp;</h3>
                    <p class="serve__desc mt-4">We understand the critical importance of safeguarding sensitive
                        patient data. That’s why our solutions are engineered with
                        robust security measures and are fully compliant with HIPAA
                        standards. From secure data transmission to encryption and
                        regular audits, every aspect of our platform is designed to
                        ensure data integrity and privacy. With Docmedilink, you can
                        have peace of mind knowing that patient information is handled
                        with the utmost confidentiality and protection.&nbsp;
                    </p>
                </div>
                <!-- Serve Card End -->
                <div class="serve-card md:text-start text-center">
                    <i class="icon-certification text-[130px]"></i>
                    <h3 class="font-bold mt-4 pb-3" style="border-bottom: 1px solid #dadef2">Reliability&nbsp;</h3>
                    <p class="serve__desc mt-4">Our platforms are built to provide dependable and scalable
                        solutions for your healthcare needs. Designed with redundancy
                        and fail-safe mechanisms, our systems ensure uninterrupted
                        service, even during high-traffic periods. We prioritize data
                        privacy and operational continuity, allowing you to deliver
                        consistent, quality care to your patients without concerns about
                        downtime or data loss. Docmedilink is your reliable partner for
                        robust and secure healthcare technology solutions.&nbsp;
                    </p>
                </div>
                <!-- Serve Card End -->
            </div>

            <div class="text-center max-w-[610px] mx-auto lg:mt-20 mt-10">
                <img class="mx-auto" src="assets/img/growth.png" alt="">
                <p class="serve__desc mt-4">With Docmedilink, you're not just investing in a platform; you're
                    partnering with a team dedicated to helping you transform your
                    healthcare delivery, empowering your practice, and exceeding
                    patient expectations.&nbsp;</p>
            </div>
        </div>
    </section>
    <!--====|| Why Choose Items Section End ||====-->
</main>
@endsection
