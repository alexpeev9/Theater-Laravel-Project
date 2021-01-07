<?php

namespace App\Http\Controllers;

use App\Models\Performance_tickets;
use App\Models\Performance_locations;
use App\Models\Performance;
use App\Models\Location;
use App\Models\Ticket;
use Illuminate\Routing\Controller as BaseController;


class PerformanceController extends BaseController
{
    public function getall()
    {
        $performances = Performance::all();
        return view('layouts/performance',array('performances'=>$performances));
    }
    public function getById($id)
    {
        //Get Current Location By Id
        $performance = Performance::where('id', $id)
                        ->first();


        //////////////TICKETS

        //Get Id's of Matching Tickets
        $performance_tickets = Performance_tickets::where('performance_id', $id)
                        ->pluck('ticket_id');

        //Link
        $tickets = array();
        foreach($performance_tickets as $performance_ticket)
        {
        $tickets[] = Ticket::all()->where('id', (int)$performance_ticket);
        }

        ////////////////////Locations

        //Get Id's of Matching Tickets
        $performance_locations = Performance_locations::where('performance_id', $id)
                        ->pluck('location_id');

        //Link
        $locations = array();
        foreach($performance_locations as $performance_location)
        {
        $locations[] = Location::all()->where('id', (int)$performance_location);
        }

        return view('layouts.partials.performances.current-performance', compact('performance','tickets','locations'));
    }
}
