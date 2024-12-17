<?php
function dd(...$values) {
    echo '<pre class="bg-black text-white">';
    foreach($values as $v){
        var_dump($v);
    }
    echo "</pre>";

    die();
}

function urlIs($url) {
    return $url === $_SERVER["REQUEST_URI"];
}

function abort($code = 404) {
    http_response_code($code);

    require "views/$code.php";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(!$condition) {
        abort($status);
    }
}