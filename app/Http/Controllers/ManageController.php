<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrganization;
use App\Organization;

class ManageController extends Controller
{
    public function index()
    {
        return view('manage.index');
    }

    public function showCreate()
    {
        $organization = new Organization;

        return view('manage.create')->with(compact('organization'));
    }

    public function showOwned()
    {
        $organizations = auth()->user()->organizations;

        return view('manage.owned', compact('organizations'));
    }

    public function store(StoreOrganization $request)
    {
        $attributes = $request->validated();

        $attributes['registration_open'] = $request->has('registration_open');

        auth()->user()->organizations()->create($attributes);

        return redirect()->route('manage.owned');
    }

    public function update(Organization $organization, StoreOrganization $request)
    {
        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        if ($request->has('delete')) {
            $organization->delete();

            return redirect()
                ->route('manage.owned')
                ->with('info', 'Organisasi berhasil dihapus.');
        }

        $attributes = $request->validated();

        $attributes['registration_open'] = $request->has('registration_open');

        $organization->update($attributes);

        return redirect()
            ->back()
            ->with('success', 'Perubahan berhasil disimpan.');
    }

    public function showOwnedEditPage(Organization $organization)
    {
        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        return view('manage.owned_edit', compact('organization'));
    }
}
