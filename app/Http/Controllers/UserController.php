<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\StoreMember;

class UserController extends Controller
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
        return view('user.index');
    }

    public function showProfile()
    {
        $member = auth()->user()->member ?? new Member;

        return view('user.profile', compact('member'));
    }

    public function store(StoreMember $request)
    {
        $attributes = $request->validated();

        $userMemberInstance = auth()->user()->member();

        # If user member found
        if (auth()->user()->member) {
            # Update the existing data
            $userMemberInstance->update($attributes);
        } else {
            # Create one
            $userMemberInstance->create($attributes);
        }

        if ($request->has('redirectTo')) {
            # Redirec to target
            return redirect($request->input('redirectTo'));
        }

        return redirect()
            ->back()
            ->with('success', 'Data berhasil disimpan.');
    }
}
