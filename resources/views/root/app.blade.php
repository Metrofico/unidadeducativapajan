<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
if (!isset($_SESSION)) {
    session_start();
}
// ESTO ES PARA EN LISTAR LAS RUTAS QUE DESEA TENER EL SLIDER
$GLOBALS['rutas'] = [
    "inicio",
    "quienes-somos"
];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FFA433"/>
    <title>@yield('titulo', 'Unidad Educativa Paján')</title>
    <!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('/css/inicio.css')}}">
    <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    @yield('linked')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <link rel="stylesheet" href="{{asset('lightbox/ekko-lightbox.css')}}">
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
            <ul class="navbar-nav ml-auto mr-5 navbar-uepajan">
                <li id="inicio" class="nav-item">
                    <div class="inicio nav-link">Inicio</div>
                </li>
                <li id="quienes-somos" class="nav-item">
                    <div class="quienes-somos nav-link">¿Quiénes somos?</div>
                </li>
                <li id="reseña-historica" class="nav-item">
                    <div class="reseña-historica nav-link">Reseña histórica</div>
                </li>
                <li id="autoridades" class="nav-item">
                    <div class="autoridades nav-link">Autoridades</div>
                </li>
                <li id="actividades-eventos" class="nav-item">
                    <div class="actividades-eventos nav-link">Actividades y eventos</div>
                </li>
                <li id="contactanos" class="nav-item">
                    <div class="contactanos nav-link">Contacto</div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-slider-root">
        @if(sliderPermitidoEnRuta()=="slider-permitido")
            @include("sliders.rootslider")
        @endif
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
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('lightbox/ekko-lightbox.js')}}"></script>
<!-- MDB core JavaScript -->
<!-- Carga dinamica de vistas -->
<script>
    activeNav(window.location.pathname);
    $(document).ready(function () {
        AOS.init();
        AOS.refresh();
    });
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            onShown: function () {
                $("body").css('overflow', "hidden");
            },
            onHide: function () {
                $("body").css('overflow', "visible");
            }
        });
    });

    // Rutas en base a elementos
    $('.inicio').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/", 1, 1, 1000);
    });
    $('.quienes-somos').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/quienes-somos", 50);
    });
    $('.reseña-historica').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/reseña-historica", 200);
        removeSlider();
    });
    $('.autoridades').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/autoridades", 200);
        removeSlider();
    });
    $('.contactanos').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/contactanos", 200);
        removeSlider();
    });
    $('.actividades-eventos').click((event) => {
        event.preventDefault();
        loadView("#root-container", "/actividades-eventos", 200);
        removeSlider();
    });

    function removeSlider() {
        $("header").css("height", "10%");
        $(".container-slider-root ").empty();
    }

    function updateSlider(url) {
        if (url === "/") {
            url = "/inicio";
        }
        let a = JSON.parse('<?php
            $rutas = $GLOBALS["rutas"];
            echo json_encode($rutas); ?>');
        a.forEach(e => {
            let urlsub = url.substring(1, url.length);
            if (e === urlsub) {
                let c = $(".container-slider-root");
                if (c.children().length === 0) {
                    $("header").css("height", "100%");
                    c.load("/slider");

                }
            }
        });
    }

    function activeNav(url) {
        url = decodeURI(url);
        if (url === "/") {
            url = "/inicio";
        }
        $(".navbar-uepajan").find("li").each(function () {
            let element = $(this);
            let urlsub = url.substring(1, url.length);
            if (element.attr("id") === urlsub) {
                element.addClass("active");
            } else {
                element.removeClass("active");
            }

        });
    }

    function loadView(container, url, presicion = 120, top = 0, time = 1300) {
        let pathname = decodeURI(window.location.pathname);
        console.log("path: " + pathname + " variable: " + url);
        if (pathname !== url) {
            activeNav(url);
            updateSlider(url);
            if (!$(this).hasClass('dropdown-toggle')) {
                $('.navbar-collapse').collapse('hide');
            }
            $(container).load(url, function () {
                window.history.pushState("", null, url);
                if (presicion !== 0) {
                    $('.replacer-root').ready(function () {
                        $(document).ready(function () {
                            $('body, html').animate({
                                easing: "swing",
                                queue: false,
                                overrideOverflow: "hidden",
                                scrollTop: top === 1 ? top : $('.container').offset().top - presicion
                            }, time);
                        });
                    });
                }
            });
        }
    }
</script>
</body>
</html>
