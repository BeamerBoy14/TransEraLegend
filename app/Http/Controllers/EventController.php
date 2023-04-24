<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        $data = [];

        foreach ($events as $event) {
            $data[] = [
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date
            ];
        }

        return response()->json($data);
    }
}
