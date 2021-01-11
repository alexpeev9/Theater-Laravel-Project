@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<div id="page" class="row">
				<div id="content">
					<section class="row">
                        @foreach($tickets as $ticket)
                        <div class="d-flex justify-content-center col-3 py-3">
                            <div class="card box-shadow  d-flex bg-danger">
                                <p class="card-text text-white h5 p-2">Type: {{$ticket->name}}</p>
                                <p class="card-text text-white h5 p-2">Info: {{$ticket->info}}</p>
                                <p class="card-text text-white h5 p-2">Price: {{$ticket->price}} $</p>
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <a class="btn btn-white bg-white text-danger" href="{{ url('tickets/'.$ticket->id) }}"> View More</a>
                                </div>
                            </div>
                          </div>
                        @endforeach
					</section>
				</div>
            </div>
        </div>
@endsection

