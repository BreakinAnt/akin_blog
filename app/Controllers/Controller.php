<?php
namespace App\Controllers;
class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../../views/' . $view . '.view.php';
    }

    protected function redirect($url, $data = [])
    {
        extract($data);
        header("Location: $url");
        exit;
    }
}
