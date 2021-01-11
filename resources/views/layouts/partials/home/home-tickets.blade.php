<section id="box3">
    <h2>Tickets</h2>
    <ul class="style3">
        @foreach($tickets as $ticket)
        <ul class="style1">
            <li>
                <a href="{{ url('performances/'.$ticket->id) }}">
                    <i class="fa fa-ticket my-2 m-2" aria-hidden="true"></i> {{$ticket->name}} <br> <br>  Info: {{$ticket->info}} <br> <br> Price: {{$ticket->price}} $
                </a>
            </li>
        </ul>
        @endforeach
    </ul>
</section>

