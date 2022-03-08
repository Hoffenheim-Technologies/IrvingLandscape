@extends('layouts.elements')

@section('content')
<?php $page="gallery"; ?>
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
        <div id="gallery">
  
   <img src="images/gallery/gallery1.jpg">
   <img src="images/gallery/gallery2.jpg">
   <img src="images/gallery/gallery3.jpg">
   <img src="images/gallery/gallery4.jpg">
   <img src="images/gallery/gallery5.jpg">
   <img src="images/gallery/gallery6.jpg">
   <img src="images/gallery/gallery7.jpg">
   <img src="images/gallery/gallery8.jpg">
   <img src="images/gallery/gallery9.jpg">
   <img src="images/gallery/gallery10.jpg">
  
  
  </div>
  
  @endsection