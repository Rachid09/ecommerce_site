<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BigBazar - Multipurpose Ecommerce HTML Template">

    <meta name="author" content="root">
    <title>BigBazar - Multipurpose Ecommerce HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/images/Favicon@3x.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">





    <!--  CSS Style -->
    @yield('bootstrap-css')
    <link rel="stylesheet" href="{{asset("public/css/vendor/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/vendor/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/font/flaticon/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/vendor/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/layerslider.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/template.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/style.css")}}">
    @yield('custom-css')
    <link rel="stylesheet" href="{{asset("public/css/category/cosmetic-store.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/jquery.fancybox.min.css")}}">
   




     <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/selects/select2.min.css")}}>
</head>


<body>
    <div id="page_wrapper" class="bg-white">
        <header class="ecommerce-header">
            @yield('top-header')
            @yield('bottom-header')
            @yield('mobile-header')
            @yield('extra-meta')
        </header>

         @include('client.alerts.success')
         @include('client.alerts.errors')
        @yield('breadcrumb')
        @yield('content')


        @include('client.includes.newsletter')
        @include('client.includes.footer')
    </div>
    <!-- Include Scripts -->
    <script src="{{asset("public/js/vendor/jquery.min.js")}}"></script>
    <script src="{{asset("public/js/vendor/greensock.js")}}"></script>
    <script src="{{asset("public/js/vendor/layerslider.transitions.js")}}"></script>
    <script src="{{asset("public/js/vendor/layerslider.kreaturamedia.jquery.js")}}"></script>
    <script src="{{asset("public/js/vendor/popper.min.js")}}"></script>
    <script src="{{asset("public/js/vendor/bootstrap.min.js")}}"></script>
    <script src="{{asset("public/js/vendor/owl.carousel.min.js")}}"></script>
    <script src="{{asset("public/js/vendor/wow.js")}}"></script>
    <script src="{{asset("public/js/vendor/jquery.countdown.js")}}"></script>
    <script src="{{asset('public/js/vendor/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset("public/js/custom.js")}}"></script>
    <script src="{{asset("public/js/vendor/jquery.fancybox.min.js")}}"></script>
    @yield('notify-js')
    @yield('zoomScript')
    @yield('extra-js')

    <script src="{{asset("public/admin/vendors/js/forms/select/select2.full.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("public/admin/js/scripts/forms/select/form-select2.js")}}" type="text/javascript"></script>
      <script>
        $(document).ready(function() {
            $('#slider').layerSlider({
                sliderVersion: '6.0.0',
                type: 'fullwidth',
                responsiveUnder: 0,
                layersContainer: 1200,
                hideUnder: 0,
                hideOver: 100000,
                skin: 'v6',
                globalBGColor: '#ffffff',
                navStartStop: false,
                skinsPath: 'assets/skins/',
                height: 650
            });
        });
    </script>
</body>

</html>
