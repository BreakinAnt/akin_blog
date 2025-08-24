<?php
namespace App\Controllers;
use App\Database;
class NoteController extends Controller
{
    public function index()
    {
        $heading = 'Notes';

        $notes = db()->from('notes')->get();

        $this->render('notes/index', compact('heading', 'notes', 'user'));
    }

    public function show($noteId)
    {
        $currentUser = 1;
        $heading = 'Note';

        $note = db()->from('notes')->where('id', '=', $noteId)->getOrFail()[0];
        $user = db()->from('users')->where('id', '=', $note['user_id'])->getOrFail()[0];

        $this->render('notes/show', compact('heading', 'note', 'user'));
    }

    public function create()
    {
        $heading = 'Create Note';
        $this->render('notes/create', compact('heading'));
    }

    public function store()
    {
        db()->insert('notes', [
            'content'      => $_POST['body'],
            'user_id'   => 1
        ]);

        $this->redirect('/notes');
    }
}