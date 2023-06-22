<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsivo.css') }}">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body id="home">
        <div id="app-site">
            <header-site-component></header-site-component>

            <home-site-component></home-site-component>

            <footer-site-component></footer-site-component>
        </div>

        <!--Botão whatsapp-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://web.whatsapp.com/send?phone=5551984219721&text=Olá+é+da+Hornet+Bier?" target="_blank">
            <div class="btn-whatsapp pulsaDelay"><i class="fab fa-whatsapp"></i></div>
        </a>
        <!--Botão whatsapp-->
     
        <script src="{{ asset('js/site.js') }}"></script>

    </body>
</html>
