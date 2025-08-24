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
}