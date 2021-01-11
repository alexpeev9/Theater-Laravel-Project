<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use App\Models\Location;
use App\Models\Ticket;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    // for home page so that users can see performances,locations,tickets in one place
    public function getAllPerformances()
    {
        $performances = Performance::all();
        $locations = Location::all();
        $tickets = Ticket::all();
        return view('home',compact('performances','locations','tickets'));
    }
}
