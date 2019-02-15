<!--footer-->
<div class="bg-footer negative-margin color-white footer-padding">
    <div class="container">
        <div classs="row">
            <div class="text-center">
                Copyright &copy  <script>
                    document.write(new Date().getFullYear())
                </script>
                . All rights reserved by Creative Edutainment World Pvt. Ltd.
            </div>
        </div>
    </div>
</div>
<!--JavaScript Links-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<div id="loader"></div>
{{--<script>--}}
    {{--$(window).load(function(){--}}
        {{--$("#loader").fadeOut("slow");--}}
    {{--});--}}
{{--</script>--}}
@yield('owl')
</body>
</html>
