<link rel="stylesheet" href="{{asset('css/slider.css')}}">
<div id="carousel-image" class="carousel-div carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
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
