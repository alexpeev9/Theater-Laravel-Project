@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<!-- Page Content -->
			<div id="page" class="row">
				<!-- Content Area -->
				<div id="content">
					<!-- Main Content Area -->
					<section class="row">
                        @foreach($performances->reverse() as $performance)
                        <div class="d-flex justify-content-center col-lg-12 col-xl-6 py-3">
                            <div class="card box-shadow  d-flex bg-danger">
                                <img style="width:30rem;height:30rem" src="{{$performance->image}}" alt="Image">
                                <p class="card-text text-white h5 p-2">Title: {{$performance->title}}</p>
                                <p class="card-text text-white h5 p-2">Release Date: {{$performance->date}}</p>
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <a class="btn btn-white bg-white text-danger" href="{{ url('performances/'.$performance->id) }}"> View More</a>
                                </div>
                            </div>
                          </div>
                        @endforeach
					</section>
				</div>
            </div>
        </div>
@endsection
