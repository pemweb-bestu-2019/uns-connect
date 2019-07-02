<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StoreMember;
use App\Event;
use App\Member;
use App\InvoiceGuest;
use App\InvoiceUser;
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

        $invoice = null;
        $registrationClosed = false;
        $isCannotBecausePrivate = true;

        # Jika event adalah private
        if ($event->is_private == true) {
            if (auth()->check() && auth()->user()->memberships->contains('id_organization', $event->id_organization)) {
                $isCannotBecausePrivate = false;
            }
        } else {
            $isCannotBecausePrivate = false;
        }

        # If current user is authenticated
        if (auth()->check()) {
            # Get the current invoice for this event for this user
            $invoices_invoices = auth()->user()->invoices()->with('invoice')->get();
            if (!empty($invoices_invoices)) {
                # Looping all invoices
                foreach ($invoices_invoices as $invoices_invoice) {
                    # Check if invoice is current event
                    if ($invoices_invoice->invoice->id_event == $event->id_event) {
                        $invoice = $invoices_invoice;

                        $isCannotBecausePrivate = false;

                        break;
                    }
                }
            }
        }

        if ($event->date_register_close->timestamp < Carbon::now()->timestamp) {
            $registrationClosed = true;
        }

        return view('event_search.registration', compact('event', 'member', 'invoice'))
            ->with('registrationClosed', $registrationClosed)
            ->with('isCannotBecausePrivate', $isCannotBecausePrivate);
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

    public function registrationPost(Request $request, Event $event)
    {
        $attributes = $request->validate([
            'submit' => 'required'
        ]);

        $invoice = InvoiceUser::create(['id_user' => auth()->user()->getKey()])->invoice()->save(new Invoice([
            'id_event' => $event->getKey()
        ]));

        return redirect()
            ->back()
            ->with('success', 'Anda berhasil membeli tiket dengan id invoice: #' . $invoice->id);
    }

    public function map(Event $event)
    {
        $isMapAvailable = (!empty($event->lat) && !empty($event->long));

        return view('event_search.map', compact('event'))
            ->with('isMapAvailable', $isMapAvailable);
    }
}
