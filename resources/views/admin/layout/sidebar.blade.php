<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{(Request::segment(2)=='')?'active':''}}">
                <a class="nav-link" href="{{route('response.index')}}">
                    <i class="material-icons">message</i>
                    <p>Response</p>
                </a>
            </li>
            <li class="nav-item {{(Request::segment(2)=='product')?'active':''}}">
                <a class="nav-link" href="{{route('product.index')}}">
                    <i class="material-icons">person</i>
                    <p>Product</p>
                </a>
            </li>
            <li class="nav-item {{(Request::segment(2)=='service')?'active':''}}">
                <a class="nav-link" href="{{route('service.index')}}">
                    <i class="material-icons">layers</i>
                    <p>Service</p>
                </a>
            </li>
            <li class="nav-item {{(Request::segment(2)=='career')?'active':''}}">
                <a class="nav-link" href="{{route('career.index')}}">
                    <i class="material-icons">work</i>
                    <p>Career</p>
                </a>
            </li>
            <li class="nav-item {{(Request::segment(2)=='code')?'active':''}}">
                <a class="nav-link" href="{{route('code.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Worksheet</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
