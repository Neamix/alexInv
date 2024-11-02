@extends('Layouts.app')

@section('content')
	<!-- 
			=============================================
				Fancy Hero One
			============================================== 
			-->
			<div class="fancy-hero-one">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 m-auto">
							<h2 class="font-rubik">Our Services</h2>
						</div>
						<div class="col-xl-9 m-auto">
							<p class="font-rubik">We are a creative company that focuses on establishing long-term relationships with customers.</p>
						</div>
					</div>
				</div>
				<div class="bubble-one"></div>
				<div class="bubble-two"></div>
				<div class="bubble-three"></div>
				<div class="bubble-four"></div>
				<div class="bubble-five"></div>
				<div class="bubble-six"></div>
			</div> <!-- /.fancy-hero-one -->
			


			<!-- 
			=============================================
				Fancy Feature Thirty Two
			============================================== 
			-->
			<div class="fancy-feature-thirtyTwo pt-110 pb-160 md-pt-90 md-pb-100">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
							<div class="title-style-eleven">
								<h2>Explore our service.</h2>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
							<div class="block-style-twentyTwo" onclick="location.href='service-detailsV1.html';">
								<div class="icon d-flex align-items-center justify-content-center" style="background:#F7EDFF;"><img src="{{ asset('asset/images/icon/181.svg') }}" alt=""></div>
								<h4>Mobile App</h4>
								<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
							</div> <!-- /.block-style-twentyTwo -->
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
							<div class="block-style-twentyTwo" onclick="location.href='service-detailsV1.html';">
								<div class="icon d-flex align-items-center justify-content-center" style="background:#FFF8E0;"><img src="{{ asset('asset/images/icon/183.svg') }}" alt=""></div>
								<h4>Figma Design</h4>
								<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
							</div> <!-- /.block-style-twentyTwo -->
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
							<div class="block-style-twentyTwo" onclick="location.href='service-detailsV1.html';">
								<div class="icon d-flex align-items-center justify-content-center" style="background:#FFEBDB;"><img src="{{ asset('asset/images/icon/132.svg') }}" alt=""></div>
								<h4>Wp Development</h4>
								<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
							</div> <!-- /.block-style-twentyTwo -->
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
							<div class="block-style-twentyTwo" onclick="location.href='service-detailsV1.html';">
								<div class="icon d-flex align-items-center justify-content-center" style="background:#E0F8F8;"><img src="{{ asset('asset/images/icon/133.svg') }}" alt=""></div>
								<h4>Easy Customizable</h4>
								<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
							</div> <!-- /.block-style-twentyTwo -->
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
							<div class="block-style-twentyTwo" onclick="location.href='service-detailsV1.html';">
								<div class="icon d-flex align-items-center justify-content-center" style="background:#ECF1FF;"><img src="{{ asset('asset/images/icon/184.svg') }}" alt=""></div>
								<h4>Marketing</h4>
								<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
							</div> <!-- /.block-style-twentyTwo -->
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-feature-thirtyTwo -->



			<!-- 
			=============================================
				Fancy Text block Seven
			============================================== 
			-->
			<div class="fancy-text-block-seven mt-130 md-mt-80">
				<div class="bg-wrapper no-bg">
					<img src="{{ asset('asset/images/shape/29.svg')}}" alt="" class="shapes shape-one">
					<img src="{{ asset('asset/images/shape/29.svg')}}" alt="" class="shapes shape-two">
					<img src="{{ asset('asset/images/shape/29.svg')}}" alt="" class="shapes shape-three">
					<img src="{{ asset('asset/images/shape/29.svg')}}" alt="" class="shapes shape-four">
					<img src="{{ asset('asset/images/shape/29.svg')}}" alt="" class="shapes shape-five">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-6 col-sm-10 m-auto" data-aos="fade-right" data-aos-duration="1200">
								<div class="img-holder">
									<img src="{{ asset('asset/images/media/img_108.png') }}" alt="">
								</div>
							</div>
							<div class="col-xl-6 col-lg-7 ml-auto" data-aos="fade-left" data-aos-duration="1200">
								<div class="quote-wrapper pt-60">
									<img src="{{ asset('asset/images/icon/185.png') }}" alt="" class="icon">
									<blockquote class="font-rubik">
										Deski combines excellent live chat, ticketing and automation that allow us to provide quality.
									</blockquote>
									<h6 class="mt-20">Mike Lucas. <span>CEO & Founder deksi</span></h6>
								</div> <!-- /.quote-wrapper -->
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.fancy-text-block-seven -->



			<!-- 
			=============================================
				Counter Style Three
			============================================== 
			-->
			<div class="counter-style-three mt-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="counter-box-five text-center mb-65" data-aos="fade-up">
								<h2 class="number font-gordita"><span class="timer" data-from="0" data-to="13" data-speed="1500" data-refresh-interval="5">13</span>k</h2>
								<p class="font-gordita">Job done successfully</p>
							</div> <!-- /.counter-box-five -->
						</div>
						<div class="col-lg-4">
							<div class="counter-box-five text-center mb-65" data-aos="fade-up" data-aos-delay="100">
								<h2 class="number font-gordita"><span class="timer" data-from="0" data-to="20" data-speed="1500" data-refresh-interval="5">20</span>million</h2>
								<p class="font-gordita">3280 avg rating</p>
							</div> <!-- /.counter-box-five -->
						</div>
						<div class="col-lg-4">
							<div class="counter-box-five text-center mb-65" data-aos="fade-up" data-aos-delay="150">
								<h2 class="number font-gordita"><span class="timer" data-from="0" data-to="3000" data-speed="1500" data-refresh-interval="5">3000</span>+</h2>
								<p class="font-gordita">using Deski</p>
							</div> <!-- /.counter-box-five -->
						</div>
					</div>
				</div>
			</div> <!-- /.counter-style-three -->



			<!--
			=====================================================
				Fancy Short Banner Ten
			=====================================================
			-->
			<div class="fancy-short-banner-ten mt-130 md-mt-20">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1200">
							<div class="text-center pb-60">
								<h2 class="font-gordita">Convinced to work on a new project?</h2>
							</div>
						</div>
					</div>
					<div class="text-center pb-40 md-pb-10" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
						<a href="contact-us(doc).html" class="theme-btn-eleven">Contact us</a>
					</div>
				</div> <!-- /.container -->
				<img src="{{ asset('asset/images/shape/210.svg') }}" alt="" class="shapes shape-one">
				<img src="{{ asset('asset/images/shape/211.svg') }} alt="" class="shapes shape-two">
			</div> <!-- /.fancy-short-banner-ten -->


@endsection