<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }

    public function showOwned()
    {
        return view('tickets.owned');
    }
}
