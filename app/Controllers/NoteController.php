<?php
namespace App\Controllers;

class NoteController extends Controller
{
    public function index()
    {
        $this->notesUnavailable();
    }

    public function show($noteId)
    {
        $this->notesUnavailable();
    }

    public function create()
    {
        $this->notesUnavailable();
    }

    public function store()
    {
        $this->notesUnavailable();
    }

    private function notesUnavailable(): void
    {
        http_response_code(404);
        echo 'Notes interface is no longer available.';
        exit;
    }
}