<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsCalenderController extends Controller
{
    public function index()
    {
        return view('calender.index');
    }
}
