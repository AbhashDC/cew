@extends('user.layout.layout')
@section('content')

    <!--Google Map embedded-->
    <div class="mapouter mt-6">
        <div class="gmap_canvas">
            <iframe style="width:100%; height:400px;" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=creative%20edutainment&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
        </div>
    </div>


    <!--contact us form-->
    <div class="jumbotron mb-0 negative-margin">
        <div class="container shadow" id="contact">
            <div class="row">
                <div class="col-md-6 col-sm-12 form-color padding-3">
                    @include('user.layout.form')
                </div>
                <div class="col-md-6 col-sm-12 map-color padding-3 color-white">
                    <h3 class="padding-top-details font-weight-bold">OUR CONTACTS</h3>
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

@endsection
