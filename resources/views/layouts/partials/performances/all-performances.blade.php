@foreach($performances->reverse() as $performance)
    <tr>
        <td>{{$performance->id}}</td>
        <td>{{$performance->title}}</td>
        <td>{{$performance->date}}</td>
        <td> <img style="width:10rem;10rem" src="{{$performance->image}}" alt="Image"> </td>
        <td><a class="btn btn-primary" href="{{ url('performances/'.$performance->id) }}" > View More</a></td>
    </tr>
@endforeach
