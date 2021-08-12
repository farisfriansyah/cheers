<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAPI($table)
    {
        return app('App\Http\Controllers\HomeController')->getAPI($table);
    }

    public function index()
    {   
        $events = Self::getAPI('event');
        $promos = Self::getAPI('promo');

        $title = 'Event';
        $description = 'Event yang diselenggarakan Cheers';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/event');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);

        return view('event.index', compact('events','promos'));
    }

    public function view(Request $req)
    {   
        $id     = $req->idx;
        $data   = Self::getAPI('event/view/'.$id);

        foreach ($data as $seoe) {
            $title = $seoe['name'];
            $description = $seoe['description'];

            SEOMeta::setTitle($title);
            SEOMeta::setDescription($description);

            OpenGraph::setTitle($title);
            OpenGraph::setDescription($description);
            OpenGraph::setUrl('https://www.saycheers.com/event/view/'.$id);

            TwitterCard::setTitle($title);
            TwitterCard::setSite('@CheersWater');

            JsonLd::setTitle($title);
            JsonLd::setDescription($description);
        }

        
     
        return view('event.view', compact('data'));
    }

    public function eventCalendar()
    {
        $data = Self::getAPI('event/calendar');
        return json_encode($data);
    }
}
