@extends('home.layout.layouttwo')
@section('title') Vacancy @endsection
@section('css')
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <!--bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylecareer.css')}}">
@endsection


@section('body')
<div class="container pb-4 mt-7">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 col-offset-3">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h2>VACANCY ALERT</h2>
            </div>
        </div>
    </div>
    @foreach($data as $datas)
    <div class="row border border-top-0 border-left-0 border-right-0 mb-4">
        <div class="col-md-4 offset-md-4">
        {!! $datas->title !!}
        </div>
        <div class="col-md-4 mb-3">
        <a href="{{ route('vacancy', ['id' => $datas->id]) }}" class="btn btn-outline-warning yellow-color">APPLY</a>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('js')
      <!-- JAVASCRIPTS -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection
