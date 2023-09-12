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
        $event1 = new Events;
        $event1->id = 1;
        $event1->name = 'hoi';
        $event1->path = 'https://www.spongebobshop.com/cdn/shop/products/SB-Standees-Spong-2_800x.jpg?v=1603744569';
        $event1->date = '2023-09-12 10:37:54';

        $event2 = new Events;
        $event2->id = 2;
        $event2->name = 'hoi';
        $event2->path = 'https://doubleblindmag.com/wp-content/uploads/2022/10/serpent-worship-psychedelics-SECONDARY.jpg';
        $event2->date = '2023-09-12 10:37:54';


        $latest = new Events;
        $latest->id = 3;
        $latest->name = 'Event 3';
        $latest->path = 'https://images.uesp.net/9/9d/ON-creature-Sepilisk.jpg';
        $latest->date = '2023-09-12 11:01:23';

        $events = array($event1, $event2);
        return view('home', [
            'events' => $events,
            'latest' => $latest,
        ]);
    }

    public function viewSnapshot(int $id) {
        $event = new Events;
        $event->id = $id;
        $event->name = 'hoi';
        $event->path = 'https://www.spongebobshop.com/cdn/shop/products/SB-Standees-Spong-2_800x.jpg?v=1603744569';
        $event->date = '2023-06-25 16:24:29';

        $event1 = new Events;
        $event1->id = 1;
        $event1->name = 'hoi';
        $event1->path = 'https://www.spongebobshop.com/cdn/shop/products/SB-Standees-Spong-2_800x.jpg?v=1603744569';
        $event1->date = '2023-09-12 10:37:54';

        $event2 = new Events;
        $event2->id = 2;
        $event2->name = 'hoi';
        $event2->path = 'https://doubleblindmag.com/wp-content/uploads/2022/10/serpent-worship-psychedelics-SECONDARY.jpg';
        $event2->date = '2023-09-12 10:37:54';
        $events = array($event1, $event2);
        //$event = events::where('id', '=',  $id)->first();
        return view('viewSnapshot', [
            'event' => $event,
            'events' => $events
        ]);
    }
}
