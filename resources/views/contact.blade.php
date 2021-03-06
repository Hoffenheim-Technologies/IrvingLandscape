@extends('layouts.elements')

@section('content')
<?php $page="contact"; ?>
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
                                Contact
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Contact</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->


        <!-- Contact -->
        <section class="flat-contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInUp">
                        <div class="contact-left">
                            <h3 class="section-subtitle mg-bottom-22">GET IN TOUCH</h3>
                            <h2 class="section-title mg-bottom-15">Get a quote from us....</h2>
                            <p class="section-desc mg-bottom-60">Contact us and we'd try to get back to you as soon as possible. </p>
                            <div class="address-box mg-bottom30">
                                <div class="contact-location icon-map"></div>
                                <div class="info text-pri2-color">
                                        <h3 class="section-heading-jost-size20">
                                            Our Address</h3>
                                    <p class="desc-box text-pri2-color">8 Centre St, Belleville</p>
                                </div>
                            </div>
                            <div class="address-box mg-bottom30">
                                <div class="contact-phone icon-phone"></div>
                                <div class="info text-pri2-color">
                                        <h3 class="section-heading-jost-size20">
                                            Our Phone</h3>
                                    <p class="desc-box text-pri2-color">+1 (630) 970-2255</p>
                                </div>
                            </div>
                            <div class="address-box">
                                <div class="contact-mail icon-mail"></div>
                                <div class="info text-pri2-color">
                                        <h3 class="section-heading-jost-size20">
                                            Our Email</h3>
                                    <p class="desc-box text-pri2-color">info@irvingslandscaping.ca</p>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7 wow fadeInUp">
                        <div class="contact-right">
                            <form method="post" class="form-contact-right" id="contactform" action="./contact/contact-process.php" accept-charset="utf-8" novalidate="novalidate">
                                <div class="input-row">
                                    <div class="input-name">
                                        <label for="name" class="heading-features">Name (required)</label>
                                        <input id="name" name="name" class="input-contact" type="text" placeholder="Full Name" required>
                                    </div>
                                    <div class="input-phone">
                                        <label for="phone" class="heading-features">Phone (optional)</label>
                                        <input id="phone" name="phone" class="input-contact" type="text" placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <div class="input-email">
                                        <label id="email" class="heading-features">Email address (required)</label>
                                        <input type="email" name="email" class="input-contact" placeholder="Email Address" required>
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
                                    <textarea name="message" class="input-contact-message" id="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class=" btn btn-left">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection