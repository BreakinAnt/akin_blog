<?php
$config = require('config.php');

$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === "POST") {
    // $db->raw("insert into notes(body, user_id) values(:body, :user_id)", [
    //     'body'      => $_POST['body'],
    //     'user_id'   => 1
    // ]);
    $db->insert('notes', [
        'body'      => $_POST['body'],
        'user_id'   => 1
    ]);
}

$heading = 'Notes';

$notes = $db->from('notes')->get();

require "views/notes.view.php";