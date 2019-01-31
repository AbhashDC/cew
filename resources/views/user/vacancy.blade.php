@extends('user.layout.layout')
@section('content')

    <div class="container pb-4 mt-7">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6 col-offset-3">
                <div class="text-center border border-top-0 border-left-0 border-right-0 border-warning">
                    <h2>TEACHER</h2>
                </div>
            </div>
        </div>
        <div class="row">
                <p class="font-weight-bold">JOB SUMMARY:</p>
            <div class="col-md-12">
                <p>Nodejs Developer develops the project in real by writing codes for the project following company set coding standard to maintain uniformity in the codes and ensure quality of the project.</p>
            </div>

            <p class="font-weight-bold">QUALIFICATIONS & EXPERIENCE:</p>
            <div class="col-md-12">
                <p>Bachelor degree in Computer Engineering/Science. [BE, BTech, BIT, BSc CSIT]
                    Minimum 2 years experience in Node.js Programming</p>
            </div>

            <p class="font-weight-bold">JOB SPECIFICATIONS:</p>
            <div class="col-md-12">
                <p>Expert-level Knowledge of Node.js and frameworks available (eg. Express, StrongLoop, etc.). MEAN stack development would be a plus. <br>
                    Strong knowledge of javascript template engine. <br>
                    Strong proficiency with JavaScript and front end framework like Angular  or vue.js. <br>
                    Good database design and proficient in writing SQL queries. <br>
                    Good knowledge of NoSQL database like Mongodb. <br>
                    Experience in developing applications servicing large transactional system utilizing SQL. <br>
                    HTML, XML, Web Services, HTTP, SOAP, REST.</p>
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
                        <form action="{{route('response')}}" method="POST">
                            @csrf
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

                                <input type="submit" name="submit" class="form-control btn btn-logo-color color-white" value="Submit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>







@endsection
