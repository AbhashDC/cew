@extends('home.layout.layouttwo')

@section('title')  Creative Edutainment World @endsection
@section('css')

<!-- Icon -->
<link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
<!-- custom fonts -->
<link href="{{asset('blog/fonts/aileron.css')}}" rel="stylesheet">

<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('blog/css/app.css')}}">
<!-- Your CSS -->
<link rel="stylesheet" href="{{asset('blog/css/custom.css')}}">
<!--bootstrap Css-->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
<!-- Custom styles for this template -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/stylecareer.css')}}">
@endsection
@section('body')


<div class="container pb-4 mt-5 pt-5">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 ">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h1><b>Worksheet</b></h1>
            </div>
        </div>
    </div>
<!-- @if(!empty($errors))
<div class="alert alert-danger" role="alert">
There was a error in code
</div>
@endif -->

    <!-- @isset($errors)
    <div class="alert alert-message">
      {{ $errors }}
    </div>
    @endisset -->
    <!-- @if(($errors))

    @endif -->
    <div class="row ">
        <div class="col-md-4  mb-3 ">
        <img src="images/portfolio/1.jpg" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-md-6  mb-3 mt-5">
          <form method="post" action="{{route('code.store')}}" >
              @csrf
            <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input type="text" class="form-control"  placeholder="Arun Singh" name="name">
            </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="arun99@gmail.com"name="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Position</label>
    <input type="text" class="form-control"  placeholder="Principal" name="position">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Code</label>
    <input type="text" class="form-control"  placeholder="A7HY.*Y" name="code">
  </div>

  <button type="submit" class="btn btn-primary btn-logo-color">Submit</button>
</form>
        </div>
    </div>


</div>


@endsection
@section('js')
<!-- JAVASCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection
