<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEvent;
use Illuminate\Support\Str;
use App\Event;
use App\Organization;

class TicketController extends Controller
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
        $tickets = auth()->user()->invoices()->with('invoice')->get();

        return view('tickets.index', compact('tickets'));
    }

    public function showOwned()
    {
        $events = auth()->user()->organizationsEvents;

        return view('tickets.owned', compact('events'));
    }

    public function selectOrganization()
    {
        $organizations = auth()->user()->organizations;

        return view('tickets.owned.select', compact('organizations'));
    }

    public function createEvent(Organization $organization)
    {
        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        $event = new Event;

        return view('tickets.owned.create', compact('event', 'organization'));
    }

    public function storeEvent(Organization $organization, StoreEvent $request)
    {
        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        $attributes = $request->validated();

        # slug generator
        $slug = Str::slug($request->name);

        if ($lastOrganization = Event::where('slug', $slug)->orderBy('created_at', 'desc')->first()) {
            # explode the slug to arrays()
            $splitSlug = explode($lastOrganization->slug, '-');
            # get the last element of the array and check if that is numeric
            if (is_numeric($splitSlug[count($splitSlug) - 1])) {
                # set the next numeric records
                $slug .= '-' . ($splitSlug[count($splitSlug) - 1] + 1);
            } else {
                # set numeric record to first
                $slug .= '-1';
            }
        }

        $attributes['slug'] = $slug;
        $attributes['date_eventday'] .= ':00';
        $attributes['date_register_close'] .= ':00';
        $attributes['is_private'] = $request->has('is_private');

        $organization->events()->create($attributes);

        return redirect()
            ->route('tickets.owned')
            ->with('success', 'Event berhasil dibuat.');
    }

    public function update(Event $event, StoreEvent $request)
    {
        if (auth()->user()->isNot($event->organization->owner)) {
            abort(403);
        }

        if ($request->has('delete')) {
            $event->delete();

            return redirect()
                ->route('tickets.owned')
                ->with('info', 'Event berhasil dihapus.');
        }

        $attributes = $request->validated();

        $attributes['date_eventday'] .= ':00';
        $attributes['date_register_close'] .= ':00';
        $attributes['is_private'] = (int)$request->has('is_private');

        $event->update($attributes);

        # check where as the data has been updated
        if (!empty($event->getChanges())) {
            $request->session()->flash('success', 'Perubahan berhasil disimpan.');
        }

        return redirect()
            ->back();
    }

    public function showEventEditPage(Event $event)
    {
        $organization = $event->organization;

        if (auth()->user()->isNot($organization->owner)) {
            abort(403);
        }

        return view('tickets.owned.edit', compact('organization', 'event'));
    }

    public function showReportPage(Event $event)
    {
        return view('tickets.owned.report', compact('event'));
    }
}
