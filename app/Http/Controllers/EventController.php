<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
        
    }

    public function index()
    {
        return view('events.index');
        
    }

    public function store(Request $request)
    {
        $evento = new Event();

        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'start'       => 'required',
            'end'         => 'required'
        ]);

        $evento->title       = $request->title;
        $evento->description = $request->description;
        $evento->start       = $request->start;
        $evento->end         = $request->end;

        $evento->save();


    // $evento = Event::create($request->all());
    }

    public function show(Event $evento)
    {
        $evento = Event::all();
        return response()->json($evento);
    }

    public function edit($id){
        $evento = Event::find($id);
        return response()->json($evento);
    }
}
