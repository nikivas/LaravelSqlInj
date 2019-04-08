<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use \App\Note;
use Illuminate\Support\Facades\DB;
class NotesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function index()
    {
        $notes = Auth::user()->Notes;
        return view('/notes/index')->with('notes',$notes);
    }

    public function show(string $id){
        $notes = DB::select('select * from notes where id= '.$id);
        ///dd($note);
        return view('/notes/show')->with('notes',$notes);
    }

    public function create()
    {
        return view('/notes/create');
    }

    public function store(Request $request)
    {
        $rules = ['text' => 'required|string|min:1|'];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            dd($validator);
            return Redirect::to('notes/create')->withErrors($validator);
        }

        Note::create([
            'text' => $request['text'] ,
            'user_id' => Auth::user()['id']
            ]);

        return redirect()->route('notes');
    }

}
