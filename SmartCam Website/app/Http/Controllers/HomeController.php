<?php

namespace App\Http\Controllers;

use App\Models\events;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function home(): View
    {
        $events = Events::orderBy("id", "DESC")->take(5)->get();
        $latest = $events[0];
        return view('home', [
            'events' => $events,
            'latest' => $latest,
        ]);
    }

    public function viewSnapshot(int $id) {

        $event = events::where('id', '=',  $id)->first();
        $events = Events::orderBy("id", "DESC")->take(5)->get();
        return view('viewSnapshot', [
            'event' => $event,
            'events' => $events
        ]);
    }
}
