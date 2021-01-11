@extends('layouts.navigation.template-current')
@section('content')
        <div class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Info</th>
                    <th scope="col">Price</th>
                    @if(!empty($performances))
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->info}}</td>
                    <td>{{$ticket->price}}</td>
                    @if(!empty($performances))
                    <td>
                        @foreach($performances as $performance)
                                @foreach($performance as $currentPerformance)
                                    {{$currentPerformance['title']}}
                                    <br>
                                @endforeach
                        @endforeach
                    </td>
                    <td>
                        @foreach($performances as $performance)
                                @foreach($performance as $currentPerformance)
                                    {{$currentPerformance['date']}}
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
