@extends('layouts/frontend_main')

@section('content')

		<!--====||  Main Section Start ||====-->
		<main class="lg:pt-[130px] pt-[50px] overflow-x-hidden">
			<!--====|| Hero Section Start ||====-->
			<section class="hero">
				<!--Frame Integration Start-->
				<div class="frame-mob">
					<img
						class="absolute -z-10 -left-7 top-[50px]"
						src="assets/img/frame/hash-2.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 left-7 top-[170px] w-8"
						src="assets/img/frame/clip-2.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 -left-3 top-[220px] w-8 rotate-[25deg]"
						src="assets/img/frame/star-alt.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 -right-3 top-[100px] w-10 rotate-[25deg]"
						src="assets/img/frame/blink-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 left-2/3 top-[160px] w-10"
						src="assets/img/frame/diamond.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 left-2/3 top-1/2 w-7"
						src="assets/img/frame/gear-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 right-0 top-1/2 w-2"
						src="assets/img/frame/d-1.svg"
						alt="Frame"
					/>
				</div>
				<!--Frame Integration End-->
				<img
					class="hero__img"
					src="assets/img/services.webp"
					alt="Hero Image"
				/>
				<div class="hero__content">
					<h1 class="font-medium br-show"
						>Our<br /><span class="gradient-heading"> Services</span>
					</h1>
				</div>
			</section>
			<!--====|| Hero Section End ||====-->

			<!--====|| All Services Section Start ||====-->
			<section
				class="all-service lg:pb-[150px] md:pb-[80px] pb-[50px] relative z-10"
			>
				<!--Frame Integration Start-->
				<div>
					<img
						class="absolute -z-10 -left-[122px] -top-20"
						src="assets/img/frame/gear-1.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 right-10 top-[350px]"
						src="assets/img/frame/gear-2.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 left-7 top-[500px] rotate-180"
						src="assets/img/frame/clip-2.svg"
						alt="Frame"
					/>
					<img
						class="absolute -z-10 bottom-[150px] -left-[200px] rotate-180"
						src="assets/img/frame/dice-1.svg"
						alt="Frame"
					/>

					<img
						class="absolute -z-10 bottom-20 left-2/3"
						src="assets/img/frame/d-1.svg"
						alt="Frame"
					/>
				</div>
				<!--Frame Integration End-->
				<div class="2xl:container mx-auto relative z-10">
					<div>
						<img
							class="absolute -z-10 bottom-[260px] right-0"
							src="assets/img/frame/blink-1.svg"
							alt="Frame"
						/>
					</div>
					<!--Frame Integration End-->

					<div class="grid grid-cols-12 gap-x-5 md:gap-y-12 gap-y-7 mt-4">
						<div class="md:col-span-7 col-span-12">
							<h4 class="font-bold"
								>Virtual <span class="text-primary">Consultation</span>
							</h4>
							<div class="all-service__card bg-blue-light-2">
								<div class="all-service__left lg:pe-7 pe-5">
									<p
										>Offer seamless, secure, and HIPAA-compliant video and audio
										consultations, enabling healthcare providers to deliver
										high-quality care from anywhere. Our platform supports
										interactive questionnaires and real-time data sharing to
										optimize patient interaction and outcomes. </p
									>
								</div>
								<div class="all-service__right">
									<img
										class="w-full"
										src="assets/img/services/service-1.png"
										alt="Service"
									/>
								</div>
							</div>
						</div>
						<div class="md:col-span-5 col-span-12">
							<h4 class="font-bold"
								>Customizable <span class="text-primary">Workflows</span>
							</h4>
							<div class="all-service__card bg-blue-light-3">
								<div
									class="all-service__left all-service__left--alt lg:pe-7 pe-5"
								>
									<p
										>From managing patient intake forms to automating routine
										tasks, our solutions are tailored to fit the unique needs of
										your healthcare business. </p
									>
								</div>
								<div class="all-service__right">
									<img
										class="w-full"
										src="assets/img/services/service-2.png"
										alt="Service"
									/>
								</div>
							</div>
						</div>
						<div class="md:col-span-5 col-span-12">
							<h4 class="font-bold"
								>Patient <span class="text-primary">Engagement Tools</span>
							</h4>
							<div>
								<div class="all-service__card bg-blue-light-4">
									<div class="all-service__left all-service__left--alt pe-3">
										<p
											>Engage patients with reminders, educational materials,
											and self-service options, improving satisfaction and
											retention while reducing administrative burden. </p
										>
									</div>
									<div class="all-service__right">
										<img
											class="w-full"
											src="assets/img/services/service-3.png"
											alt="Service"
										/>
									</div>
								</div>
							</div>
						</div>
						<div class="md:col-span-7 col-span-12">
							<h4 class="font-bold"
								>Virtual <span class="text-primary">Consultation</span>
							</h4>
							<div class="all-service__card bg-aqua-2">
								<div class="all-service__left pe-7">
									<p
										>Offer seamless, secure, and HIPAA-compliant video and audio
										consultations, enabling healthcare providers to deliver
										high-quality care from anywhere. Our platform supports
										interactive questionnaires and real-time data sharing to
										optimize patient interaction and outcomes. </p
									>
								</div>
								<div class="all-service__right pe-5">
									<img
										class="w-full"
										src="assets/img/services/service-4.png"
										alt="Service"
									/>
								</div>
							</div>
						</div>
						<div class="col-span-12">
							<h4 class="font-bold"
								>E-<span class="text-primary">prescription</span> & Lab
								<span class="text-primary">Integration</span>
							</h4>
							<div class="all-service__card bg-aqua-2">
								<div class="all-service__left pe-7">
									<p
										>Simplify the prescription process with our e-prescription
										functionality, integrated directly into the patient care
										workflow. Lab test kits can be ordered or patients can visit
										partner labs for diagnostics, with results feeding directly
										into the system for review and action. </p
									>
								</div>
								<div class="all-service__right pe-5">
									<img
										class="w-full"
										src="assets/img/services/service-5.png"
										alt="Service"
									/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--====|| All Services Section End ||====-->
		</main>
		<!--====||  Main Section End ||====-->

@endsection
