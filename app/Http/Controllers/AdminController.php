<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Http\Requests\StoreDivision;

class AdminController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function showDivision()
    {
        $divisions = Division::all();

        return view('admin.division', compact('divisions'));
    }

    public function createDivision()
    {
        $division = new Division;

        return view('admin.division.create', compact('division'));
    }

    public function storeDivision(StoreDivision $division)
    {
        $attributes = $division->validated();

        Division::create($attributes);

        return redirect()
            ->route('admin.division')
            ->with('success', 'Divisi berhasil dibuat.');
    }

    public function showEditDivision(Division $division)
    {
        return view('admin.division.edit', compact('division'));
    }

    public function updateDivision(StoreDivision $request, Division $division)
    {
        $attributes = $request->validated();

        $division->update($attributes);

        return redirect()
            ->back()
            ->with('success', 'Division information has been updated!');
    }

    public function deleteDivision(Division $division)
    {
        $division->delete();

        return redirect()
            ->route('admin.division')
            ->with('success', 'Division has been removed!');
    }
}
