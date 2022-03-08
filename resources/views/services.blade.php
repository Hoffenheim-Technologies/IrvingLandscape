@extends('layouts.elements')

@section('content')
<?php $page="services"; ?>

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
                                Services
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Services</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- Our services -->
        <section class="flat-why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="item-three-column mg-bottom-60 wow fadeInLeft">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-1.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                    <a href="landscaping.php">
                                        <h3 class="section-heading-rubik-size20">Landscaping</h3>
                                    </a>
                                    <h6 class="section-desc">Transform your yard from sticks and stones, to a bed of roses</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="landscaping.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-2.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon2 icon-hanging-bot"></span>
                                <div class="content-features">
                                    <a href="pruning.php">
                                        <h3 class="section-heading-rubik-size20">Pruning plants</h3>
                                    </a>
                                    <h6 class="section-desc"> We'd prune your plants symmeterically, and have them looking as healthy and clean as possible.</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="pruning.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInRight">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-3.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon3 icon-spray"></span>
                                <div class="content-features">
                                    <a href="lawn-maintenance.php">
                                        <h3 class="section-heading-rubik-size20">Lawn Maintenance</h3>
                                    </a>
                                    <h6 class="section-desc">We'd provide you with an even and healthy looking lawn.
                                        Want a lawn installed? we'll do that too.</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="lawn-maintenance.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInLeft">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-1.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                    <a href="garden-maintenance.php">
                                        <h3 class="section-heading-rubik-size20">Garden Maintenance</h3>
                                    </a>
                                    <h6 class="section-desc"> We'd install a beautiful and fragrant garden in your yard.
                                        and we'd maintain it too!</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="garden-maintenance.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-2.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon2 icon-hanging-bot"></span>
                                <div class="content-features">
                                    <a href="lawn-installation.php">
                                        <h3 class="section-heading-rubik-size20">Lawn Installation</h3>
                                    </a>
                                    <h6 class="section-desc">Even if your yard is pure dirt, we could install a fully natural lawn for you.</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="lawn-installation.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInRight">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-3.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon3 icon-spray"></span>
                                <div class="content-features">
                                    <a href="tiling.php">
                                        <h3 class="section-heading-rubik-size20">Outdoor Tiling</h3>
                                    </a>
                                    <h6 class="section-desc">Want to beautify your yard with outdoor tiles? we do that too.</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="tiling.php" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="100" data-smobile="100"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Our service -->
@endsection