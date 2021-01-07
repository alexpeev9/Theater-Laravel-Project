@foreach($locations->reverse() as $location)
    <tr>
        <td>{{$location->id}}</td>
        <td>{{$location->name}}</td>
        <td>{{$location->city}}</td>
        <td>{{$location->address}}</td>
        <td><a class="btn btn-primary" href="{{ url('locations/'.$location->id) }}" > View More</a></td>
    </tr>
@endforeach
