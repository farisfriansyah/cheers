<?php

namespace App\Http\Controllers;

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

        return view('event.index', compact('events','promos'));
    }

    public function view(Request $req)
    {   
        $id     = $req->idx;
        $data   = Self::getAPI('event/view/'.$id);
     
        return view('event.view', compact('data'));
    }

    public function eventCalendar()
    {
        $data = Self::getAPI('event/calendar');
        return json_encode($data);
    }
}
