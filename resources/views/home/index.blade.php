@extends('home.layout.layout')
 @section('title') Creative Edutainment World @endsection

@section('css')
  <!-- Magnific-popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

  <!--Slider Css-->
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">

  <!-- Icon -->
  <link href="{{asset('css/mobiriseicons.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

  <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

  <!--bootstrap Css-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection



@section('body')

  <!-- Home Section Start-->
  <section class="bg_home_landing full_height_100vh_home" id="home">
    <div class="bg_overlay_cover_on opacity_dark"></div>
    <div class="home_table_cell">
      <div class="home_table_cell_center">
        <div class="container position-relative up-index">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">



                <h1 class="home_title text-white mx-auto text-capitalize mb-0"> We Are A <span>Technology</span> Encorporated Company. </h1>
                <div class="home_text_details">
                  <p class="home_subtitle mt-4 mx-auto mb-0">We are a new publication company bringing to you a new and a fresh outlook at Teaching and and will provide with the best materials that will cater to the same.</p>
                </div>

                <!-- <div class="home_btn_manage mt-5">
                  <a href="#" class="btn btn_custom mr-3"><span class="border_text">Get Started</span></a>
                </div> -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End-->

  <!-- About Start -->
  <section class="section_all bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="text-white text-uppercase section_small_title ">About Us</p>
            <h4 class="section-title pt-1">Welcome To Creative Edutainment World</h4>
            <p class="text-muted pt-2 section-subtitle mx-auto">We are a new publication company bringing to you a new and a fresh outlook at Teaching and and will provide with the best materials that will cater to the same.</p>
            <div class="section_subtitle_border mx-auto"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="about_agency text-center mt-3">
            <h3>We're Creative Smart Agency.</h3>
            <p class="text-muted pt-2 text-center mx-auto">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
              believable.</p>

            <p class="text-muted pt-2 mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- Start Cta -->
  <section class="section_all bg_buss_cta_img">
    <div class="bg_overlay_cover_on"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center text-white">
            <h2 class="cta_heading">Become a part of Creative Edu. community today.</h2>
            <p class="mx-auto cta_details mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <div class="mt-5">
              <a href="#contact" class="btn btn_custom btn-rounded">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Cta -->

  <!-- Services Start -->
  <section class="section_all" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="text-white text-uppercase section_small_title">Services</p>
            <h4 class="section-title pt-1">Our exclusive Services</h4>
            <p class="text-muted pt-2 section-subtitle mx-auto">At creative we bring to you some of the necessary working skils needed to your school</p>
            <div class="section_subtitle_border mx-auto"></div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="services_box text-center p-4 mt-3">
            <div class="service_icon">
              <i class="mdi mdi-truck"></i>
            </div>
            <div class="service_content mt-3">
              <h5 class="font-weight-bold">Book Delivery & Distribution</h5>
              <p class="mt-3 text-muted mb-0">Books that comes to life when you use the magical pen. They will be delivered to your door steps whereever and whenever you like </p>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="services_box text-center p-4 mt-3">
            <div class="service_icon">
              <i class="mdi mdi-creation"></i>
            </div>
            <div class="service_content mt-3">
              <h5 class="font-weight-bold">Product Setup</h5>
              <p class="mt-3 text-muted mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="services_box text-center p-4 mt-3">
            <div class="service_icon">
              <i class="mdi mdi-cellphone-link"></i>
            </div>
            <div class="service_content mt-3">
              <h5 class="font-weight-bold">Teacher Training</h5>
              <p class="mt-3 text-muted mb-0">Surely all most of the school out there need better skilled teachers </p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 offset-lg-4">
          <div class="services_box text-center p-4 mt-3">
          <a href="{{route('worksheet')}}">
            <div class="service_icon">
              <i class="mdi mdi-book-open"></i>
            </div>
          </a>
            <div class="service_content mt-3">
              <h5 class="font-weight-bold">Get Worksheets</h5>
              <p class="mt-3 text-muted mb-0">Click on the icon above to get the quote for our worksheet</p>
            </div>

          </div>
        </div>


      </div>

    </div>
  </section>
  <!-- Services End -->



  <!-- Start product -->
  <section class="section_all text-center" id="product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="text-white text-uppercase section_small_title">Products</p>
            <h4 class="section-title pt-1">Some Of Our Popular Products</h4>
            <p class="text-muted pt-2 section-subtitle mx-auto">There are the products most adored by our clients so you may love it too</p>
            <div class="section_subtitle_border mx-auto"></div>
          </div>
        </div>
      </div>

    </div>
    <div class="container-fluid">
      <div class="row mt-5 work-filter">
        <div class="col-lg-3 work_item webdesign wordpress">
          <div class="work_box">
            <a href="{{route('product')}}" >
              <div class="work_img">
                <img src="images/portfolio/1.jpg" alt="" class="img-fluid mx-auto d-block" />
              </div>
            </a>
            <div class="work_detail text-center">
              <h4 class="font-weight-bold">Math</h4>
              <p class="text-muted mb-0">Media, alot of text here is yes ok Icons</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 work_item work webdesign seo">
          <div class="work_box">
            <a href="images/portfolio/2.jpg" class="img-zoom">
              <div class="work_img">
                <img src="images/portfolio/2.jpg" alt="" class="img-fluid mx-auto d-block" />
              </div>
            </a>
            <div class="work_detail text-center">
              <h4 class="font-weight-bold">Nepali</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 work_item seo wordpress">
          <div class="work_box">
            <a href="images/portfolio/3.jpg" class="img-zoom">
              <div class="work_img">
                <img src="images/portfolio/3.jpg" alt="" class="img-fluid mx-auto d-block" />
              </div>
            </a>
            <div class="work_detail text-center">
              <h4 class="font-weight-bold">Social Studies</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 work_item wordpress work webdesign">
          <div class="work_box">
            <a href="images/portfolio/4.jpg" class="img-zoom">
              <div class="work_img">
                <img src="images/portfolio/4.jpg" alt="" class="img-fluid mx-auto d-block" />
              </div>
            </a>
            <div class="work_detail text-center">
              <h4 class="font-weight-bold">Science</h4>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="text-center mt-5">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio -->


  <!-- Blog Start -->
  <section class="section_all bg-light" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="text-white text-uppercase section_small_title">Blog</p>
            <h4 class="section-title pt-1">Our Recent Blog</h4>
            <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="section_subtitle_border mx-auto"></div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="blog_box mt-3">
            <div class="blog_img">
              <img src="images/blog/blog-1.jpg" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="blog_desc_box text-center p-3">
              <p class="label mb-0 mt-3">1 December 2018</p>
              <p class="text_custom blog_author_name mt-3">By <span class="">Tapasya L. Bhetwal</span></p>
              <a href="#" class="text-dark">
                <h5 class="font-weight-bold">There is more to Maths than you know</h5>
              </a>
              <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

              <a href="#" class="text-dark font-weight-bold">
                Learn More
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="blog_box mt-3">
            <div class="blog_img">
              <img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="blog_desc_box text-center p-3">
              <p class="label mb-0 mt-3">10 December 2018</p>
              <p class="text_custom blog_author_name mt-3">By <span class="">Tapasya L. Bhetwal</span></p>
              <a href="#" class="text-dark">
                <h5 class="font-weight-bold">Who doesn't love science?</h5>
              </a>
              <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

              <a href="#" class="text-dark font-weight-bold">
                Learn More
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="blog_box mt-3">
            <div class="blog_img">
              <img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="blog_desc_box text-center p-3">
              <p class="label mb-0 mt-3">12 December 2018</p>
              <p class="text_custom blog_author_name mt-3">By <span class="">Tapasya L. Bhetwal</span></p>
              <a href="#" class="text-dark">
                <h5 class="font-weight-bold">Can we call ourselves social animals?</h5>
              </a>
              <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

              <a href="#" class="text-dark font-weight-bold">
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog End  -->


  <!-- Start Contact Us  -->
  <section class="section_all" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <p class="text-white text-uppercase section_small_title">Contact Us</p>
            <h4 class="section-title pt-1 ">Get in touch</h4>
            <p class="text-muted pt-1 section-subtitle mx-auto">Feel free to drop us a line below. You can message all your queries below</p>
            <div class="section_subtitle_border mx-auto"></div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
            <div class="">
              <p class="mb-0 add_head text_custom">Call Us Now</p>
              <p class="text-muted mb-0 mt-3">+977-14378900</p>
              <p class="text-muted">+977-14378900</p>
            </div>
          </div>

          <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
            <div class="">
              <p class="mb-0 add_head text_custom">Mail Us</p>
              <p class="text-muted mt-3">Support@cew.com.np
                <br> contact@cew.com.np</p>
            </div>
          </div>

          <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
            <div class="">
              <p class="mb-0 add_head text_custom">Visit Us</p>
              <p class="text-muted mt-3">Bishalnagar Margh
                <br> Kathmandu, KTM 44600.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="corp_form_custom bg-white mt-3">
            <form action="{{route('response')}}" method="POST">
    @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group mt-2">
                    <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group mt-2">
                    <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input type="text" class="form-control" name="phone" id="subject" placeholder="Your Number.." required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <textarea name="message" id="comments" rows="6" class="form-control" placeholder="Your message..."></textarea>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-12 text-center">
                  <input type="submit" id="submit" name="send" class="btn btn_custom" value="Send Message">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Us  -->
@endsection

@section('js')
  <!-- JAVASCRIPTS -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!--TESTISLIDER JS-->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/isotope.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/scrollspy.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <!-- Particles Js -->
  <script src="{{asset('js/particles.js')}}"></script>
  <script src="{{asset('js/particles.app.js')}}"></script>

  <script src="{{asset('js/custom.js')}}"></script>
  @endsection
