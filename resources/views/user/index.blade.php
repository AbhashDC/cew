@extends('user.layout.layout')
@section('content')
<!--Introduction-->
<div  style="background:linear-gradient(0deg,rgba(35,40,10,0.6),rgba(35,40,10,0.6)), url('{{asset('img/wall.jpg')}}');" class=" mt-6 img-back" id="product">
    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="text-center ">

               <div class="text-left" >
                   <p><h2 class="h1 font-weight-bold">The Great of the greats</h2></p>
                   <p class="changep">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam<br> We are a new publication company bringing to you a new and a fresh outlook at Teaching and and will provide with the best materials that will cater to the same.</p>
                   <button class="btn btn-warning">Our Products</button>
                   <button class="btn btn-warning">Our Services</button>
               </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!--Product Slider -->
<div class=" pb-0 pt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 col-offset-3">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h2>FEATURED PRODUCTS</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row align-items-center">
            <div class="owl-carousel">

                <div class="card" style="width: 100%;">
                    <img src="img/1.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">First Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 100%;">
                    <img src="img/2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Second Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 100%;">
                    <img src="img/3.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Third Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 100%;">
                    <img src="img/3.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fourth Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Our services Bootstrap-CARD -->
<div class="jumbotron">
    <div class="container pb-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-offset-3">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h2>TOP SERVICES</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    </div>
    <div class="row align-items-center pl-1">
        <div class="card col-md-4 col-sm-12 mb-2 " style="width: 22rem;">
            <img src="img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary btn-logo-color">Go somewhere</a>
            </div>
        </div>

        <div class="card col-md-4 col-sm-12 mb-2" style="width: 22rem;">
            <img src="img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary btn-logo-color">Go somewhere</a>
            </div>
        </div>

        <div class="card col-md-4 col-sm-12 mb-2" style="width: 22rem;">
            <img src="img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary btn-logo-color">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
</div>

{{--Our Partner--}}
<div class="container pb-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-offset-3">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h2>OUR PARTNERS</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    </div>
    <div class="row align-items-center  pl-1">
        <div class="col-md-4 col-sm-12 mb-2 ">
            <a class="card p-0" href="#">
                <img src="img/alphabet.png" class="card-img-top img-fluid" alt="...">
            </a>
        </div>

        <div class="col-md-4 col-sm-12 mb-2 ">
            <a class="card p-0" href="#">
                <img src="img/1.jpg" class="card-img-top img-fluid"  alt="...">
            </a>
        </div>

        <div class="col-md-4 col-sm-12 mb-2 ">
            <a class="card p-0" href="#">
                <img src="img/purpleturtle.jpg" class="card-img-top img-fluid"  alt="...">
            </a>
        </div>
    </div>
</div>

<!--contact us form-->
<div class="jumbotron mb-0">
    <div class="container shadow" id="contact">
        <div class="row">
            <div class="col-md-6 col-sm-12 form-color padding-3">
        @include('user.layout.form')
            </div>
            <div class="col-md-6 col-sm-12 map-color padding-3 color-white">
                <h3 class="padding-top-details font-weight-bold">ABOUT US</h3>
                <p class="margin-bottom-1">We are a new publication company bringing to you a new and a fresh outlook at Teaching and and will provide with the best materials that will cater to the same.</p>

                <div class="row">
                    <div class="col-md-12">
                        <i class="fas fa-map-marker-alt margin-right-1 font-default-size margin-bottom-1"></i> Bhatbhateni,Kathmandu
                    </div>
                    <div class="col-md-12">
                        <i class="fas fa-phone margin-right-1 font-default-size margin-bottom-1"></i> +977987654321,+0000023402349
                    </div>
                    <div class="col-md-12">
                        <i class="fas fa-envelope margin-right-1 margin-bottom-3 font-default-size "></i> hr@CreativeEdutainmentWorld.com
                    </div>
                    <div class="col-md-12">
                        <a href="#"><i class="fab fa-facebook font-social-default-size margin-right-1"></i></a>
                        <a href="#"><i class="fab fa-instagram font-social-default-size margin-right-1"></i></a>
                        <a href="#"><i class="fab fa-twitter font-social-default-size margin-right-1"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in font-social-default-size margin-right-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Google Map embedded-->
<div class="mapouter ">
    <div class="gmap_canvas">
        <iframe style="width:100%; height:400px;" id="gmap_canvas"
                src="https://maps.google.com/maps?q=creative%20edutainment&t=&z=17&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
@endsection

@section('owl')
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    },
                    767: {
                        items: 2,
                        nav: true,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    },


                    994: {
                        items: 3,
                        nav: true,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    },
                    1220: {
                        items: 3,
                        nav: true,

                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    },
                    2000: {
                        items: 5,
                        nav: true,

                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    },
                    3000: {
                        items: 8,
                        nav: true,

                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true
                    }
                }
            });
        });
    </script>
    @endsection
