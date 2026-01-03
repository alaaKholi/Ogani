<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('website_assets')}}/css/style.css" type="text/css">
</head>

<body>
  

    @include('website.includes.header')

    @yield('content')

   @include('website.includes.footer')

    <!-- Js Plugins -->
    <script src="{{asset('website_assets')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('website_assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('website_assets')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('website_assets')}}/js/jquery-ui.min.js"></script>
    <script src="{{asset('website_assets')}}/js/jquery.slicknav.js"></script>
    <script src="{{asset('website_assets')}}/js/mixitup.min.js"></script>
    <script src="{{asset('website_assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('website_assets')}}/js/main.js"></script>



</body>

</html>