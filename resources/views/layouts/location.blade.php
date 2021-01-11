@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<!-- Page Content -->
			<div id="page" class="row">
				<!-- Content Area -->
				<div id="content">
					<!-- Main Content Area -->
					<section class="row">
                        @foreach($locations as $loction)
                        <div class="d-flex justify-content-center col-3 py-3">
                            <div class="card box-shadow  d-flex bg-danger">
                                <p class="card-text text-white h5 p-2">Name: {{$loction->name}}</p>
                                <p class="card-text text-white h5 p-2">City: {{$loction->city}}</p>
                                <p class="card-text text-white h5 p-2">Address: {{$loction->address}}</p>
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <a class="btn btn-white bg-white text-danger" href="{{ url('locations/'.$loction->id) }}"> View More</a>
                                </div>
                            </div>
                          </div>
                        @endforeach
					</section>
				</div>
            </div>
        </div>
@endsection

