<?php
$config = require('config.php');

$db = new Database($config);

$currentUser = 1;
$heading = 'Note';

$note = $db->from('notes')->where('id', '=', $_GET['id'])->getOrFail()[0];
$user = $db->from('users')->where('id', '=', $note['user_id'])->getOrFail()[0];

if(!$note) {
    abort();
}

authorize($note['user_id'] == $currentUser);

require "views/note.view.php";