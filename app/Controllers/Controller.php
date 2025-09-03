<?php
namespace App\Controllers;
class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../../resources/views/' . $view . '.view.php';
    }

    protected function redirect($url, $data = [])
    {
        extract($data);
        header("Location: $url");
        exit;
    }
}
