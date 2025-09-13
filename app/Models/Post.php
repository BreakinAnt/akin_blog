<?php 
namespace App\Models;

class Post extends Model {
    public $id, $slug, $title, $description, $content, $date, $hidden, $banner_path, $view_count, $user_id, $user;
    
    public function user(): User
    {
        return $this->belongsTo(User::class)->first();
    }
}