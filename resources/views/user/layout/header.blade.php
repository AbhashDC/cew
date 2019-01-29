<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/logoShape16.png"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home | Creative Edutainment World</title>
</head>
<body>
<!--Nav Bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm rounded p-0 ">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logoShape20.png" class="ml-3 d-md-none"><img src="img/logo20.png"
                                                                                                    class="ml-3 d-none d-md-block"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto font-size-1-1">
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('product')}}">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('service')}}">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('contact')}}">Career</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link p-4" href="{{route('contact')}}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
