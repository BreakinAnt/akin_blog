<?php

use App\Database;
use App\Providers\RouteServiceProvider;

try {
    require "autoloader.php";
    require "helper.php";
    require "Database.php";
    $db = new Database();
    function db() {
        global $db;
        return $db;
    }
    require "Response.php";
    require "Router.php";

    RouteServiceProvider::boot();

    abort();
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage();
    throw new Exception($e);
    die();
}


