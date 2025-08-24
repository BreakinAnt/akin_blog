<?php
namespace App\Controllers;

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

    public function contact() 
    {
        $heading = 'Contact Us';
        $this->render('contact', compact('heading'));
    }
}