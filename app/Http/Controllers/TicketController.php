<?php

namespace App\Http\Controllers;

use App\Models\Performance_tickets;
use App\Models\Ticket;
use App\Models\Performance;
use Illuminate\Routing\Controller as BaseController;


class TicketController extends BaseController
{
    public function getall()
    {
        $tickets = Ticket::all();
        return view('layouts/ticket',array('tickets'=>$tickets));
    }
    public function getById($id)
    {
        //Get Current Ticket By Id
        $ticket = Ticket::where('id', $id)
                        ->first();

        //Get Id's of Matching Performances
        $performance_tickets = Performance_tickets::where('ticket_id', $id)
                        ->pluck('performance_id');

        //Link
        $performances = array();
        foreach($performance_tickets as $performance_ticket)
        {
            $performances[] = Performance::all()->where('id', (int)$performance_ticket);
        }
        return view('layouts.partials.tickets.current-ticket', compact('ticket','performance_tickets','performances'));
    }
}
