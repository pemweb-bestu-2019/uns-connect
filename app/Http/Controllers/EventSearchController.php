<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventSearchController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('event_search.index', compact('events'));
    }

    public function showEvent(Event $event)
    {
        return view('event_search.show', compact($event));
    }

    public function registration()
    {
        return view('event_search.registration');
    }
}
