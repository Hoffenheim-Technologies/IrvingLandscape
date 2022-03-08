@extends('layouts.elements')

@section('content')
<?php $page="team"; ?>
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

        <!-- /header -->

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                Team Member
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.php">Home</a></span><span class="page-title-content-inner">Team Members</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->


        <!-- Our team -->
        <section class="flat-team flat-team-page">
            <!-- list team -->
            <div class="container">
                <div class="row">
                    <div class="list-team">
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
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
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color">Michael Irving</h3>
                                    <p class="section-desc-2">Founder & CEO</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
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
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color">Henry</h3>
                                    <p class="section-desc-2"> Labourer </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
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
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color">Steven</h3>
                                    <p class="section-desc-2">Labourer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Our team -->


@endsection