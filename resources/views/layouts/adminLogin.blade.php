
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
 @yield('title')
  <link rel="apple-touch-icon" href={{asset("public/admin/images/ico/apple-icon-120.png")}}>
    <link rel="apple-touch-icon" href="{{asset('public/images/Favicon@3x.png')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/Favicon@3x.png')}}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css"  href={{asset("public/admin/css/vendors.css")}}>
 <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/icheck/icheck.css")}}>
 <link rel="stylesheet" type="text/css" href={{asset("public/admin/vendors/css/forms/icheck/custom.css")}}>
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
      <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/app.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/custom.css")}}>
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/menu/menu-types/vertical-menu-modern.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/core/colors/palette-gradient.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/pages/login-register.css")}}>

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("public/admin/css/style.css")}}>
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->




  @yield('content')








   <!-- BEGIN VENDOR JS-->
    <script src={{asset("public/admin/vendors/js/vendors.min.js")}} type="text/javascript">
    </script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src={{asset("public/admin/vendors/js/forms/icheck/icheck.min.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/vendors/js/forms/validation/jqBootstrapValidation.js")}} type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src={{asset("public/admin/js/core/app-menu.js")}} type="text/javascript"></script>
    <script src={{asset("public/admin/js/core/app.js")}} type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src={{asset('public/admin/js/scripts/forms/form-login-register.js')}} type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>
</html>
