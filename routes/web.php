<?php

use Illuminate\Support\Facades\Route;

route :: get ("/", function () {
    return "<h1>hola mundo</h1>";
});

route :: get ("/contacto", function () {
    return "HOLA DESDE LA PAGINA DE CONTACTO";
}); 
