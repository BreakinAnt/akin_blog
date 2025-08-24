<?php

return [
    '/' => Router::get('IndexController@index'),
    '/{test}/{testa}' => Router::get('IndexController@test'),
    '/about' => Router::get('IndexController@about'),
    '/notes' => 'controllers/notes.php',
    '/notes/create' => 'controllers/notes-create.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];