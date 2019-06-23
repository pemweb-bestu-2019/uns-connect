<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventSearchController extends Controller
{
    public function index()
    {
        $events = Event::all(['slug', 'name', 'description']);

        return view('event_search.index', compact('events'));
    }

    public function showEvent()
    {
        return view('event_search.show');
    }

    public function registration()
    {
        return view('event_search.registration');
    }
}
