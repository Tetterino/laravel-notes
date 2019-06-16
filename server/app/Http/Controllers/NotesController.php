<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function register()
    {
        return view('notes.register');
    }

    public function create(Request $request)
    {
        $note = new \App\Models\Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return redirect('/show');
    }
    public function show() {
         $notes = \App\Models\Note::all();
         return view('notes.show', ['notes' => $notes]);
     }
}
