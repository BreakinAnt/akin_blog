<?php

return [
    '/' => Router::get('IndexController@index'),
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/notes/create' => 'controllers/notes-create.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];