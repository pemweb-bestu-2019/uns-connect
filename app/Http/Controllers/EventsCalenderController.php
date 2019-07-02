<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsCalenderController extends Controller
{
    public function index()
    {
        return view('calender.index');
    }

    public function handleRequest(Request $request)
    {
        $response = [];

        if ($request->hasAny('start', 'end')) {
            # Get the events for between date
            $events = Event::whereBetween('date_eventday', [$request->input('start'), $request->input('end')])->get();

            foreach ($events as $event) {
                $response[] = [
                    'backgroundColor' => 'rgba(1, 121, 168, .12)',
                    'borderColor' => 'rgb(1, 121, 168)',
                    'start' => $event->date_eventday,
                    'textColor' => 'rgb(1, 121, 168)',
                    'title' => $event->name
                ];
            }
        }

        return response()
            ->json($response);
    }
}
