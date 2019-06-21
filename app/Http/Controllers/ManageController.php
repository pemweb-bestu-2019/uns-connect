<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrganization;

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

    public function store(StoreOrganization $request)
    {
        $attributes = $request->validate();

        $attributes['registration_open'] = $request->has('registration_open');

        auth()->user()->organizations()->create($attributes);

        return redirect()->route('manage.owned');
    }
}
