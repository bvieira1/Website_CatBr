<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('front/assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('front/assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('front/assets/images/favicon.ico') }}">
    <link rel="manifest" href="{{ url('front/assets/images/favicon.ico') }}">

    {!! $head ?? '' !!}

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('front/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url('front/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('front/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('front/assets/css/all.css') }}">
</head>

<body>
<div class="page-wrapper">
    <!-- /.topbar-one -->
    @include('front.cursos.includes.header')

    <!-- /.site-header -->
    @yield('content')
    <!-- /.mailchimp-one -->
   @include('front.cursos.includes.footer')
    <!-- /.site-footer -->

</div>
<!-- template scripts -->
<script src={{ url('front/assets/js/vendor.js') }}></script>
<script src={{ url('front/assets/js/theme.js') }}></script>
<script src={{ url('front/assets/js/all.min.js') }}></script>
@yield('scripts')
</body>

</html>
