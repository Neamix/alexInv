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
                <h1 class="hero-heading"><span>Capture</span> Ideas & make it real.</h1>
                <p class="hero-sub-heading">With us you can start your dream</p>
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
                        <h6>Scanning & Doc</h6>
                        <h3 class="title">Web doc <br> file <span>Scanning.</span></h3>
                        <p>Go paperless. Back up important documents to all your devices, and keep the information not the clutter.</p>
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
                        <h6>Note & Docs</h6>
                        <h3 class="title"><span>Clipper</span> & Rich notes</h3>
                        <p>Save web pages (without the ads) and mark them up with arrows, highlights, and text to make them more useful.</p>
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
                        <h2>Let's Launch it</h2>
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
                        <h4>Web Clipper</h4>
                        <p>Deski Web offers a complete lineup of features from any major browser.</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/95.svg') }}" alt=""></div>
                        <h4>All Platform</h4>
                        <p>Lorem ipsum began as scrambl nonsensical Latin derived from Cicero's quis</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/96.svg') }}" alt=""></div>
                        <h4>Character Finding</h4>
                        <p>Creation timelines for the standard lorem ipsum passage vary, with qius some citing.</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/97.svg') }}" alt=""></div>
                        <h4>App Integrations</h4>
                        <p>Lorem ipsum began as scrambl nonsensical Latin derived from Cicero's quis</p>
                    </div> <!-- /.block-meta -->
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="block-meta">
                        <div class="icon d-flex align-items-end"><img src="{{ asset('asset/images/icon/99.svg') }}" alt=""></div>
                        <h4>Notes & Docs</h4>
                        <p>Letraset's dry-transfer sheets later entered the digital world via Aldus PageMaker.</p>
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
                            <div class="pack-name" style="background:#FFECEC;">Basic</div>
                            <div class="pack-details">TAKE GREAT NOTES</div>
                            <ul class="pr-feature">
                                <li>Website</li>
                                <li>Responseive</li>
                                <li>Admin Panal</li>
                            </ul>
                            <a href="#" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="pr-table-wrapper active">
                            <div class="pack-name" style="background:#E3F8EF;">Reguler</div>
                            <div class="pack-details">BE MORE PRODUCTIVE</div>
                            <ul class="pr-feature">
                                <li>Website</li>
                                <li>Responseive</li>
                                <li>Admin Panal</li>
                                <li>Mobile Application</li>
                            </ul>
                            <a href="#" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FBF3E5;">Business</div>
                            <div class="pack-details">Get more with team</div>
                            <ul class="pr-feature">
                                <li>Website</li>
                                <li>Responseive</li>
                                <li>Admin Panal</li>
                                <li>Mobile Application</li>
                                <li>Deploy on server</li>
                                <li>6 Month </li>
                            </ul>
                            <a href="#" class="trial-button">Call Us</a>
                        </div> <!-- /.pr-table-wrapper -->
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="year">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="pr-table-wrapper">
                            <div class="pack-name" style="background:#FFECEC;">Basic</div>
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
              </div>
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
                    <h2><span>200k+</span> Customers have our deski.Try it now!</h2>
                    <p>Try it risk free — we don’t charge cancellation fees.</p>
                </div> <!-- /.title-style-six -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.fancy-short-banner-eight -->



@endsection