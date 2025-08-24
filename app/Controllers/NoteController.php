<?php
namespace App\Controllers;
use App\Database;
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
            \App\abort();
        }

        $this->render('note', compact('heading', 'note', 'user'));
    }
}