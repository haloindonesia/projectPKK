<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/')}}/vendors/css/extensions/nouislider.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/')}}/css/plugins/extensions/ext-component-sliders.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/')}}/css/pages/app-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets') }}/css/pages/page-auth.css">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('style') }}/main.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('style') }}/cssfooter.css">
    <!-- END: Custom CSS -->
</head>
<body>
    @include('layout.navbar')

    @yield('content')
    @include('layout.footer')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('assets') }}/vendors/js/vendors.min.js"></script>
    <script src="{{ asset ('assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset ('assets') }}/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('assets') }}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset ('assets') }}//vendors/js/extensions/wNumb.min.js"></script>
    <script src="{{ asset ('assets') }}//vendors/js/extensions/nouislider.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('assets') }}/js/core/app-menu.js"></script>
    <script src="{{ asset ('assets') }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset ('assets') }}/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="{{asset('assets')}}/js/scripts/pages/app-ecommerce.js"></script>
    <script src="{{asset('assets')}}/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->
</body>
</html>