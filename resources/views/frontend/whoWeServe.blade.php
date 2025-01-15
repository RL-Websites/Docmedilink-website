@extends('layouts/frontend_main')
@section('content')
   <!--====||  Main Section Start ||====-->
		<main class="lg:pt-[130px] pt-[50px] overflow-hidden">
			<!--====|| Hero Section Start ||====-->
			<section class="hero">
				<img
					class="hero__img"
					src="assets/img/who-serve.png"
					alt="Hero Image"
					data-aos="fade-up"
					data-aos-duration="500"
				/>
				<div class="hero__content">
					<h1 class="font-medium" data-aos="fade-up" data-aos-duration="900"
						>Who We<br /><span class="gradient-heading"> Serve</span>
					</h1>
				</div>
			</section>
			<!--====|| Hero Section End ||====-->

			<!--====|| Health Care	Providers Section Start ||====-->
			<section class="who-serve lg:pb-[120px] relative z-10">
				<!--Frame Integration Start-->
				<div>
					<img
						class="absolute -z-10 -left-[122px] -top-20"
						src="assets/img/frame/gear-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 top-[450px] -left-[200px] rotate-180"
						src="assets/img/frame/dice-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 top-[450px] -left-[200px] rotate-180"
						src="assets/img/frame/dice-1.svg"
						alt="Frame"
					/>

					<img
						class="absolute -z-10 right-10 top-1/3"
						src="assets/img/frame/blink-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 -right-10 top-3/4 rotate-45"
						src="assets/img/frame/hash-1.svg"
						alt="Frame"
					/>
				</div>
				<!--Frame Integration End-->
				<div class="container mx-auto relative z-10">
					<!--Frame Integration Start-->
					<div>
						<img
							class="absolute -z-10 left-10 top-[500px] w-12 rotate-180"
							src="assets/img/frame/diamond.svg"
							alt="Frame"
						/>
						<img
							class="absolute -z-10 -bottom-24 left-2/3 w-20"
							src="assets/img/frame/clip-1.svg"
							alt="Frame"
						/>
					</div>
					<!--Frame Integration End-->

					<h4
						class="font-bold bottom-border md:text-start text-center"
						data-aos="fade-up-right"
						data-aos-duration="500"
						>Health Care <span class="text-primary">Provider</span>
					</h4>
					<div class="grid md:grid-cols-12 grid-cols-1 items-center">
						<div
							class="col-span-5 md:pe-24 pe-0 md:order-1 order-2"
							data-aos="fade-right"
							data-aos-duration="700"
						>
							<img
								class="max-w-[350px] mx-auto"
								src="assets/img/who-serve-1.svg"
								alt="Who Serve"
							/>
						</div>
						<div class="col-span-7 pt-5 md:order-2 order-1">
							<p
								class="text-lg md:text-start text-center"
								data-aos="fade-up-left"
								data-aos-duration="700"
								>Expand your practice with our cutting-edge telehealth platform,
								specifically designed to cater to the diverse needs of patients.
								Whether it's weight management, urgent care, or specialized
								programs like hair loss treatment, sexual health support, and
								brain health solutions, we empower healthcare providers to
								extend their services seamlessly. Our platform integrates
								features such as secure video consultations, patient intake
								forms, and tailored questionnaires to address both physical and
								mental health needs.</p
							>
							<p
								class="text-lg md:text-start text-center mt-2"
								data-aos="fade-up-left"
								data-aos-duration="900"
							>
								It’s built to support preventative care while enhancing patient
								engagement and satisfaction. With advanced reporting and
								analytics tools, healthcare providers can make informed
								decisions, ensuring quality care that goes beyond the clinic
								walls. Whether serving local communities or reaching patients in
								remote locations, our solution makes care accessible anytime,
								anywhere. 
							</p>
						</div>
					</div>
				</div>
			</section>
			<!--====|| Health Care Providers	 Section End ||====-->

			<!--====|| Health Care Entrepreneurs Section Start ||====-->
			<section
				class="who-serve lg:pb-[120px md:pb-[80px] pb-[50px] relative z-10 mt-10"
			>
				<!--Frame Integration Start-->
				<div>
					<img
						class="absolute -z-10 left-2/3 bottom-20 rotate-45"
						src="assets/img/frame/star-alt.svg"
						alt="Frame"
					/>
				</div>
				<!--Frame Integration End-->
				<div class="container mx-auto">
					<h4
						class="font-bold bottom-border md:text-start text-center"
						data-aos="fade-up-right"
						data-aos-duration="500"
						>Health Care <span class="text-primary">Entrepreneurs</span>
					</h4>
					<div class="grid md:grid-cols-12 grid-cols-1 items-center">
						<div class="col-span-7 pt-5">
							<p
								class="text-lg md:text-start text-center"
								data-aos="fade-up-right"
								data-aos-duration="700"
								>Are you ready to venture into the thriving world of virtual
								healthcare? Our turnkey telehealth solutions make it easy for
								entrepreneurs to establish robust virtual services with minimal
								hassle. From launching innovative programs like weight loss
								management, testosterone replacement therapy (TRT), and erectile
								dysfunction treatments, to building a comprehensive platform for
								personalized care, we’ve got you covered. We provide a
								white-label telehealth platform that allows you to customize
								your brand, ensuring your virtual healthcare business reflects
								your identity.
							</p>
							<p
								class="text-lg mt-2 md:text-start text-center"
								data-aos="fade-up-right"
								data-aos-duration="900"
							>
								With integrated tools for billing, e- prescriptions, and patient
								management, entrepreneurs can efficiently manage their
								operations while focusing on scaling their business. 
							</p>
							<p
								class="text-lg mt-2 md:text-start text-center"
								data-aos="fade-up-right"
								data-aos-duration="1100"
								>Our platform also supports regulatory compliance, robust
								security measures, and a streamlined user experience, enabling
								entrepreneurs to establish trust with their clients. By
								addressing growing demands in virtual healthcare, you’ll have
								the tools needed to meet market needs and create impactful,
								patient-centric businesses. 
							</p>
						</div>
						<div class="col-span-5 md:ps-16 ps-0">
							<img
								class="md:w-full max-w-[250px] mx-auto"
								src="assets/img/who-serve-2.svg"
								alt="Who Serve"
								data-aos="fade-up-left"
								data-aos-duration="700"
							/>
						</div>
					</div>
				</div>
			</section>
			<!--====|| Health Care Entrepreneurs Section End ||====-->
		</main>
		<!--====||  Main Section End ||====-->
@endsection
