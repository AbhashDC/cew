@extends('home.layout.layouttwo')
@section('css')
   <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylecareer.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />
    <!--bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @endsection
    @section('title') Vacancy @endsection

@section('body')
<div class="container pb-4 mt-7">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 col-offset-3">
            <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                <h2>Teacher</h2>
            </div>
        </div>
    </div>
    <div class="row">
            <p class="font-weight-bold">JOB SUMMARY:</p>
        <div class="col-md-12">
            Due to the retirement of our current Headteacher, the Governors seek to appoint an inspirational and committed leader who has strategic vision and is passionate about promoting the school’s already excellent standards of teaching and learning.
        </div>

        <p class="font-weight-bold">QUALIFICATIONS & EXPERIENCE:</p>
        <div class="col-md-12">
          Masters in English, Maths, Science, Nepali or Social Studies <br>
Minimum having 2 years of experience in related field
        </div>

        <p class="font-weight-bold">JOB SPECIFICATIONS:</p>
        <div class="col-md-12">
          Teacher Trainers will be trained and properly equipped with all resources before area allocation <br>
Teacher Trainers will be expected (in the long run) to conduct training sessions through out the country in their respective subjects that will be relevant to the products and services the company
        </div>
    </div>
</div>


    <!--contact us form-->
    <div class="jumbotron mb-0">
        <div class="container shadow" id="contact">
            <div class="row">

                <div class="col-md-6 col-sm-12 map-color padding-3 color-white">
                    <h3 class="padding-top-details font-weight-bold">Apply Now</h3>
                    <p class="margin-bottom-1">Please provide us your contact detail. Our human resource team will get in touch with you.</p>

                </div>
                <div class="col-md-6 col-sm-12 form-color padding-3">
                    <form action="" method="POST" enctype= "multipart/form-data">

                        <input type="hidden" name="id" value="">
                        <label>
                            <h3><p class="font-weight-bold padding-top-13"></p></h3>
                            <p class="font-weight-bold"></p></label>
                        <div class="form-group">

                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Name.." required>
                        </div>
                        <div class="form-group">

                            <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                                   placeholder="Email.." required>
                        </div>
                        <div class="form-group">

                            <input type="number" name="phone" class="form-control" id="exampleFormControlInput3"
                                   placeholder="Phone Number.." required>
                        </div>
                        <div class="form-group">

                            <input type="file" size="60"name="file"
                                    required>
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="form-control btn btn-logo-color paddingsome color-white" value="Submit">
                        </div>
                    </form>

                </div>
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
