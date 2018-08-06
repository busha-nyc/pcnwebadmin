<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }
}
