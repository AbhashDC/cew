@extends('user.layout.layout')
@section('content')
    <!--Our services Bootstrap-CARD -->
    <div class="container pb-4 mt-7">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                    <h2>OUR SERVICES</h2>
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
@endsection
