@foreach($tickets as $ticket)
    @foreach($ticket as $currentTicket)
        {{$currentTicket['name']}} : {{$currentTicket['price']}} € <br>
    @endforeach
@endforeach
