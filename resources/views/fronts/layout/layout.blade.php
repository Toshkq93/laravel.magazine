<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 | Malias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}" id="content" />

    <link rel="stylesheet" href="{{ asset('fronts/css/front.css') }}">
</head>
<body>

<!-- HEADER-AREA START -->
<header class="header-area">
        @include('fronts.layout.header')
</header>
<!-- HEADER AREA END -->

<!-- START PAGE-CONTENT -->
<section class="page-content">
    @include('fronts.layout.errors')
    @include('fronts.layout.sidebar')
    @yield('content')
</section>
<!-- END HOME-PAGE-CONTENT -->
<!-- FOOTER-AREA START -->
<footer class="footer-area">
    @include('fronts.layout.footer')
</footer>
<!-- FOOTER-AREA END -->
<!-- QUICKVIEW PRODUCT -->
<!-- END QUICKVIEW PRODUCT -->
<script>
    let code = '{{ session('currency.code') }}';
</script>
<script src="{{ asset('fronts/js/front.js') }}"></script>

</body>
</html>
