<?php
use App\Router;

return [
    '/' => Router::get('IndexController@index'),
    '/about' => Router::get('IndexController@about'),
    '/notes' => Router::get('NoteController@index'),
    '/notes/create' => 'controllers/notes-create.php',
    '/note/{note_id}' => Router::get('NoteController@show'),
    '/contact' => Router::get('IndexController@contact')
];