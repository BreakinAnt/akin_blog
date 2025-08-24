<?php

class Controller
{
    protected $db;

    protected function render($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../views/' . $view . '.view.php';
    }
}
