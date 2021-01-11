@extends('layouts.navigation.template')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-50 pt-3">
            <table class="table  table-striped table-primary align-middle">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Performance Image</th>
                    <th scope="col">View More</th>
                </tr>
                </thead>
                <tbody>
                    @include('layouts.partials.performances.all-performances')
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{ url('/')}}" > Home</a>
        </div>
    </div>
@endsection
