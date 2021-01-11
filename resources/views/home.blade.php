@extends('layouts.navigation.template')
@section('content')
        {{-- <div class="container text-white justify-content-center w-50">
                <h1 style="color:darkred;font-size: 3rem">Welcome to Theater Project</h1>
                <h1>Due to Covid Actors will not play in the performances. In their place will be put projectors to broadcast live their performance in priavte theater</h1>
                <img src="{{ ('images/camera.jpg') }}" alt="camera">
        </div> --}}
        <!-- Page Wrapper -->
		<div id="wrapper" class="container">

			<!-- Page Content -->
			<div id="page" class="row">

				<!-- Content Area -->
				<div id="content" class="8u skel-cell-important">

					<!-- Main Content Area -->
					<section>
                        <h2>Welcome to Theater Project</h2>
                        <p class="button p-1">Due to Covid-19 We will be shown already recorded performances to prevent infecting the actors</p>
                        <p><a href="#"><img style="height:30rem" src="{{ ('images/camera.jpg') }}" alt=""></a></p>
						<p style="text-align:justify">Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem.							Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit.
                        <br>
                        Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In hac habitasse platea dictumst. Nullam id ante eget dui vulputate aliquam. Pellentesque erat erat, tincidunt in, eleifend accumsan, malesuada eget, augue. Suspendisse sit amet tellus in eros bibendum condimentum. Vestibulum suscipit volutpat nulla. Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.</p>
					</section>
				</div>

				<!-- Sidebar Area -->
				<div id="sidebar" class="4u">

					<!-- Sidebar Section 2 -->
                    @include('layouts.partials.home.home-performances')

					@include('layouts.partials.home.home-tickets')
				</div>

			</div>
            <!-- Page Content -->
        </div>
@endsection
