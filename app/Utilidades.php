<?php

function isCurrentLocation($route)
{
    return request()->routeIs($route) ? 'active' : '';
}
function isCurrentLocationBool($route)
{
    return request()->routeIs($route);
}
