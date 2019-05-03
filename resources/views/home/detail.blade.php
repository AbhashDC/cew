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

        <!-- =========== Start of Blog Body ============ -->
        <section class="space-bottom space-top--lg blog-main blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="content">
                            <div class="row mb-5">
                                <div class="col-12 mx-auto text-center">
                                    <img src="{{asset('blog/img/single-blog.jpg')}}" alt="Image" class="rounded">
                                </div>
                            </div>
                            <!-- end of image row -->
                            <div class="row mb-5">
                                <div class="col-12 col-lg-10 mx-auto text-center">
                                    <h1 class="h4-font mb-20">5 Reasons To Choose A Notebook Over A Computer Desktop</h1>
                                    <div class="d-flex mb-10 text-center justify-content-center">
                                        <small class="mr-20">March 20, 2018 <a href="#">business</a></small>
                                        <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James Justin</a></small>
                                    </div>
                                </div>
                            </div>
                            <!-- end of title row -->
                            <div class="row">
                                <div class="col-12 col-lg-9 mx-auto">
                                    <p>Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound with digital quality fifty years ago? Now we routinely download whole albums worth
                                        of music in a couple of minutes to ipods that hold thousands of songs in the space the size of a zippo lighter!</p>
                                    <p>What I wonder is what will we download in the future? We can get degrees on line now, which means that we are actually downloading our future doesn’t it. Sounds kind of funny, but true to say that in the future we will
                                        be downloading our future. Will we download our jobs? I mean more and more people are working at home aren’t they? I could see the next wave of employment back that is unless you were being downloaded by your boss
                                        simultaneously. Weird!</p>
                                    <h5>What Are Some Of The Key Terms of Use For HDCP? </h5>
                                    <p>One key term has to do with the transmission of data to unauthorized receivers. That is, an HDCP protected video source is not allowed to transmit protected content to any receiver that has not be verified to be HDCP
                                        compliant. There is also a restriction on the quality of the content, making sure that the DVD-audio content is equal to or less than CD-audio quality on any non-HDCP digital audio outputs. The licensed operator
                                        also covenants to not use their equipment to produce copies of content, and also to make sure that original content is created within the confines of current content protection requirements. What Type of Devices
                                        Make Use of HDCP? </p>
                                    <blockquote>
                                        "We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most."
                                        <span>— Justin James</span>
                                    </blockquote>
                                    <p>One key term has to do with the transmission of data to unauthorized receivers. That is, an HDCP protected video source is not allowed to transmit protected content to any receiver that has not be verified to be HDCP
                                        compliant. There is also a restriction on the quality of the content, making sure that the DVD-audio content is equal to or less than CD-audio quality on any non-HDCP digital audio outputs. The licensed operator
                                        also covenants to not use their equipment to produce copies of content, and also to make sure that original content is created within the confines of current content protection requirements. What Type of Devices
                                        Make Use of HDCP? </p>

                                    <figure class="text-center">
                                        <img src="{{asset('blog/img/single-blog-2.html')}}" alt="Image">
                                        <figcaption>A brief description of the image</figcaption>
                                    </figure>
                                    <ol>
                                        <li>Here's the first thing
                                            <ul>
                                                <li>Another point</li>
                                                <li>A related point to be made</li>
                                            </ul>
                                        </li>
                                        <li>Second step goes here</li>
                                        <li>Third step is not be forgotton</li>
                                        <li>Here comes the final point</li>
                                    </ol>
                                    <h5>Is HDCP Free? </h5>
                                    <p>No. HDCP requires an authorized license. The license can be obtained through Digital Content Protection, which is a subsidiary of Intel Corporation. Generally, the license can be obtained by filing an application and
                                        paying an annual fee. Once the application is accepted and the user agrees to the terms found in the licensing agreement, the right to make use of HDCP is granted.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of post details -->
                        <div class="py-4"></div>
                        <div class="row bg-color-grey">
                            <div class="col-12">
                                <nav class="navigations">
                                    <ul class="mb-0">
                                        <li class="text-left">
                                            <span class="jump">Previous Post</span>
                                            <a href="#">
                                                <h6 class="h5-font transition-default btn-text-hover">Your Work Is the Only Thing That Matters...</h6>
                                            </a>
                                        </li>
                                        <li class="text-right">
                                            <span class="jump">Next Post</span>
                                            <a href="#">
                                                <h6 class="h5-font transition-default btn-text-hover">Why you learn the most when you feel like...</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- end of navigation -->
                        <div class="py-4"></div>
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto">
                                <div id="comments" class="comments-container">
                                    <div class="comment-title mb-30">
                                        <h5>3 comments on this post.</h5>
                                        <hr>
                                    </div>
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="the-comment mb-40">
                                                <div class="comment-author mb-20">
                                                    <h6 class="h5-font">Adam Johnson</h6>
                                                    <span class="meta">Sep 21, 2017</span>
                                                </div>
                                                <div class="comment-text mb-20">
                                                    <p>Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound with digital quality fifty years ago?</p>
                                                </div>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                            </div>
                                            <ul class="children pl-lg-4 bg-color-grey p-3 mb-40 rounded-default">
                                                <li class="comment">
                                                    <div class="the-comment ">
                                                        <div class="comment-author mb-20">
                                                            <h6 class="h5-font">Admin</h6>
                                                            <span class="meta">Sep 21, 2017</span>
                                                        </div>
                                                        <div class="comment-text mb-20">
                                                            <p>Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound with digital quality fifty years ago?</p>
                                                        </div>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                </li>
                                                <!-- end of reply comment -->
                                            </ul>
                                        </li>
                                        <!-- end of single comment -->
                                        <li class="comment">

                                            <div class="the-comment mb-40">
                                                <div class="comment-author mb-20">
                                                    <h6 class="h5-font">Adam Johnson</h6>
                                                    <span class="meta">Sep 21, 2017</span>
                                                </div>
                                                <div class="comment-text mb-20">
                                                    <p>Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound with digital quality fifty years ago?</p>
                                                </div>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                            </div>
                                        </li>
                                        <!-- single comment end -->
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="py-4"></div>
                        <!-- end of comments area-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto">
                                <div id="respond" class="comment-respond">
                                    <div class="comment-respond-title mb-30">
                                        <h5 class="comment-reply-title">Leave a comment here</h5>
                                        <hr>
                                    </div>
                                    <form class="form comment-form form--sm">
                                        <p class="comment-notes mb-40"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                        <div class="form-row mb-20">
                                            <div class="form-group col-sm-12">
                                                <label class="label-control mb-10" for="name">Your Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="i.e. John Doe">
                                            </div>
                                        </div>
                                        <div class="form-row mb-20">
                                            <div class="form-group col-sm-12">
                                                <label class="label-control mb-10" for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" placeholder="i.e. example@example.com">
                                            </div>
                                        </div>
                                        <div class="form-row mb-20">
                                            <div class="form-group col-sm-12">
                                                <label class="label-control mb-10" for="message">Your comment</label>
                                                <textarea class="form-control" id="message" rows="4" placeholder="i.e. The design is...."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <button type="submit" class="btn btn--bg-primary btn-splash-hover btn-3d-hover"><span class="btn__text">Submit</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end of comments Response area-->
                    </div>
                    <!-- end of main body col -->
                </div>
            </div>
        </section>
        <!-- =========== End of Blog Body ============ -->
        <hr>
        <!-- =========== Start of more post ============ -->
        <section class="space">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-12">
                        <h3 class="h5-font">Related articles</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-60 d-flex">
                        <article class="article article--blog-post card ">
                            <a href="#" class="article__thumbnail">
                                <img class="card-img-top" src="{{asset('blog/img/blog-post-1.jpg')}}" alt="blog-image">
                            </a>
                            <div class="card-body p-4">
                                <div class="d-flex mb-10">
                                    <small class="mr-20">March 20, 2018 </small>
                                </div>
                                <a class="mb-10" href="#">
                                    <h2 class="h6-font btn-text-hover transition-default">For women only your computer usage.</h2>
                                </a>
                                <div class="mb-4">
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James
                                        Justin</a></small>
                            </div>
                        </article>
                        <!-- end of single post -->
                    </div>
                    <!-- end of col -->
                    <div class="col-12 col-md-6 col-lg-4 mb-60 d-flex">
                        <article class="article article--blog-post card ">
                            <a href="#" class="article__thumbnail">
                                <img class="card-img-top" src="{{asset('blog/img/blog-post-2.jpg')}}" alt="blog-image">
                            </a>
                            <div class="card-body p-4">
                                <div class="d-flex mb-10">
                                    <small class="mr-20">March 20, 2018 </small>
                                </div>
                                <a class="mb-10" href="#">
                                    <h2 class="h6-font btn-text-hover transition-default">Linux or windows which is it.</h2>
                                </a>
                                <div class="mb-4">
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James
                                        Justin</a></small>
                            </div>
                        </article>
                        <!-- end of single post -->
                    </div>
                    <!-- end of col -->
                    <div class="col-12 col-md-6 col-lg-4 mb-60 d-flex">
                        <article class="article article--blog-post card ">
                            <a href="#" class="article__thumbnail">
                                <img class="card-img-top" src="{{asset('blog/img/blog-post-3.jpg')}}" alt="blog-image">
                            </a>
                            <div class="card-body p-4">
                                <div class="d-flex mb-10">
                                    <small class="mr-20">March 20, 2018 </small>
                                </div>
                                <a class="mb-10" href="#">
                                    <h2 class="h6-font btn-text-hover transition-default">5 Reasons to choose a notebook over a computer desktop</h2>
                                </a>
                                <div class="mb-4">
                                    <p>Sitting proudly atop M3565 is the two-storey penthouse.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>by <a class="color-light-secondary font-w-700 btn-text-hover transition-default" href="#">James
                                        Justin</a></small>
                            </div>
                        </article>
                        <!-- end of single post -->
                    </div>
                    <!-- end of col -->
                </div>
            </div>
        </section>
        <!-- =========== End of more post ============ -->
@endsection
                      @section('js')
                      <!-- JAVASCRIPTS -->

                      <script src="{{asset('js/jquery.min.js')}}"></script>
                      <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

                    @endsection
