<?php

try {
    require "autoloader.php";

    $config = require('config.php');

    require "helper.php";
    require "Database.php";
    require "Response.php";
    require "Router.php";
    require "RouteServiceProvider.php";

    App\RouteServiceProvider::boot();

    App\abort();
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage();
    throw new Exception($e);
    die();
}


