<?php
namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller
{
     public function show($noteSlug)
    {
        $heading = 'Post';

        $post = (new Post())->where('slug', $noteSlug)->first();

        $this->render('posts/show', compact('heading', 'post'));
    }
}