@extends('layouts.elements')

@section('content')
    <?php $page="about"; ?>
    <div class="boxed blog">
        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>

        <!-- top header -->
        @include('layouts.top-bar')
        <!-- /.top -->

        <!-- header -->
        @include('layouts.navbar')
        <!-- /header -->

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                About Us
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">About Us</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

       <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-post center bd-radius-50-image">
                            <img class="main-post-about"
                                src="images/home/landscape-background.jpg" alt="images">
                            <div class="about-count-box themesflat-counter">
                                <div class="box">
                                    <div class="inner-about-count-box">
                                        <span class="number-count number" data-speed="1500" data-to="20"
                                            data-inviewport="yes">20</span>
                                        <div class="caption-number-count">
                                            Years Of experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-content-title wow fadeInUp">
                                <div class="section-subtitle">ABOUT US</div>
                                <div class="section-title">The Best Choice For your Yard.</div>
                                <div class="section-desc">We are the industry standard when it comes to the art of landscaping.</div>
                            </div>
                            <div id="about-box" class="about-desc-box">
                                <div class="about-desc">
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-660"></span>
                                        <div class="inner-box">
                                            <a href="services.html">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                Restore your Garden</h3>
                                            </a>
                                        
                                        </div>
                                    </div>
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-661"></span>
                                        <div class="inner-box">
                                            <a href="services.html">
                                                <h3 class="section-heading-jost-size20 item-2">
                                                    Better Than Pictures Online</h3>
                                            </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            <div class="button hover-up">
                                <a href="/contact" class="btn2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /about -->

        <!-- about home2 -->
        <section class="flat-about-home2">
            <div class="container-fluid">
                <div class="row">
                    <div class="image-about-home2">
                        <img src="images/home/close-up-planting-flowers-pot.jpg" alt="images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="themesflat-spacer clearfix" data-desktop="148" data-mobile="60" data-smobile="60"></div>
                                <div class="about-content-left themesflat-counter">
                                    <h5 class="section-subtitle">ABOUT US</h5>
                                    <h2 class="section-title">Nurture The<br>environment</h2>
                                    <p class="section-desc">DID YOU KNOW? <br>Plants release oxygen during the day in the presence of natural light through the process of photosynthesis, thus improving the quality of air you breathe in.</p>
                                    <div class="about-history-box wow fadeInLeft ">
                                        <div class="icon-about">
                                            <span class="tf-icon-about icon-admin-sys"></span>
                                            <div class="about-count-year section-heading-jost-size20 fw-600">25 YEARS</div>
                                        </div>
                                        <p class="section-desc about-box-right">Industry leading in terms of landscaping</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="100" data-smobile="80"></div>
                                <div class="about-content-right wow fadeInRight">
                                    <div class="about-right-list link-style3">
                                        <div class="features-box">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Efficient</h3>
                                                <p class="section-desc white">We're extremely efficient, in getting our jobs done. No dilly-dallying involved.</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Effervescent</h3>
                                                <p class="section-desc white">We treat every job with unparalleled enthusiasm, we go to every yard treating it like ours.</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Experienced</h3>    
                                                <p class="section-desc white">We've worked on numerous yards across many years, experience is something we possess in excess.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about home2 -->

         <!-- Work process -->
        <section class="flat-work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">WORK PROCESS</h4>
                            <h2 class="section-title wow fadeInUp">We Complete Every<br> Step Carefully</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-farming"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon">01</span>
                                </div>
                            </div>
                            <div class="content-features">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Get Quote
                                    </h3>
                                <p class="section-desc">
                                    We analyse your yard & determine pricing.
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-seed"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon">03</span>
                                </div>
                            </div>
                            <div class="content-features cf-3">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Begin Work
                                    </h3>
                                <p class="section-desc">
                                    We'd proceed to start working on your property
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon">
                                <span class="tf-icon-wp2 icon-seeding1"></span>
                                <div class="icon-box2 link-style3">
                                    <span class="section-heading-jost-size20 icon">02</span>
                                </div>
                            </div>
                            <div class="content-features cf-2 text-pri2-color">
                                    <h3 class="section-heading-jost-size20">
                                        Set Arrangements
                                    </h3>
                                <p class="section-desc">
                                    We'd set a date at which work would begin.
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon2">
                                <span class="tf-icon-wp4 icon-greenhouse1"></span>
                                <div class="icon-box3 link-style3">
                                    <span class="section-heading-jost-size20 icon">04</span>
                                </div>
                            </div>
                            <div class="content-features cf-4">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Finish Work
                                    </h3>
                                <p class="section-desc">
                                    Finish work & receive balance of payment.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work process -->

        <!-- counter-->
        <section class="flat-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="counter-content-left wow fadeInLeft">
                            <img class="background-counter" src="images/Counter/the-man-working-tree.jpg" alt="images">
                            <div class="content-left-box">
                                <h2 class="title-main">Customer Satisfaction Is Our Goal.</h2>
                                <p class="section-desc">We constantly push ourselves to ensure customer happiness</p>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-content-right themesflat-counter wow fadeInRight">
                            <div class="content-right-box mg-bottom30">
                                <span class="title-main white number" data-speed="1000" data-to="10" data-inviewport="yes">10</span><span class="title-main white">+</span>
                                <h3 class="section-heading-jost-size20 fw-600">Years of experience</h3>
                            </div>
                            <div class="content-right-box box-2 mg-bottom30">
                                <span class="title-main white number" data-speed="1500" data-to="100" data-inviewport="yes">100</span><span class="title-main white">s</span>
                                <h3 class="section-heading-jost-size20 fw-600">Happy Customers</h3>
                            </div>
                            <div class="content-right-box box-3">
                                <span class="title-main white number" data-speed="2000" data-to="100" data-inviewport="yes">100</span><span class="title-main white">%</span>
                                <h3 class="section-heading-jost-size20 mg-top-5 fw-600">Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /conter -->

        <!-- flat-testimonials-home2 -->
        <section class="flat-testimonials-home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
                        <div class="testimonials-content-left">
                            <div class="section-title-box">
                                <h5 class="section-subtitle">CLIENT TESTIMONIALS</h5>
                                <h2 class="section-title">What our clients say</h2>
                            </div>
                            <p class="section-desc mg-top-25">Our Customers have nothing but positive things to say about us.</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-content-right wow fadeInRight">
                            <img src="images/testimonials/young-beautiful-florist-watering-flowers.jpg" alt="images">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="owl-carousel-2 owl-theme author-carousel wow fadeInUp">
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Michael and his crew are so meticulous.
                                                He never fails to impress me.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Irving Landscaping gave my lawn a new lease on life, it looks so green, and as beautiful as ever.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Philip  Mendez</h4>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>I met Michael years ago,way back when his company was much smaller, he never failed to treat my yard like his.
                                                He would always go the extra mile. Whenever I had visitors, I always received comments  about my garden.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection