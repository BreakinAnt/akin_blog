<?php 
namespace App\Models;

class Post extends Model {
    public $id, $slug, $title, $description, $content, $date, $hidden, $banner_path, $view_count;
    
}