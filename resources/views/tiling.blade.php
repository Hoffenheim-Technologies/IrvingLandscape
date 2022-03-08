@extends('layouts.elements')

@section('content')
<?php $page="tiling"; ?>
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
                                Service Details
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Services Details</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <section class="flat-service-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-4">
                       
                        <div class="widget-contact-services-details mg-bottom-25">
                            <div class="sidebar-title mg-bottom-25">
                                <h2 class="section-heading-jost-size28 text-pri2-color">Contact us</h2>
                            </div>
                            <ul class="widget-sidebar-contact-us text-pri2-color section-heading-rubik-size16">
                                <li><span class="icon-author">Ceo:</span><span class="info-contact-us">Michael Irving</span></li>
                                <li><span class="icon-telephone">Tel:</span><span class="info-contact-us">+1 (630) 970-2255</span></li>
                                <li><span class="icon-location">Location:</span><span class="info-contact-us">8 Centre St, Belleville ON K8N 4W5 </span></li>
                                <li><span class="icon-email">Email:</span><span class="info-contact-us">info@irvingslandscaping.ca</span></li>
                            </ul>
                        </div>
                        <div class="services-details-case-studio bd-radius-8">
                            <h3 class="subtitle-case-studio section-heading-rubik-size16">BEST IN THE BIZ</h3>
                            <h2 class="title-case-studio section-heading-jost-size28 text-pri2-color">Irving Landscaping</h2>
                            <p class="section-desc mg-bottom-43">Quality service is a given when working with us.</p>
                            <span><a class="button-services btn-left" href="gallery">View Gallery</a></span><span><a class="button-services btn-right" href="services.php">Other Services</a></span>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-8">
                        <article class="content-service-details">
                            <div class="post-service-details bd-radius-8-image mg-bottom-45">
                                <img src="images/services/smiley-colleagues-having-meeting-office.jpg" alt="imagess">
                            </div>
                            <h2 class="section-heading-jost-size34 text-pri2-color mg-bottom30">The gardening that matters.</h2>
                            <p class="section-desc mg-bottom-20">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                At vero eos et accusam et justo duo dolores et ea</p>
                            <p class="section-desc mg-bottom-40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem</p>
                            <div class="services-item d-flex mg-bottom30">
                                <div class="services-item-left mg-right-15">
                                    <div class="services-box d-flex wow fadeInLeft mg-bottom-45">
                                        <span class="icon-services icon-Group-660 bd-radius-8"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Design brand</h3>
                                            </a>
                                            <p class="section-desc">Lorem available market standard industry Lorem Ipsum dummy.</p>
                                        </div>
                                    </div>
                                    <div class="post-inner-box">
                                        <img src="images/services/medium-shot-woman-holding-plant-pot.jpg" alt="images">
                                    </div>
                                </div>
                                <div class="services-item-right mg-left-15">
                                    <div class="services-box d-flex wow fadeInLeft mg-bottom-45">
                                        <span class="icon-services icon-tele-sale bd-radius-8"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Web develop</h3>
                                            </a>
                                            <p class="section-desc">Lorem available market standard industry Lorem Ipsum dummy.</p>
                                        </div>
                                    </div>
                                    <div class="post-inner-box">
                                        <img src="images/services/box-flowers-green-garden.jpg" alt="images">
                                    </div>
                                </div>
                            </div>

                            


                        </article>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="172" data-mobile="100" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>


@endsection