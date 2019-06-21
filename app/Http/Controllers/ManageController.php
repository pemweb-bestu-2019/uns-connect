<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        return view('manage.index');
    }

    public function showCreate()
    {
        return view('manage.create');
    }

    public function showOwned()
    {
        return view('manage.owned');
    }
}
