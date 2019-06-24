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
        return view('organization.registration', compact('organization'));
    }

    public function showEventsPage(Organization $organization)
    {
        return view('organization.events', compact('organization'));
    }
}
