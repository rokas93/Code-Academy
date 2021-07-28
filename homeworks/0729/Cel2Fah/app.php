<?php

function fahrenheitToCelsius($fahValue)
{
    if (is_numeric($fahValue) == true) {
        return ($fahValue - 32) * (5/9);
    }
    return NULL;
}

if (isset($_GET['number'])) {
    if (!empty($_GET['number']) && is_numeric($_GET['number'])) {
        echo 'Rezultatas: ' . round(fahrenheitToCelsius($_GET['number']), 1) . '°C';
    }
}