<?php 

// const BASE_PATH = __DIR__.'/../';

try {
    $config = require('config.php');

    require "helper.php";
    require "Database.php";
    require "Response.php";
    require "Router.php";
    require "RouteServiceProvider.php";

    RouteServiceProvider::boot();

    abort();
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage();
    throw new Exception($e);
    die();
}


