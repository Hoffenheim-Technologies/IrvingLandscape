@extends('layouts.elements')

@section('content')
<?php $page="store"; ?>
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
                                Welcome to Our Store
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="/">Home</a></span><span class="page-title-content-inner">Store</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- main content -->
        <section class="flat-blog-standard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-wrap">
                        </div>
                        
                        <!-- /.post-wrap -->
                    </div>
                    <!-- /.col-md-8 -->
                    <!-- /.row -->
                </div>
            </div>    <!-- /.container -->
        </section><!-- /flat-blog -->

        <script>
            const load = async () => {
                const API_BASE_URL = '{{ config('app.url') }}/api'
                const response = await fetch(API_BASE_URL + '/items')
                const itemsList = await response.json()
                console.log(itemsList)
                if (itemsList.data.length > 0){
                    months = ['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER']
                    for (let index = 0; index < (Math.floor(itemsList.data.length / 3)) + 1; index++) {
                        $('.post-wrap').append(`<div class="row row-${index + 1}"></div>`)
                        
                    }
                itemsList.data.forEach((item, index) => {
                    date = new Date(item.created_at)
                    
                    $(`.post-wrap > .row-${Math.ceil((index + 1) / 3)}`).append(`
                        <article id="item-${item.id}" class="article-2 col-md-4">
                            <div class="image-box">
                                <div class="image">
                                    <img src="${item.image}" onerror="if (this.src != 'error.jpg') this.src = 'images/blog/close-up-picture-hand-holding-wooden-tray-which-full-pots-plants.jpg';" alt="image">
                                </div>
                                <div class="date-image">
                                    <p>${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="post-content-inner">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="text-decs">
                                                Price: $ ${item.price}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-art">
                                    <a href="blog-detail.html" class="section-heading-jost-size28">
                                        ${item.name}
                                    </a>
                                    <p class="desc-content-box text-decs">
                                        ${item.description}
                                    </p>
                                    </div>
                                </div>

                            </div>
                        </article>
                    `)
                });
                } else {
                    console.log('nothing')
                    $('.post-wrap').append(`
                    <div class="row">
                        <h1 style="color: green;">There are no items at the moment.</h1>
                    </div>`)
                }
            }
            load()
            
        </script>
@endsection