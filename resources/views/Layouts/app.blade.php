<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Alexinvesments,Alexandria Invesments,Software,Software developing">
		<meta name="description" content="Alexandria Inv is a creative saas and software html template designed for saas and software Agency websites.">
      	<meta property="og:site_name" content="Alexandria Invesment">
      	<meta property="og:url" content="https://heloshape.com/">
      	<meta property="og:type" content="website">
      	<meta property="og:title" content="Alexandria Invesments">
		<meta name='og:image' content='images/assets/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#2a2a2a">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#2a2a2a">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#2a2a2a">
		<title>Alexandria Invesment</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <!-- SweetAlert2 CSS and JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/responsive.css') }}">

	</head>

	<body data-spy="scroll" data-target="#one-page-nav" data-offset="120">
		<div class="main-page-wrapper font-gordita">
			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
            <div class="theme-main-menu sticky-menu theme-menu-five">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="logo"><a href="/"><img src="{{ asset('asset/images/logo/logo-blue.png') }}" alt="" width="151px"></a></div>
            
                    <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
                        <div  class="nav-container">
                            <button class="navbar-toggler">
                                <span></span>
                            </button>
                           <div class="navbar-collapse collapse" id="navbarSupportedContent">
                                   <div class="d-lg-flex justify-content-between align-items-center">
                                       <ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">
                                            <li class="nav-item  position-static">
                                                <a class="nav-link" href="/">Home</a>
                                            </li>
                                           <li class="nav-item">
                                               <a href="/about" class="nav-link">About Us</a>
                                           </li>
                                           <li class="nav-item">
                                               <a href="/contact" class="nav-link">Contact Us</a>
                                           </li>
                                           <li class="nav-item">
                                               <a href="/service" class="nav-link">Services</a>
                                           </li>
                                        </ul>
                                   </div>
                               </div>
                        </div> 
                    </nav>
                    <div class="right-widget">
                        <ul  class="d-flex align-items-center">
                            <li>
                                <a href="/callus" class="dropdown download-btn">
                                    <button class="toggle" type="button" id=""  aria-haspopup="true" aria-expanded="false">
                                      Call Us
                                    </button>
            
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.theme-main-menu -->
            @yield('content')
			<!--
			=====================================================
				Footer Style Seven
			=====================================================
			-->
			<footer class="theme-footer-seven mt-120 md-mt-100">
				<div class="lg-container">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-2 mb-40" data-aos="fade-up" data-aos-duration="1200">
								<div class="logo"><a href="/"><img src="{{ asset('asset/images/logo/logo-blue.png') }}" width="151px" alt=""></a></div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
								<h5 class="title">Links</h5>
								<ul class="footer-list">
									<li><a href="#">Home</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">About us</a></li>
								</ul>
							</div>
							<div class=" col-xl-4 col-lg-4 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
								<h5 class="title">Contact us</h5>
								<ul class="footer-list">
									<li><a href="mailto: admin@alexandriainvestments.com
">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
											<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
										  </svg>
										  
										  admin@alexandriainvestments.com
										</a></li>
									<li><a href="tel:+1904689-7117"><svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
									  </svg>
									  +1 (904) 689-7117</a></li>
								</ul>
							</div>
							<div class="col-xl-3 col-lg-5 mb-40" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
								<div class="newsletter">
									<h5 class="title">BOOK A MEETING</h5>
									<p>Let's connect and discuss your ideas!</p>
									<a href="/callus"><button class="left-0 callus fixed">Call Us</button></a>

								</div> <!-- /.newsletter -->
							</div>
						</div>
					</div>

					<div class="container">
						<div class="bottom-footer">
							<div class="row">
								<div class="col-lg-4 order-lg-1 mb-20">
									
								</div>
								<div class="col-lg-4 order-lg-2 mb-20">
									<p class="copyright text-center">Copyright @2019 Alexandria Investments</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.lg-container -->
				
			</footer> <!-- /.theme-footer-seven -->

			<!-- Scroll Top Button -->
			<button class="scroll-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

    	<!-- jQuery -->
		<script src="{{ asset('asset/vendor/jquery.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('asset/vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('asset/vendor/mega-menu/assets/js/custom.js') }}"></script>
		<!-- AOS js -->
		<script src="{{ asset('asset/vendor/aos-next/dist/aos.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('asset/vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('asset/vendor/jquery.countTo.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('asset/vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('asset/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('asset/theme.js') }}"></script>
		</div> 
</html>