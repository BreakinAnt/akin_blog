<?php
class NoteController extends Controller
{
    public function index()
    {
        $heading = 'Notes';

        $config = require('config.php');

        $db = new Database($config);

        $notes = $db->from('notes')->get();

        $this->render('notes', compact('heading', 'notes', 'user'));
    }

    public function show($noteId)
    {
        $config = require('config.php');

        $db = new Database($config);

        $currentUser = 1;
        $heading = 'Note';

        $note = $db->from('notes')->where('id', '=', $noteId)->getOrFail()[0];
        $user = $db->from('users')->where('id', '=', $note['user_id'])->getOrFail()[0];

        if(!$note) {
            abort();
        }

        authorize($note['user_id'] == $currentUser);

        $this->render('note', compact('heading', 'note', 'user'));
    }
}
// $config = require('config.php');

// $db = new Database($config);

// $currentUser = 1;
// $heading = 'Note';

// $note = $db->from('notes')->where('id', '=', $_GET['id'])->getOrFail()[0];
// $user = $db->from('users')->where('id', '=', $note['user_id'])->getOrFail()[0];

// if(!$note) {
//     abort();
// }

// authorize($note['user_id'] == $currentUser);

// require "views/note.view.php";
###
// $config = require('config.php');

// $db = new Database($config);

// if($_SERVER['REQUEST_METHOD'] === "POST") {
//     // $db->raw("insert into notes(body, user_id) values(:body, :user_id)", [
//     //     'body'      => $_POST['body'],
//     //     'user_id'   => 1
//     // ]);
//     $db->insert('notes', [
//         'body'      => $_POST['body'],
//         'user_id'   => 1
//     ]);
// }

// $heading = 'Notes';

// $notes = $db->from('notes')->get();

// require "views/notes.view.php";