<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Beritan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('stylePortal/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('stylePortal/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   @include('navbar')
    <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
           @yield('content')
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- footer start -->
  @include('footer')
    <!--/ footer end  -->


    <!-- JS here -->
    <script src="{{ asset('stylePortal/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/popper.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/ajax-form.js') }}"></script>
    <script src="{{ asset('stylePortal/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/scrollIt.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/wow.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/plugins.js') }}"></script>
    <script src="{{ asset('stylePortal/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('stylePortal/js/contact.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.form.js') }}"></script>
    <script src="{{ asset('stylePortal/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('stylePortal/js/mail-script.js') }}"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>
</body>

</html>
