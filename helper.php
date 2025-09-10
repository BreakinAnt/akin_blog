<?php

use App\Response;

function dd(...$vars)
{
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
    $file = $backtrace[0]['file'] ?? '';
    $line = $backtrace[0]['line'] ?? '';

    echo '<div style="background:#222;color:#fff;padding:1.2em 1.5em;border-radius:8px;font-size:1.1em;margin:1em 0;">
        <strong style="color:#ffb86c;"><small>Dump at ' . htmlspecialchars($file) . ':' . $line . '</small></strong><br><br>';

    foreach ($vars as $var) {
        echo '<pre style="background:#282c34;color:#fff;padding:1em;border-radius:6px;overflow-x:auto;font-size:1em;">';
        prettyPrint($var);
        echo '</pre>';
    }
    die(1);
}

function prettyPrint($var, $indent = 0)
{
    $indentStr = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $indent);
    if (is_array($var)) {
        echo "<span style=\"color:#7ec699;\">array</span> (<br>";
        foreach ($var as $key => $value) {
            echo $indentStr . "<span style=\"color:#61afef;\">[" . htmlspecialchars($key) . "]</span> =&gt; ";
            prettyPrint($value, $indent + 1);
        }
        echo $indentStr . ")<br>";
    } elseif (is_object($var)) {
        $class = get_class($var);
        echo "<span style=\"color:#e06c75;\">object</span>(<span style=\"color:#d19a66;\">$class</span>) (<br>";
        foreach ((array)$var as $key => $value) {
            echo $indentStr . "<span style=\"color:#61afef;\">[" . htmlspecialchars($key) . "]</span> =&gt; ";
            prettyPrint($value, $indent + 1);
        }
        echo $indentStr . ")<br>";
    } elseif (is_bool($var)) {
        echo '<span style="color:#c678dd;">' . ($var ? 'true' : 'false') . '</span><br>';
    } elseif (is_null($var)) {
        echo '<span style="color:#d19a66;">null</span><br>';
    } elseif (is_string($var)) {
        echo '<span style="color:#98c379;">"' . htmlspecialchars($var) . '"</span><br>';
    } elseif (is_int($var)) {
        echo '<span style="color:#e5c07b;">' . $var . '</span><br>';
    } elseif (is_float($var)) {
        echo '<span style="color:#56b6c2;">' . $var . '</span><br>';
    } else {
        echo htmlspecialchars((string)$var) . "<br>";
    }
}


function urlIs($url, $trueCondition = true, $falseCondition = false) {
    return $url === $_SERVER["REQUEST_URI"] ? $trueCondition : $falseCondition;
}

function abort($code = 404) {
    http_response_code($code);

    #TODO: fix view 404 showing up when no error is happening
    // require "views/errors/$code.php";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(!$condition) {
        abort($status);
    }
}

function trimText($text, $maxLength = 100, $ending = '(...)') {
    if (strlen($text) <= $maxLength) {
        return $text;
    }

    return substr($text, 0, $maxLength - strlen($ending)) . $ending;
}