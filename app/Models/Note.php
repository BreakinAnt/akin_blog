<?php
namespace App\Models;

class Note extends Model {
    protected $table = 'notes';
    public $id, $content, $user_id;

    public function user(): User
    {
        return $this->belongsTo(User::class);
    }
}