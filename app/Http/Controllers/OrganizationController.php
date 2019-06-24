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

    public function showOrganization()
    {
        return view('organization.show');
    }
}
