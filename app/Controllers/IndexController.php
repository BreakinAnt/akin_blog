<?php
namespace App\Controllers;

use App\Models\Post;

class IndexController extends Controller {
    public function index() 
    {
        $heading = 'Home';
        $posts = (new Post())->where('hidden', 0)->orderBy('date', 'desc')->get();

        $this->render('index', compact('heading', 'posts'));
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