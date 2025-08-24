<?php

return [
    '/' => Router::get('IndexController@index'),
    '/about' => Router::get('IndexController@about'),
    '/notes' => 'controllers/notes.php',
    '/notes/create' => 'controllers/notes-create.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];