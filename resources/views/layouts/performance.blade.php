@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<!-- Page Content -->
			<div id="page" class="row">

				<!-- Content Area -->
				<div id="content" class="8u skel-cell-important">
					<!-- Main Content Area -->
					<section>
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
					</section>

				</div>
                <!-- Content Area Ends Here -->
            </div>
        </div>
@endsection
