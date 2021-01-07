@foreach($tickets->reverse() as $ticket)
    <tr>
        <td>{{$ticket->id}}</td>
        <td>{{$ticket->name}}</td>
        <td>{{$ticket->info}}</td>
        <td>{{$ticket->price}}</td>
        <td><a class="btn btn-primary" href="{{ url('tickets/'.$ticket->id) }}" > View More</a></td>
    </tr>
@endforeach
