@extends('user.layout.layout')
@section('content')

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
            <a href="{{url('vacancy/'.$datas->id)}}"class="btn btn-outline-warning">APPLY</a>
            </div>
        </div>
        @endforeach
    </div>




@endsection
