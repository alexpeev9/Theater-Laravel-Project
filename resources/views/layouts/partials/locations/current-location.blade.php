@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow  d-flex bg-danger">
            <p class="card-text text-white h5 p-2">Name: {{$location->name}}</p>
            <p class="card-text text-white h5 p-2">City: {{$location->city}}</p>
            <p class="card-text text-white h5 p-2">Address: {{$location->address}}</p>
            @if(!empty($performances))
            <p class="card-text text-white h5 p-2">
                <div class="card-text text-white h5 p-2 d-flex">
                    Performances:
                    @include('layouts.partials.performances.current-performance-performances')
                </div>
            @endif
        </div>
    </div>
@endsection
