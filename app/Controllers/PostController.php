<?php
namespace App\Controllers;

use App\Database;
use App\Models\Post;

class PostController extends Controller
{
     public function show($noteSlug)
    {
        $post = (new Post())->where('slug', $noteSlug)->first();
        $post->user = $post->user();

        $heading = $post->title;
        
        #TODO: Change to increment view count in model save method
        (new Database())->raw("UPDATE posts SET view_count = ? WHERE id = $post->id", [$post->view_count+1]);

        $this->render('posts/show', compact('heading', 'post'));
    }
}