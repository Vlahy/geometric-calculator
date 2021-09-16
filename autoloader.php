<?php

function funcToPath($func){
    return str_replace('\\', '/', $func) . '.php';
}

spl_autoload_register(function($class){
    $path = funcToPath($class);

    require __DIR__ . '/src/' . $path;
});
