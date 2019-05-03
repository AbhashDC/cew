<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Abhash DC" />
<link rel="icon" href="images/logo.png">
     @yield('css')

    <title> @yield('title')</title>
</head>
<body>


<!-- START NAVBAR -->
<nav class="navbar navbar-expand-md fixed-top custom_nav_menu sticky ">
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand logo" href="index.html">
      <img src="images/whitecew.png" alt="" class="img-fluid logo-light">
      <img src="images/blackcew.png" alt="" class="img-fluid logo-dark">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="mdi mdi-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="#home" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#services" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="#product" class="nav-link">Products</a>
        </li>
        <li class="nav-item">
          <a href="{{route('blog')}}" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li>

        <li class="nav-item">
          <a href="{{route('career')}}" class="nav-link">Career</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<!-- END NAVBAR -->


 @yield('body')



      <!-- Footer Start -->
      <section class="section_all bg_footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer_logo_img ">
                <img src="images/whitecew.png" alt="" class="img-fluid d-block">
              </div>
              <div class="footer_about_detail mt-3">
                <p class="mb-0 mt-3">Bishalnagar Margh
                  <br> Kathmandu, KTM 44600.</p>
                <p class="footer_alt_cpy mb-0 mt-3">2019 &copy; Creative Edutainment World</p>

                <ul class="list-inline footer_social_icon mt-4">
                  <li class="list-inline-item">
                    <a href="#" class="social_icon">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="social_icon">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="social_icon">
                      <i class="mdi mdi-linkedin"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="social_icon">
                      <i class="mdi mdi-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>

            </div>

            <div class="col-lg-3">
              <div class="footer_heading_tag mt-3">
                <h6 class="font-weight-bold text-white">Information</h6>
              </div>
              <div class="footer_links_all mt-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#contact">About Us </a></li>
                  <li><a href="#">Social Media</a></li>
                  <li><a href="#">General Question</a></li>
                  <li><a href="#">Services</a></li>

                </ul>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="footer_heading_tag mt-3">
                <h6 class="font-weight-bold text-white">Products</h6>
              </div>
              <div class="footer_links_all mt-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Nepali Talking Book</a></li>
                  <li><a href="#">Social Studies Talking Book</a></li>
                  <li><a href="#">Science Talking Book</a></li>
                  <li><a href="#">Math Talking Book</a></li>

                </ul>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="footer_heading_tag mt-3">
                <h6 class="font-weight-bold text-white">Services</h6>
              </div>
              <div class="footer_links_all mt-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Teacher Training</a></li>
                  <li><a href="#">Product Setup</a></li>
                  <li><a href="#">Book Delivery & Distribution</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer End  -->

      <!-- JAVASCRIPTS -->
       @yield('js')

    </body>
    </html>
