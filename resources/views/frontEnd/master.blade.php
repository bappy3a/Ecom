<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alista - eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS
    ========================= -->
@include('frontEnd._partial_include._stylesheets')

</head>

<body>

@include('frontEnd._partial_include._header')
@yield('content')
@include('frontEnd._partial_include._footer')

@include('frontEnd._partial_include._scripts')
</body>
</html>
