<?php

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/app/';
    if (strncmp($prefix, $class, strlen($prefix)) === 0) {
        $relative_class = substr($class, strlen($prefix));
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});