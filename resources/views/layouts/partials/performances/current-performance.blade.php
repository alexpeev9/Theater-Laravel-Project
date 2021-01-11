@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    @if(!empty($tickets))
                        <th scope="col">Ticket</th>
                    @endif
                    @if(!empty($locations))
                    <th scope="col">Location</th>
                @endif
                </tr>
                </thead>
                <tbody>
                    <td>{{$performance->id}}</td>
                    <td>{{$performance->title}}</td>
                    <td>{{$performance->date}}</td>
                    <td> <img style="width:10rem;10rem" src="{{$performance->image}}" alt="Image"> </td>
                    @if(!empty($tickets))
                    <td>
                        @foreach($tickets as $ticket)
                                @foreach($ticket as $currentTicket)
                                    {{$currentTicket['name']}} : {{$currentTicket['price']}} €
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    @endif
                    {{-- Send Help --}}
                    @if(!empty($locations))
                    <td>
                        @foreach($locations as $location)
                                @foreach($location as $currentLocation)
                                    Name: {{$currentLocation['name']}} City: {{$currentLocation['city']}} Address: {{$currentLocation['address']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    @endif
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </div>
@endsection
