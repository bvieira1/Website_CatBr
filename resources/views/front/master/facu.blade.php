<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, folow">
    <title>Faculdade a Distância e Pós-graduação a Distância | EAD Unilins </title>

        {!! $head ?? '' !!}

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('front/faculdade/assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('front/faculdade/assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('front/faculdade/assets/images/favicon.png') }}">
    <link rel="manifest" href="{{ url('front/faculdade/assets/images/favicon.png') }}">

    <!-- google fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:400,700') }}" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="{{ url('front/faculdade/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url('front/faculdade/assets/css/carousel.min.css') }}">

</head>

<body>

<div class="socials-float">
    <a href="{{ url('https://www.facebook.com/catbroficial') }}" class="icon-facebook" target="_blank" rel="noopener" title="Curta nossa página no Facebook"></a>

    <a href="{{ url('https://www.instagram.com/catbr.oficial/?hl=pt-br/') }}" class="icon-instagram" target="_blank" rel="noopener" title="Confira nosso instagram"></a>

    <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" class="icon-whatsapp" title="Fale conosco pelo whatsapp" target="_blank" rel="noopener"></a>
</div>

<a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" class="icon-whatsapp float-whatsapp" target="_blank" rel="noopener">
    <span>Faça sua matrícula pelo Whatsapp</span>
</a>
@include('front.faculdade.includes.facuHeader')

@yield('content')

@include('front.faculdade.includes.facuFooter')

<!-- scripts -->
<script src={{ url('front/faculdade/assets/js/jquery.js') }}></script>
<script src={{ url('front/faculdade/assets/js/vendor.js') }}></script>
<script src={{ url('front/faculdade/assets/js/detalhe-curso.js') }}></script>
</body>
</html>
