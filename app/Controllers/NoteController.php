<?php
namespace App\Controllers;
use App\Database;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $heading = 'Notes';

        $notes = Note::all();

        $this->render('notes/index', compact('heading', 'notes', 'user'));
    }

    public function show($noteId)
    {
        $currentUser = 1;
        $heading = 'Note';

        $note = (new Note())->where('id', $noteId)->first();
        $user = $note->user();

        $this->render('notes/show', compact('heading', 'note', 'user'));
    }

    public function create()
    {
        $heading = 'Create Note';
        $this->render('notes/create', compact('heading'));
    }

    public function store()
    {
        $note = new Note([
            'content'   => $_POST['body'],
            'user_id'   => 1
        ]);
        $note->save();
  
        $this->redirect("/note/$note->id");
    }
}