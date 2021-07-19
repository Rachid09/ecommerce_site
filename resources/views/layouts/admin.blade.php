<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="{{asset('public/admin/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/admin/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset("public/admin/fonts/simple-line-icons/style.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/pages/dashboard-ecommerce.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/style.css')}}">















    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/plugins/animate/animate.css")}}>
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/vendors.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/weather-icons/climacons.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/fonts/meteocons/style.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/charts/morris.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/charts/chartist.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/selects/select2.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/charts/chartist-plugin-tooltip.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/toggle/bootstrap-switch.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/toggle/switchery.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/menu/menu-types/vertical-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/pages/chat-application.css")}}>
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/app.css")}}>
    {{-- <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/custom.css")}}> --}}
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/menu/menu-types/vertical-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/colors/palette-gradient.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/fonts/simple-line-icons/style.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/colors/palette-gradient.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/pages/timeline.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/cryptocoins/cryptocoins.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/extensions/datedropper.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/extensions/timedropper.min.css")}}>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/style.css")}}>
    <!-- END Custom CSS-->
  <!-- END Custom CSS-->
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">

@if(Auth::guard('admin')->check())

    @include('admin.includes.header')
    @include('admin.includes.sidebar')

    @yield('content')

    @include('admin.includes.footer')

@elseif(Auth::guard('seller')->check())
    @include('seller.includes.header')
    @include('seller.includes.sidebar')
    @yield('content')
    @include('seller.includes.footer')

@endif





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{asset('public/js/admin.script.js')}}" ></script> --}}
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN VENDOR JS-->


    <!-- BEGIN PAGE VENDOR JS-->
    {{-- <script src={{asset("public/admin/vendors/js/charts/chart.min.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/vendors/js/charts/echarts/echarts.js")}} type="text/javascript"></script>

    <script src={{asset("public/admin/vendors/js/extensions/datedropper.min.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/vendors/js/extensions/timedropper.min.js")}} type="text/javascript"></script>

    {{-- <script src={{asset("public/admin/js/scripts/pages/chat-application.js")}} type="text/javascript"></script> --}}
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    {{-- <script src={{asset("public/admin/js/core/app-menu.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/js/core/app.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/js/scripts/customizer.js")}} type="text/javascript"></script> --}}
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    {{-- <script src={{asset("public/admin/js/scripts/pages/dashboard-crypto.js")}} type="text/javascript"></script> --}}



    <!-- END PAGE LEVEL JS-->



    <!-- BEGIN VENDOR JS-->
    {{-- <script src="{{asset("public/js/bootstrap.min.js.map")}}" type="text/javascript"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('sweetalert-js')
    <script src={{asset("public/admin/vendors/js/vendors.min.js")}} type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('public/admin/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
type="text/javascript"></script>
<script src="{{asset('public/admin/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('public/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('public/admin/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>


<script src="{{asset("public/admin/vendors/js/tables/datatable/datatables.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/tables/datatable/dataTables.buttons.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/js/scripts/tables/datatables/datatable-basic.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/forms/toggle/bootstrap-switch.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/forms/toggle/switchery.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/js/scripts/forms/switch.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/forms/select/select2.full.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/js/scripts/forms/select/form-select2.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/charts/chart.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/charts/echarts/echarts.js")}}" type="text/javascript"></script>

<script src="{{asset("public/admin/js/scripts/extensions/date-time-dropper.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/extensions/datedropper.min.js")}}" type="text/javascript"></script>
<script src="{{asset("public/admin/vendors/js/extensions/timedropper.min.js")}}" type="text/javascript"></script>

    <script src="{{asset("public/admin/vendors/js/forms/icheck/icheck.min.js")}}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="{{asset("public/admin/js/scripts/forms/checkbox-radio.js")}}" type="text/javascript"></script>

    <script src="{{asset("public/admin/js/scripts/modal/components-modal.js")}}" type="text/javascript">
    </script>
    <script src="{{asset("public/admin/vendors/js/forms/icheck/icheck.min.js")}}" type="text/javascript"></script>


<script>
        $('#meridians1').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians2').timeDropper({
            meridians: true,
            setCurrentTime: false

        });
        $('#meridians3').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians4').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians5').timeDropper({
            meridians: true,
            setCurrentTime: false

        });
        $('#meridians6').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians7').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians8').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians9').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians10').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians11').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians12').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians13').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians14').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
    </script>

















</body>

</html>
