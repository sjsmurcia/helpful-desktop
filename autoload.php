<?php

spl_autoload_register(function ($Clase) {
    $archivo = __DIR__ . "/" . str_replace("\\", "/", $Clase) . ".php";
    if (is_file($archivo)) {
        require_once $archivo;
    }
});
