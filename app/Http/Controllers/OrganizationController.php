<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Organization;
use App\Division;

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
        # Mengambil semua divisi yang ada
        $divisions = Division::all();

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
            ->with('membership', $membership)
            ->with('divisions', $divisions);
    }

    public function showEventsPage(Organization $organization)
    {
        return view('organization.events', compact('organization'));
    }

    public function storRegistration(Request $request, Organization $organization)
    {
        $attributes = $request->validate([
            'division' => 'required|integer|exists:divisions,id_division'
        ]);

        # Mengambil objek divisi
        $division = Division::find($attributes['division']);

        # Mengamibl membership di organisasi ini
        $membership = auth()->user()->membership()
            ->where($organization->getKeyName(), $organization->getKey())
            ->first();

        $is_registration = true;

        # Jika organisasi tidak dibuka atau  sudah mempunyai membership di organisasi tersebut
        if ($organization->registration_open == false || $membership) {
            $is_registration = false;
        }

        if ($is_registration) {
            # Remove division
            unset($attributes['division']);
            # Check if membership rows is any for following user
            $existing_membership = auth()->user()->membership_eloquent;

            $membership_attribures = array_merge($attributes, [
                # Organization ke pair
                $organization->getKeyName() => $organization->getKey(),
                # Get the division key pair
                $division->getKeyName() => $division->getKey(),
                # Set the expiration date
                'date_expired' => Carbon::now()->addYears(1)->format('Y-m-d')
            ]);

            # If membership rows is exists
            if ($existing_membership) {
                # Update the membership
                auth()->user()->membership_eloquent()->update($membership_attribures);
            } else {
                # Not exists
                auth()->user()->membership()->create($membership_attribures);
            }

            # Create invoice
            auth()->user()->membership_invoices()->create([
                # The registration fee
                'price' => $organization->registration_fee,
                # Organization id
                'id_organization' => $organization->getKey(),
                # Current date
                'date' => Carbon::now()->format('Y-m-d')
            ]);

            # Return information
            $request->session()->flash('info', 'Selamat, anda berhasil bergabung dengan organisasi ini!');
        }

        return redirect()->back();
    }

    public function deleteRegistration(Organization $organization)
    {
        auth()->user()->membership()->delete();

        return redirect()
            ->back()
            ->with('error', 'Membership kamu berhasil dicabut.');
    }
}
