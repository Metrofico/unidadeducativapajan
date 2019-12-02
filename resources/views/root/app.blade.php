<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Unidad Educativa Paján')</title>
    <!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('/css/inicio.css')}}">
    <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    @yield('linked')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#">
            <img class="logo-unidad-educativa" src="{{asset('pngs/ue_pajan.png')}}" alt="">
            <span class="text-unidad-educativa"><b><b><b>UNIDAD</b></b></b> EDUCATIVA FISCAL PAJÁN</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="nav-icon-toggled">
                <i class="fas fa-bars" style="color:#000; font-size:1.5rem;"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item {{isCurrentLocation('inicio')}}">
                    <div id="inicio" class="nav-link">Inicio <span
                            class="sr-only">(current)</span></div>
                </li>
                <li class="nav-item">
                    <div id="quienes_somos" class="nav-link">¿Quiénes somos?</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reseña historica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Autoridades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades y eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carousel-image" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicadores-->
        <ol class="carousel-indicators">

            <li data-target="#carousel-image" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-image" data-slide-to="1" class="active"></li>
        </ol>
        <!--/.Fin de indicadores-->
        <!--Inicio de slides-->
        <div class="carousel-inner" role="listbox">
            @include("sliders.slider1")
            @include("sliders.slider2")
        </div>
        <!--/.Fin de slides-->
        <!--Controles-->
        <a class="carousel-control-prev" href="#carousel-image" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </a>
        <a class="carousel-control-next" href="#carousel-image" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        <!--/.Controles-->
    </div>
</header>
<main class="text-center py-5 mt-3">
    <div id="root-container">
        @yield('cuerpo')
    </div>
</main>
@include('root.footer')
<!-- No Tocar -->
<!-- Tooltip Bootstrap -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<!-- Carga dinamica de vistas -->
<script>
    AOS.init();
    $('#quienes_somos').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/quienes-somos");
        //$("#root-container").load("/quienes-somos");
    });
    $('#inicio').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/");
        //$("#root-container").load("/quienes-somos");
    });

    function loadView(container, url) {
        if (window.location.pathname !== url) {
            $(container).load(url);
            window.history.pushState("", null, url);
            AOS.refreshHard();
            $('html, body').animate({scrollTop: $('.container').offset().top-120}, 'slow');
        }
    }
</script>
</body>
</html>
