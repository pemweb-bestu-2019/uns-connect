<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMember;
use App\Event;
use App\Member;
use App\InvoiceGuest;
use App\Invoice;

class EventSearchController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('event_search.index', compact('events'));
    }

    public function showEvent(Event $event)
    {
        return view('event_search.show', compact('event'));
    }

    public function registration(Event $event)
    {
        $member = new Member;

        return view('event_search.registration', compact('event', 'member'));
    }

    public function guestRegistrationPost(StoreMember $member, Event $event)
    {
        $attributes = $member->validated();

        $invoice = InvoiceGuest::create($attributes)->invoice()->save(new Invoice([
            'id_event' => $event->getKey()
        ]));

        return redirect()
            ->back()
            ->with('success', 'Anda berhasil membeli tiket dengan id invoice: #' . $invoice->id);
    }
}
