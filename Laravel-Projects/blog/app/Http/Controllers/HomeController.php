<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page = 'Home';
        return view('home')
        ->with('page',$page)
        ->with('notes',Note::all());

    }


    public function save(Request $request){
        $request->validate([
            'note' => 'required|string|max:255'
        ]);
        Note::create([
            'note' => $request->note   
            
           // Note = model,
            // create = method to create a new record in the database,
            // 'note' = column name in the database,
            // $request->note = value from the request object that contains the data submitted by the user.
            //$request->note > note is the input field name in the form
        ]);
        return redirect()->back()->with('success','Note saved successfully!');
    }
    function edit($id){
        $page = 'Edit Note';
        $note = Note::findOrFail($id);
        return view('edit')
        ->with('page',$page)
        ->with('note',$note);
    }
    function update(Request $request,$id){
        $request->validate([
            'note' => 'required|string|max:255'
        ]);
        $note = Note::findOrFail($id);
        $note->note = $request->note;
        $note->save();
        return redirect('/')->with('success','Note updated successfully!');     
    }
    function delete($id){
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect('/')->with('success','Note deleted successfully!');
    }
}
    