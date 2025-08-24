<?php
require "Controller.php";

class IndexController extends Controller {
    public function index() 
    {
        $heading = 'Home';

        $this->render('index', compact('heading'));
    }

    public function about() 
    {
        $heading = 'About Us';

        $this->render('about', compact('heading'));
    }

    public function test($test, $testa) 
    {
        dd($test, $testa);
        $this->index();
    }
}