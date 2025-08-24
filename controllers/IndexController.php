<?php
require "Controller.php";

class IndexController extends Controller {
    protected $heading;

    public function __construct() {
        $this->heading = 'Home';
    }

    public function index() 
    {
        $heading = $this->heading;

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