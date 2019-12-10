<?php

function isCurrentLocation($route)
{
    return request()->routeIs($route) ? 'active' : '';
}

function isCurrentLocationBool($route)
{
    return request()->routeIs($route);
}


function checkvariable($v){
    echo $v;
}
function sliderPermitidoEnRuta()
{
    $rutas = $GLOBALS["rutas"];
    foreach ($rutas as $ruta) {
        if (request()->routeIs($ruta)) {
            return "slider-permitido";
        }
    }
    return "";
}
