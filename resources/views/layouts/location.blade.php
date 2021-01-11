@extends('layouts.navigation.template')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">View More</th>
                </tr>
                </thead>
                <tbody>
                    @include('layouts.partials.locations.all-locations')
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </div>
@endsection
