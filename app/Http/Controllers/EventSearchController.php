<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventSearchController extends Controller
{
    public function index()
    {
        return view('event_search.index');
    }

    public function showEvent()
    {
        return view('event_search.show');
    }
}
