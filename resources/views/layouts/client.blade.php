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
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!--  CSS Style -->
    <link rel="stylesheet" href="public/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/css/vendor/animate.min.css">
    <link rel="stylesheet" href="public/font/flaticon/flaticon.css">
    <link rel="stylesheet" href="public/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/layerslider.css">
    <link rel="stylesheet" href="public/css/template.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/handicruft.css">
    <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="public/css/category/minimal.css">
</head>


<body>
    <div id="page_wrapper" class="bg-white">
        <header class="ecommerce-header">
            @include('client.includes.top-header')
            @include('client.includes.center-header')
            @include('client.includes.bottom-header')
            @include('client.includes.mobile-header')
        </header>
        @yield('content')


        @include('client.includes.footer')
    </div>
    <!-- Include Scripts -->
    <script src="public/js/vendor/jquery.min.js"></script>
    <script src="public/js/vendor/greensock.js"></script>
    <script src="public/js/vendor/layerslider.transitions.js"></script>
    <script src="public/js/vendor/layerslider.kreaturamedia.jquery.js"></script>
    <script src="public/js/vendor/popper.min.js"></script>
    <script src="public/js/vendor/bootstrap.min.js"></script>
    <script src="public/js/vendor/owl.carousel.min.js"></script>
    <script src="public/js/vendor/wow.js"></script>
    <script src="public/js/vendor/jquery.countdown.js"></script>
    <script src="public/js/custom.js"></script>

</body>

</html>