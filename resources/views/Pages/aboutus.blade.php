@extends('Layouts.app')

@section('content')			
    <!-- 
    =============================================
        Fancy Hero Two
    ============================================== 
    -->
    <div class="fancy-hero-two">
        <div class="bg-wrapper">
            <div class="container">
                <div class="page-title">About us</div>
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-10 m-auto">
                        <h1 class="heading">World best customer support portal</h1>
                        <p class="sub-heading">deski helps teams of all sizes get better at delivering effortless customer service experiences.</p>
                    </div>
                </div>
            </div>
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.fancy-hero-two -->
    


    <!-- 
    =============================================
        Fancy Text block Nine
    ============================================== 
    -->
    <div class="fancy-text-block-nine mt-130 md-mt-80">
        <div class="shapes shape-one"></div>
        <div class="shapes shape-two"></div>
        <div class="shapes shape-three"></div>
        <div class="shapes shape-four"></div>
        <div class="container">
            <div class="title-style-two text-center mb-35 md-mb-10">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <p>Our Story</p>
                        <h2>The world’s first Conversational Relationship Platform</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10 m-auto">
                    <p class="text-meta" data-aos="fade-up" data-aos-duration="1200">We created Help deski for businesses that share our passion for doing right by the customer. For many of us, great customer service isn’t a cost center — it’s an effective marketing tool, a competitive differentiator, and a cornerstone of the brand.</p>
                    <p class="text-meta" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">But in 2008, there were no customer service platforms available that embodied our customer-centric values. There were help desks that quite literally treated each person like  a number and made it far too difficult to build a long-term relationship. We felt a strong pull to make something different, and we did.</p>
                </div>
            </div>
        </div>
    </div> <!-- /.fancy-text-block-nine -->



    <!--
    =====================================================
        Counter With Icon One
    =====================================================
    -->
    <div class="counter-with-icon-one border-style pt-120 pb-45 md-pt-70">
        <div class="container">
            <div class="border-style">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="counter-box-three">
                            <div class="icon"><img src="{{ asset('asset/images/icon/31.svg') }}" alt=""></div>
                            <h2 class="number"><span class="timer" data-from="0" data-to="13" data-speed="1500" data-refresh-interval="5">0</span>m</h2>
                            <p class="font-rubik">Ticket Sold</p>
                        </div> <!-- /.counter-box-three -->
                    </div>
                    <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="counter-box-three">
                            <div class="icon"><img src="{{ asset('asset/images/icon/32.svg') }}" alt=""></div>
                            <h2 class="number"><span class="timer" data-from="0" data-to="30000" data-speed="1200" data-refresh-interval="5">0</span></h2>
                            <p class="font-rubik">Event organisers</p>
                        </div> <!-- /.counter-box-three -->
                    </div>
                    <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="counter-box-three">
                            <div class="icon"><img src="{{ asset('asset/images/icon/33.svg') }}" alt=""></div>
                            <h2 class="number"><span class="timer" data-from="0" data-to="134" data-speed="1200" data-refresh-interval="5">0</span></h2>
                            <p class="font-rubik">Countries</p>
                        </div> <!-- /.counter-box-three -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.counter-with-icon-one -->




    <!-- 
    =============================================
        Fancy Text block Ten
    ============================================== 
    -->
    <div class="fancy-text-block-ten mt-120 md-mt-60">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-5 col-lg-6 ml-auto order-lg-last" data-aos="fade-left" data-aos-duration="1200">
                    <img src="{{ asset('asset/images/icon/34.svg') }}" alt="" class="icon">
                    <p class="font-rubik">Deski combines excellent live chat, ticketing and automation that allow us to provide quality.</p>
                    <div class="name sm-mb-40">Mike Lucas. <span>CEO & Founder <br>deksi</span></div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="row align-items-end">
                        <div class="col-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100"><img src="{{ asset('asset/images/media/img_25.png') }}" alt="" class="img-meta"></div>
                        <div class="col-6" data-aos="fade-right" data-aos-duration="1200"><img src="{{ asset('asset/images/media/img_26.png') }}" alt="" class="img-meta"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="img-gallery mt-60 md-mt-20">
                        <div class="row">
                            <div class="col-sm-5 sm-mb-20" data-aos="fade-up" data-aos-duration="1200"><img src="{{ asset('asset/images/media/img_27.png') }}" alt="" class="img-meta"></div>
                            <div class="col-sm-7" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100"><img src="{{ asset('asset/images/media/img_28.png') }}" alt="" class="img-meta"></div>
                        </div>
                    </div> <!-- /.img-gallery -->
                </div>
            </div>
        </div>
    </div> <!-- /.fancy-text-block-ten -->



    <!--
    =====================================================
        Fancy Feature Five
    =====================================================
    -->
@endsection