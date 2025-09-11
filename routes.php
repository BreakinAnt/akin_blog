<?php
use App\Router;

return [
    '/' => Router::get('IndexController@index'),
    '/about' => Router::get('IndexController@about'),
    '/notes' => Router::group(
        Router::get('NoteController@index'),
        Router::post('NoteController@store')
    ),
    '/notes/create' => Router::get('NoteController@create'),
    '/note/{note_id}' => Router::get('NoteController@show'),
    '/post/{post_slug}' => Router::get('PostController@show'),
    '/contact' => Router::get('IndexController@contact')
];