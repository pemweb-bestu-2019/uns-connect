<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrganization;
use App\Organization;

class OrgsController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $memberships = auth()->user()->memberships;

        return view('orgs.index', compact('memberships'));
    }

    public function showCreate()
    {
        $organization = new Organization;

        return view('orgs.create')->with(compact('organization'));
    }

    public function showOwned()
    {
        $organizations = auth()->user()->organizations;

        return view('orgs.owned', compact('organizations'));
    }

    public function store(StoreOrganization $request)
    {
        $attributes = $request->validated();

        $attributes['registration_open'] = $request->has('registration_open');

        auth()->user()->organizations()->create($attributes);

        return redirect()
            ->route('orgs.owned')
            ->with('success', 'Organisasi berhasil dibuat.');
    }

    public function update(Organization $organization, StoreOrganization $request)
    {
        $this->checkOwned($organization);

        if ($request->has('delete')) {
            $organization->delete();

            return redirect()
                ->route('orgs.owned')
                ->with('info', 'Organisasi berhasil dihapus.');
        }

        $attributes = $request->validated();

        $attributes['registration_open'] = (int)$request->has('registration_open');

        $organization->update($attributes);

        # check where as the data has been updated
        if (!empty($organization->getChanges())) {
            $request->session()->flash('success', 'Perubahan berhasil disimpan.');
        }

        return redirect()
            ->back();
    }

    public function showOwnedEditPage(Organization $organization)
    {
        $this->checkOwned($organization);

        return view('orgs.owned.edit', compact('organization'));
    }

    public function showOwnedReportPage(Organization $organization)
    {
        $this->checkOwned($organization);

        return view('orgs.owned.report', compact('organization'));
    }

    /**
     * Helper method to check where as
     * the organizationis owned by user
     *
     * @param Organization $organization
     * @return void
     */
    private function checkOwned(Organization $organization) {
        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        return;
    }
}
