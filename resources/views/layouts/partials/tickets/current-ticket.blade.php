@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow  d-flex bg-danger">
            <p class="card-text text-white h5 p-2">Type: {{$ticket->name}}</p>
            <p class="card-text text-white h5 p-2">Info: {{$ticket->info}} </p>
            <p class="card-text text-white h5 p-2">Price: {{$ticket->price}} $</p>
            @if(!empty($performances))
            <div class="card-text text-white h5 p-2 d-flex">
                Performances:
                @include('layouts.partials.performances.current-performance-performances')
            </div>
            @endif
        </div>
    </div>
@endsection
