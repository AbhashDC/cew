@extends('home.layout.layout')
@section('title') Vacancy @endsection

@section('css')
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />
    <!--bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('body')
<!-- Start Cta -->
<section class="section_all bg_buss_cta_img">
  <div class="bg_overlay_cover_on"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center text-white">
            <div class="mt-5">
          <h2 class="cta_heading">S for Secure, S for smart, S for safe</h2>
          <p class="mx-auto cta_details mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

            <a href="#contact" class="btn btn_custom btn-rounded">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Cta -->

<div class="container pb-4 mt-4">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 ">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h1><b>Smart Science Book</b></h1>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4  mb-3 ">
        <img src="images/portfolio/1.jpg" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-md-6  mb-3 mt-5">
          <h5 class="font-weight-bold">Book Delivery & Distribution</h5>
          <p class="mt-3 text-muted mb-0">Books that comes to life when you use the magical pen. They will be delivered to your door steps whereever and whenever you like </p>
<br>
          <h5 class="font-weight-bold">Main focus</h5>
          <p class="mt-3 text-muted mb-0">Books that comes to life when you use the magical pen. They will be delivered to your door steps whereever and whenever you like </p>
        </div>
    </div>


</div>
@endsection

@section('js')
      <!-- JAVASCRIPTS -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
@endsection
