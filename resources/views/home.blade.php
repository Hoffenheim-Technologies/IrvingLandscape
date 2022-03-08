@extends('layouts.elements')

@section('content')

<?php 
$page = "home"; 
?>

    <div class="boxed blog">

        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>
<!--Navbar beginning -->
        <div class="flat-header-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="top-header1">
                                    <div class="top-header-inner">
                                        <div class="top-bar-left">
                                            <span class="top-location">8 Centre St, Belleville ON K8N 4W5</span>
                                            <span class="top-mail">info@irvingslandscaping.ca</span>
                                        </div>
                                        <div class="top-bar-right">
                                            <ul class="widgets-nav-social">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- header -->
                        @include('layouts.navbar')
                    </div>
                </div>
            </div>
        </div>
        <!-- page title -->
        <div class="page-title-home1">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title-home1">
                        <!-- /.page-title -->
                        <div class="flat-slider clearfix">
                            <div class="rev_slider_wrapper fullwidthbanner-container">
                                <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                    <ul>
                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-one"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-274','-50','-50','-50']"
                                                data-fontsize="['16','16','16','16']" data-lineheight="['20','0','0','0']"
                                                data-width="full" data-height="none" data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <h3 class="sub-title">Gardening at it's finest.</h3>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-two"
                                                data-x="['left','left','left','center']" data-hoffset="['-2','-2','5','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-130','-165', '-15','-15']"
                                                data-fontsize="['60','70','50','60']"
                                                data-lineheight="['70','80','64','48']" 
                                                data-width="full"
                                                data-height="none" 
                                                data-whitespace="normal" 
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="title-box">
                                                    <h2 class="title-slider text-pri2-color">Beautiful Garden,<br>
                                                    Beautiful Scenery,<br>Beautiful Soul.</h2>
                                                </div>
                                            </div>

                                            <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-3','-3','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['48','40','180','280']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="button-box">
                                                    <div class="button res-btn-slider">
                                                        <a href="/contact" class="btn btn-left">Get A Quote</a>
                                                    </div>
                                                    <div class="button">
                                                        <a href="service-details.html" class="btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-caption tp-resizeme image-slider text-right "
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-29','-29','-150','-29']"
                                                data-y="['center','center','center','center']"
                                                data-voffset="['-88','-88','60','-88']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="800" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms"
                                                    data-wow-duration="3s"
                                                    src="images/home/standing.png"
                                                    alt="images">
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->
                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-one"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-274','-50','-50','-50']"
                                                data-fontsize="['16','0','0','0']" data-lineheight="['20','0','0','0']"
                                                data-width="full" data-height="none" data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <h3 class="sub-title">The Best In The Business</h3>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-two"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-2','-2','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-130','-165',10','-15']"
                                                data-fontsize="['60','70','50','60']"
                                                data-lineheight="['70','80','64','48']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="title-box">
                                                    <h2 class="title-slider text-pri2-color">Grow your health
                                                        <br>by growing<br>a garden.
                                                    </h2>
                                                </div>
                                            </div>

                                            <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-3','-3','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['48','40','180','300']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="button-box">
                                                    <div class="button res-btn-slider">
                                                        <a href="/contact" class="btn btn-left">Get A Quote</a>
                                                    </div>
                                                    <div class="button">
                                                        <a href="service-details.html" class="btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-caption tp-resizeme image-slider text-right "
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-29','-29','-150','-29']"
                                                data-y="['center','center','center','center']"
                                                data-voffset="['-88','-88','60','-88']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:0;z:[100%];rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:[100%];y:0px;" data-mask_out="x:inherit;y:inherit;"
                                                data-start="900" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms"
                                                    data-wow-duration="3s"
                                                    src="images/home/standing.png"
                                                    alt="images">
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- flat-slider -->
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- features -->
        <section class="flat-features">
            <div class="container-fluid">
                <div class="row">
                    <div class="item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-farming"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Landscaping
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        Transform your yard from sticks and stones, to a bed of roses
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-hand-gloves"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Pruning plants
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        We'd prune your plants symmeterically, and have them looking as healthy and clean as possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Lawn Maintenance
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        We'd provide you with an even and healthy looking lawn.
                                        Want a lawn installed? we'll do that too.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-seed"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Garden Installation & Maintenance
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        We'd install a beautiful and fragrant garden in your yard.
                                        and we'd maintain it too!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /features -->

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

        <!-- Our services -->
        <section class="flat-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle">WHAT WE DO</h4>
                            <h2 class="section-title">What You Can Do<br> with Us?</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="67" data-mobile="60" data-smobile="60">
                        </div>
                    </div>

                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Landscaping</h3>
                                </a>
                                <p class="section-desc">
                                    Have ugly looking shrubs in your yard? We'd take those out in no time.
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box mg-bottom30 wow fadeInUp">
                            <div class="our-services-overlay active"></div>
                            <span class="tf-icon icon-size3 icon-Group-7527"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span>
                            <div class="content-features link-style3">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Pruning plants</h3>
                                </a>
                                <p class="section-desc white">
                                    Have lovely hedges? We'd shape them geometrically and accurately.
                                </p>
                                <div class="link2 link-style3">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 wow fadeInLeft">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size2 icon-Group-7526"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Lawn Installation</h3>
                                </a>
                                <p class="section-desc">
                                    Is your yard just dirt? We'd put in a lawn for you today!
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 wow fadeInRight">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size4 icon-Group-7528"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Garden Maintenance
                                    </h3>
                                </a>
                                <p class="section-desc">
                                    Your garden looking shabby? Plants overgrowing? Let us maintain that garden today!
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Our service -->

        <!-- Our team -->
        <section class="flat-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle white wow fadeInUp">MEET OUR TEAM</h4>
                            <h2 class="section-title white wow fadeInUp">Our Creative Team</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                </div>
            </div>
            <!-- list team -->
            <div class="container">
                <div class="row">
                    <div class="list-team">
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="images/team/ceo.jpg" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20">Michael Irving</h3>
                                    <p class="section-desc-2 white">Founder & CEO</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="images/team/henry.jpg" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20">Henry</h3>
                                    <p class="section-desc-2 white">Labourer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="images/team/steven.jpg" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20">Steven</h3>
                                    <p class="section-desc-2 white">Labourer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Our team -->

        <!-- our-profolio -->
        <section class="flat-profolio">
            <div class="container-fluid">
                <div class="row">
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="images/home/portraitfinished1.jpg" alt="images">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="images/home/portraitfinished2.jpg" alt="images">
                                <div class="profolio-show active">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="images/home/portraitfinished3.jpg" alt="images">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="images/home/portraitfinished4.jpg" alt="images">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /our profolio -->

        <!-- Testimonials -->
        <section class="flat-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="0">
                        </div>
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">CLIENT TESTIMONIALS</h4>
                            <h2 class="section-title">What our clients say </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme wow fadeInUp">
                            <div class="item">
                                <div class="list-testimonials">
                                    <div class="box-item">
                                        <div class="box-item-overlay"></div>
                                        <div class="staff-img">
                                          
                                        </div>
                                        <p class="section-desc mg-bottom-15"> Michael and his crew are so meticulous.
                                        He never fails to impress me. </p>
                                        <h4 class="section-desc-heading">Eugene Freeman</h4>
                                        <p class="section-desc des-2"></p>
                                        <div class="icon-box">
                                            <a class="icon-inner-box"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-testimonials">
                                <div class="box-item">
                                    <div class="box-item-overlay active"></div>
                                    <div class="staff-img">
                                      
                                    </div>
                                    <p class="section-desc mg-bottom-15">Irving Landscaping gave my lawn a new lease on life, it looks so green, and as beautiful as ever. </p>
                                    <h4 class="section-desc-heading">Kelly Coleman</h4>
                                    <p class="section-desc des-2"></p>
                                    <div class="icon-box">
                                        <a class="icon-inner-box"></a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="list-testimonials">
                                <div class="box-item">
                                    <div class="box-item-overlay"></div>
                                    <div class="staff-img">
                                       
                                    </div>
                                    <p class="section-desc mg-bottom-15">I met Michael years ago,way back when his company was much smaller, he never failed to treat my yard like his.
                                        He would always go the extra mile. Whenever I had visitors, I always received comments  about my garden.
                                    </p>
                                    <h4 class="section-desc-heading">Philip Mendez</h4>
                                    <p class="section-desc des-2"></p>
                                    <div class="icon-box">
                                        <a class="icon-inner-box"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonials -->

        <!-- About 2nd -->
        <section class="flat-about-2nd">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="content-left">
                                <div class="tag-logo">
                                    <img src="images/home/irvinglogo.png" alt="images" width="160px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-right link-style3">
                            <h4 class="section-subtitle white wow fadeInUp">ABOUT US</h4>
                            <h3 class="section-title white wow fadeInUp">We Have The Perfect soluion For You</h3>
                            <p class="section-desc white wow fadeInUp">Irving's Landscaping is a company that engages in state of the art lawn maintenance and installations, garden maintenance and installations, planting pruning, backyard tiling and beautification to say the least. 
                                We're a company built on the foundation of "Quod factu dignum, dignum est quod nimis facias".
                                We put our heart and soul into every job we do, and such can be seen in our tremendous <a href="gallery.php">portfolio</a></p>
                            <div class="box">
                                <div class="about-box wow fadeInLeft">
                                    <div class="about-box01">
                                        <div class="icon-box01">
                                            <span class="section-heading-jost-size20 icon">01</span>
                                        </div>
                                        <div class="content-box01">
                                            <a href="services.html" class="section-heading-jost-size20 fw-600">Lawns</a>
                                            <p class="section-desc white">We provide:</p>
                                        </div>
                                    </div>
                                    <div class="about-box-list">
                                        <ul class="list-box">
                                            <li> <a href="service-details.html">lawn installion</a></li>
                                            <li> <a href="service-details.html">Lawn mowing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="about-box wow fadeInRight">
                                    <div class="about-box02">
                                        <div class="icon-box02">
                                            <span class="section-heading-jost-size20 icon">02</span>
                                        </div>
                                        <div class="content-box02">
                                            <a href="services.html" class="section-heading-jost-size20 fw-600">Gardening</a>
                                            <p class="section-desc white">We make your garden:</p>
                                        </div>
                                    </div>
                                    <div class="about-box-list2">
                                        <ul class="list-box">
                                            <li> <a href="service-details.html">beautiful and colourful</a></li>
                                            <li> <a href="service-details.html">Neat and tidy</a></li>
                                            <li> <a href="service-details.html">Healthy</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subcribe -->
            <div class="subcribe-about wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subcribe-box">
                                <div class="inner-subcribe-box">
                                    <div class="col-md-5">
                                        <h2 class="heading-subcribe">
                                            Get notified about the event! Subscribe today
                                        </h2>
                                    </div>
                                    <div class="col-md-7">
                                        <form method="post" class="form-subcribe">
                                            <input type="email" name="email" class="input-subcribe"
                                                placeholder="Email Address" required>
                                            <button type="submit" class="btn-subcribe">Subsrcibe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            </div>
        </section>
        <!-- /About 2nd -->

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

        <!-- Contact -->
        <section class="flat-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInUp">
                        <div class="contact-left">
                            <h3 class="section-subtitle">GET IN TOUCH</h3>
                            <h2 class="section-title">Get a quote from us..</h2>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInUp">
                        <div class="contact-right">
                            <form method="post" class="form-contact-right" id="contactform"
                                action="./contact/contact-process.php" accept-charset="utf-8"
                                novalidate="novalidate">
                                <div class="input-row">
                                    <div class="input-name">
                                        <label for="name" class="heading-features">Name (required)</label>
                                        <input id="name" name="name" class="input-contact" type="text"
                                            placeholder="Full Name" required>
                                    </div>
                                    <div class="input-phone">
                                        <label for="phone" class="heading-features">Phone (optional)</label>
                                        <input id="phone" name="phone" class="input-contact" type="text"
                                            placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <div class="input-email">
                                        <label id="email" class="heading-features">Email address (required)</label>
                                        <input type="email" name="email" class="input-contact"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="input-services">
                                        <label for="services" class="heading-features">Services (required)</label>
                                        <select class="input-contact input-select" name="services" id="services">
                                            <option value="0">Choose services</option>
                                            <option value="1">Garden Installation</option>
                                            <option value="2">Garden Maintenance</option>
                                            <option value="3">Lawn Maintenance</option>
                                            <option value="4">Lawn Installation</option>
                                            <option value="5">Pruning Plants</option>
                                            <option value="6">Backyard Tiling</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-message">
                                    <label for="message" class="heading-features">Your message*</label>
                                    <textarea name="message" class="input-contact-message" id="message"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class=" btn btn-left">Send message</button>
                                </div>
                            </form>
                        </div>
                        <div class="contact-address wow fadeInLeft link-style3">
                            <div class="address-box box-1">
                                <span class="contact-location address-icon icon-map"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Address</h3>
                                    <p class="desc-box">8 Centre St, Belleville</p>
                                </div>
                            </div>
                            <div class="address-box box-2">
                                <span class="contact-phone address-icon icon-phone"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Phone</h3>
                                    <p class="desc-box">+1 (630) 970-2255</p>
                                </div>
                            </div>
                            <div class="address-box box-3">
                                <span class="contact-mail address-icon icon-mail"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Email</h3>
                                    <p class="desc-box">info@irvingslandscaping.ca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->

        <!-- blog -->
        <section class="flat-blog-home01">
            <div class="container">
                <div class="row">
                    <div class="section-title-box">
                        <h4 class="section-subtitle  wow fadeInUp">LATEST NEWS</h4>
                        <h2 class="section-title  wow fadeInUp">Our Insights & Articles</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="slide-blog-content">
                            <div class="owl-carousel owl-theme">
                                <div class="item wow fadeInUp">
                                    <div class="blog-item hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box link">
                                            <div class="content-info"><a href="blog.html" class="folder">
                                                    Home Gardening
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Mauris neque nisiibus non elementum
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp">
                                    <div class="blog-item background2 hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box box-2">
                                            <div class="content-info "><a href="blog.html" class="folder folder-2">
                                                    Gardening Ideas
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Quisque suscipit ipsum est, eu venenatis leo
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp">
                                    <div class="blog-item background3 hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box box-3">
                                            <div class="content-info"><a href="blog.html" class="folder folder-3">
                                                    Gardening Ideas
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Maecenas interdum   eleifend orci aliquam
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
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
@endsection