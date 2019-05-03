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


<!-- <body class="" data-spy="scroll" data-target="#navbar-nav"> -->
  @section('body')
  

        <!-- =========== Start of Hero ============ -->
        <section class="space-bottom--lg hero hero--dark hidden">
            <div class="background-holder">
                <img src="img/blog-hero.jpg" alt="background-image" class="background-image-holder">
            </div>
            <!-- end of background image -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="position-relative text-center">
                            <div class="hero-content hero-content--center">
                                <h1 class="hero__title">Read from our blogs</h1>
                                <p class="lead hero__description">No one cares about products. People care about ideas. Is a product an idea? Noup. Is a brand? A good one is.</p>
                            </div>
                            <!-- end of content -->
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- =========== End of Hero ============ -->
        <section class="space blog-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7 mb-60 mb-lg-0">
                        <div class="row">
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-1.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">For Women Only Your Computer Usage Could Cost You Your Job</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of col -->
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-2.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">Linux Or Windows Which Is It</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of col -->
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-3.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">5 Reasons To Choose A Notebook Over A Computer Desktop</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of col -->
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-4.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">Addiction When Gambling Becomes A Problem</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of col -->
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-5.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">For Women Only Your Computer Usage Could Cost You Your Job</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of col -->
                            <div class="col-12 mb-60">
                                <article class="article article--blog-post">
                                    <a href="#" class="article__thumbnail mb-30">
                                        <img class="rounded-default" src="img/blog-post-1.jpg" alt="blog-image">
                                    </a>
                                    <div class="d-flex mb-10">
                                        <small class="mr-20">March 20, 2018 </small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                    <a class="mb-10" href="#"><h2 class="h5-font btn-text-hover transition-default">Las Vegas How To Have Non Gambling Related Fun</h2></a>
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse. The master bedroom suite is phenomenally spacious and opens out to a breathtaking plunge pool and bar area that makes the most of its unrivalled position.</p>
                                </article>
                                <!-- end of single post -->
                            </div>
                            <!-- end of post col -->
                        </div>
                        <!-- end of post row -->
                        <div class="pb-20"></div>
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left mr-10"></i>Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next<i class="fa fa-long-arrow-right ml-10"></i></a></li>
                                    </ul>
                                </nav>
                                <!-- end of pagination -->
                            </div>
                            <!-- end of pagination col -->
                        </div>
                        <!-- end of pagination row -->
                    </div>
                    <!-- end of main body col -->
                    <div class="col-12 col-md-8 col-lg-5 col-xl-4 ml-lg-auto">
                        <div class="widget">
                            <h3 class="h5-font mb-30 color-primary">Latest News</h3>
                            <article class="article d-flex align-items-center mb-3">
                                <span class="article__thumbnail mr-20">
                                    <img class="rounded-default" src="img/blog-recent-01.jpg" alt="blog-image">
                                </span>
                                <a class="mb-10" href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">For Women Only Your Computer Usage Could Cost Your Job</p></a>
                            </article>
                            <article class="article d-flex align-items-center mb-3">
                                <span class="article__thumbnail mr-20">
                                    <img class="rounded-default" src="img/blog-recent-02.jpg" alt="blog-image">
                                </span>
                                <a class="mb-10" href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">5 Reasons To Choose A Notebook Over Laptop</p></a>
                            </article>
                            <article class="article d-flex align-items-center mb-3">
                                <span class="article__thumbnail mr-20">
                                    <img class="rounded-default" src="img/blog-recent-03.jpg" alt="blog-image">
                                </span>
                                <a class="mb-10" href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Addiction When Gambling Becomes A Problem</p></a>
                            </article>
                        </div>
                        <!-- end of recent Post -->
                        <hr class="my-5 hr--blod">
                        <div class="widget">
                            <h3 class="h5-font mb-30 color-primary">Category</h3>
                                <a href="#" class="mb-1"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Technology</p></a>
                                <hr>
                                <a href="#" class="mb-1"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Design</p></a>
                                <hr>

                                <a href="#" class="mb-1"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Blockchain</p></a>
                                <hr>

                                <a href="#" class="mb-1"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Application</p></a>
                        </div>
                        <!-- end of category -->
                        <hr class="my-5 hr--blod">
                        <div class="widget">
                            <h3 class="h5-font mb-30 color-primary">Recent Comments</h3>
                            <div class="d-flex flex-column">
                                <small>Admin on</small> <a href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">5 Reasons To Choose A Notebook Over Laptop</p></a>
                            </div>
                            <hr>
                            <div class="d-flex flex-column">
                                <small>Admin on</small> <a href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Addiction When Gambling Becomes A Problem</p></a>
                            </div>
                            <hr>
                            <div class="d-flex flex-column">
                                <small>Admin on</small> <a href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">For Women Only Your Computer Usage Could Cost Your Job</p></a>
                            </div>
                            <hr>
                            <div class="d-flex flex-column">
                                <small>Admin on</small> <a href="#"><p class="color-light-primary font-w-600 btn-text-hover transition-default">Linux Or Windows Which Is It</p></a>
                            </div>
                        </div>
                        <!-- end of recent comment -->
                    </div>
                    <!-- end of sidebar col -->
                </div>
            </div>
        </section>
@endsection
        <!-- =========== Start of Blog Body ============ -->


@section('js')

              <!-- JAVASCRIPTS -->
              <script src="{{asset('js/jquery.min.js')}}"></script>
              <script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection
