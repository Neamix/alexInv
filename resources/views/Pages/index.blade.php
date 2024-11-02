@extends('Layouts.app')

@section('content')




<!-- 
=============================================
    Theme Hero Banner
============================================== 
-->
<div class="hero-banner-seven lg-container">
    <div class="container">
        <div class="illustration-container">
            <img src="{{ asset('asset/images/assets/ils_20.svg') }}" alt="header-image">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="hero-heading">One<span class="mx-1">Innovation</span> at a Time.</h1>
                <p class="hero-sub-heading">Building the Future of the Web Applications</p>
                <form action="#" style="opacity: 0">
                    <input type="email" placeholder="ihidago@ujufidnan.gov">
                    <button>Join Newsletter</button>
                </form>
            </div>
        </div>
    </div>
    <div class="partner-slider-two mt-130 mt-80">
        <div class="container mt-5">
            <p class="text-center"><b>Tecnologies</b> that we are using</p>
            <div class="partnerSliderTwo">
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/React.png') }}" width="80" alt="react"></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/Laravel.png') }}" width="80" alt="Laravel"></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/Vue.png') }}" width="80" alt="Vue"></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/Flutter.png') }}" width="80" alt="Flutter"></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/Tailwind.png') }}" width="80" alt="Tailwind"></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/Nuxt.png') }}" width="80" alt=""></div>
                </div>
                <div class="item">
                    <div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ asset('asset/images/tecnologies/MySQL.png') }}" width="80" alt=""></div>
                </div>
            </div>
        </div>
    </div> <!-- /.partner-slider-two -->
</div> <!-- /.hero-banner-seven -->




<!-- 
=============================================
    Fancy Feature Sixteen
============================================== 
-->
<div class="fancy-feature-sixteen mt-200 md-mt-100" id="feature">
    <div class="container">
        <div class="block-style-eighteen mt-200 pt-50 md-mt-80">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-last" data-aos="fade-left" data-aos-duration="1200">
                    <div class="text-wrapper">
                        <h6>Empowering Your Business with Software Innovation</h6>
                        <h3 class="title">Software<span>Investment.</span></h3>
                        <p>Empowering your business with cutting-edge software solutions designed to drive growth, efficiency, and innovation.</p>
                    </div> <!-- /.text-wrapper -->
                </div>
                <div class="col-lg-7 order-lg-first" data-aos="fade-right" data-aos-duration="1200">
                    <div class="screen-holder-two">
                        <img src="{{ asset('asset/images/assets/screen_12.png') }}" alt="shape">
                        <img src="{{ asset('asset/images/assets/screen_13.png') }}" alt="" class="shapes screen-one">
                    </div>
                </div>
            </div>
        </div> <!-- /.block-style-eighteen -->

        <div class="block-style-eighteen mt-200 pt-50 md-mt-80">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                    <div class="text-wrapper">
                        <h6>LOOKS MATTER</h6>
                        <h3 class="title"><span>UX/UI</span> Insights</h3>
                        <p>Transform your software vision into reality with custom-designed user interfaces that prioritize user engagement and satisfaction</p>
                    </div> <!-- /.text-wrapper -->
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">
                    <div class="screen-holder-three d-flex align-items-center justify-content-center">
                        <img src="{{ asset('asset/images/assets/screen_14.png') }}" alt="cliper">
                    </div>
                </div>
            </div>
        </div> <!-- /.block-style-eighteen -->
    </div>
</div> <!-- /.fancy-feature-sixteen -->



<!--
=====================================================
    Fancy Text Block Twenty Two
=====================================================
-->
<div class="fancy-text-block-twentyTwo lg-container mt-250 md-mt-120" id="whyUs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 order-lg-last" data-aos="fade-left" data-aos-duration="1200">
                <div class="text-wrapper">
                    <a class="fancybox mb-20 md-mb-10" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
                        <img src="images/icon/71.svg" alt="" class="icon">
                    </a>
                    <div class="title-style-seven">
                        <h2>App Deployment</h2>
                    </div> <!-- /.title-style-seven -->
                    <p>Securely launch your web application on a reliable server, guaranteeing high performance and accessibility for your customers</p>
                </div> <!-- /.text-wrapper -->
            </div>
            <div class="col-xl-7 col-lg-6 col-md-8 m-auto order-lg-first" data-aos="fade-right" data-aos-duration="1200">
                <div class="illustration-holder">
                    <img src="{{ asset('asset/images/assets/ils_21.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.fancy-text-block-twentyTwo -->



<!--
=====================================================
    Fancy Feature Seventeen
=====================================================
-->
<div class="fancy-feature-seventeen mt-150 md-mt-90" id="product">
    <div class="bg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/94.svg') }}" alt=""></div>
                        <h4>Dynamic App</h4>
                        <p>Interactive web applications to adapt and scale with your business needs</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/95.svg') }}" alt=""></div>
                        <h4>Website Development</h4>
                        <p>Seamless experience across all devices, ensuring your audience can access your content anytime, anywhere!</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/96.svg') }}" alt=""></div>
                        <h4>Backend Control</h4>
                        <p>Providing organized tools to oversee operations and make updates at ease</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/97.svg') }}" alt=""></div>
                        <h4>Software Integrations</h4>
                        <p>Connect your web application with essential third-party tools to enhance workflow efficiency and streamline processes</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/98.svg') }}" alt=""></div>
                        <h4>App Support</h4>
                        <p>To keep your web application running smoothly, timely updates, and quick resolutions</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/99.svg') }}" alt=""></div>
                        <h4>SEO-Friendly</h4>
                        <p>To improve search engine rankings, increase visibility, and drive more organic traffic</p>
                    </div> <!-- /.block-meta -->
                </div>
            </div>
        </div>
    </div> <!-- /.bg-wrapper -->
</div> <!-- /.fancy-feature-seventeen -->



<!--
=====================================================
    Pricing Section Six
=====================================================
-->
<div class="pricing-section-six mt-200 md-mt-100" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-xl-10  m-auto">
                <div class="title-style-seven text-center">
                    <h2>Solo, Agency or Team? We’ve got you <span>covered.</span></h2>
                </div> <!-- /.title-style-six -->
            </div>
        </div>
    </div>

    <div class="pricing-table-area-six">
        <div class="tab-content">
            <div class="tab-pane active" id="month">
                  <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FFECEC;">Small Project</div>
                            <div class="pack-details">GREAT FOR SMALL TASKS</div>
                            <ul class="pr-feature">
                                <li>Quick updates</li>
                                <li>Minor enhancements</li>
                                <li>Admin Panal</li>
                            </ul>
                            <a href="/callus" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="pr-table-wrapper active">
                            <div class="pack-name" style="background:#E3F8EF;">Big Project</div>
                            <div class="pack-details">BE MORE PRODUCTIVE</div>
                            <ul class="pr-feature">
                                <li>Website</li>
                                <li>Responseive</li>
                                <li>Admin Panal</li>
                                <li>Mobile Application</li>
                            </ul>
                            <a href="/callus" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FBF3E5;">Business Project</div>
                            <div class="pack-details">Get more with team</div>
                            <ul class="pr-feature">
                                <li>Quick updates</li>
                                <li>Minor enhancements</li>
                                <li>Admin Panal</li>
                            </ul>
                            <a href="/callus" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                </div>
            </div>
            {{-- <div class="tab-pane fade" id="year">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FFECEC;">Small Project</div>
                            <div class="price">Free</div>
                            <div class="pack-details">TAKE GREAT NOTES</div>
                            <ul class="pr-feature">
                                <li>Sync up to 2 devices </li>
                                <li>Find notes fast with search</li>
                                <li>and tags</li>
                                <li>Clip web pages</li>
                                <li>25MB maximum note </li>
                                <li>60MB monthly upload limit</li>
                            </ul>
                            <a href="#" class="trial-button">Try it Free</a>
                            <div class="trial-text">No card required, cancel any time</div>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="pr-table-wrapper active">
                            <div class="pack-name" style="background:#E3F8EF;">Reguler</div>
                            <div class="price">$68.99</div>
                            <div class="pack-details">BE MORE PRODUCTIVE</div>
                            <ul class="pr-feature">
                                <li>Sync up to 2 devices </li>
                                <li>Find notes fast with search</li>
                                <li>and tags</li>
                                <li>Apply rich formatting</li>
                                <li>Clip web pages</li>
                                <li>25MB maximum note size</li>
                                <li>Access notes offline</li>
                                <li>10GBmonthly upload limit</li>
                                <li>Annotate PDFs</li>
                            </ul>
                            <a href="#" class="trial-button">Try it Free</a>
                            <div class="trial-text">No card required, cancel any time</div>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FBF3E5;">Business</div>
                            <div class="price">$189.99</div>
                            <div class="pack-details">Get more with team</div>
                            <ul class="pr-feature">
                                <li>Everthing is premium</li>
                                <li>Find notes fast with search</li>
                                <li>and tags</li>
                                <li>Apply rich formatting</li>
                                <li>Clip web pages</li>
                                <li>25MB maximum note size</li>
                                <li>Access notes offline</li>
                                <li>18GB monthly upload limit</li>
                            </ul>
                            <a href="#" class="trial-button">Try it Free</a>
                            <div class="trial-text">No card required, cancel any time</div>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                </div>
            </div> --}}
        </div>
    </div> <!-- /.pricing-table-area-six -->
</div> <!-- /.pricing-section-six -->


<!--
=====================================================
    Fancy Short Banner Eight
=====================================================
-->
<div class="fancy-short-banner-eight mt-170 md-mt-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-11 m-auto" data-aos="fade-up" data-aos-duration="1200">
                <div class="title-style-seven text-center">
                    <h2><span>Got an Idea</span></h2>
                    <p>Book a meeting now, and let’s turn your dream project into reality!</p>
                    <a href="callus" class="d-block"><button class="left-0 callus fixed">Call Us</button></a>

                </div> <!-- /.title-style-six -->
               
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.fancy-short-banner-eight -->



@endsection