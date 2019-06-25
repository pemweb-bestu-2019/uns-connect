<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();

        return view('organization.index', compact('organizations'));
    }

    public function showOrganization(Organization $organization)
    {
        return view('organization.show', compact('organization'));
    }

    public function showMembersPage(Organization $organization)
    {
        return view('organization.members', compact('organization'));
    }

    public function showRegistrationPage(Organization $organization)
    {
        # Mengamibl membership di organisasi ini
        $membership = auth()->user()->membership()
            ->where($organization->getKeyName(), $organization->getKey())
            ->first();

        $is_registration = true;

        # Jika organisasi tidak dibuka atau  sudah mempunyai membership di organisasi tersebut
        if ($organization->registration_open == false || $membership) {
            $is_registration = false;
        }

        # Return the model and all data to view
        return view('organization.registration', compact('organization', 'is_registration'))
            ->with('membership', $membership);
    }

    public function showEventsPage(Organization $organization)
    {
        return view('organization.events', compact('organization'));
    }
}
