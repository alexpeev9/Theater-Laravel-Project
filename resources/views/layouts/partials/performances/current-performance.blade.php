@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow  d-flex bg-danger">
            <img style="width:30rem;height:25rem" src="{{$performance->image}}" alt="Image">
            <p class="card-text text-white h5 p-2">Title: {{$performance->title}}</p>
            <p class="card-text text-white h5 p-2">Release Date: {{$performance->date}}</p>
            @if(!empty($locations))
            <p class="card-text text-white h5 p-2">
                Location:
                <br>
                @include('layouts.partials.performances.current-performance-locations')
            </p>
            @endif
            @if(!empty($tickets))
            <p class="card-text text-white h5 p-2">
                Tickets:
                <br>
                @include('layouts.partials.performances.current-performance-tickets')
            </p>
            @endif
        </div>
    </div>
@endsection
