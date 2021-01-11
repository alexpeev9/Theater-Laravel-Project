@extends('layouts.navigation.template')
@section('content')
<head>

</head>
<div id="wrapper" class="container">
    <div id="page" class="row">
        <div id="content" class="8u skel-cell-important">
            <div class="offset-4">
                <div>
                    <button id="buttonTitle" class="active" onclick="showTitle()">Title of Performance</button>
                    <button id="buttonDate" class="element" onclick="showDate()">Date</button>
                    <button id="buttonLocation" class="element" onclick="showLocation()">Location</button>
                </div>
                <div class="searchWrapper" id="searchTitle">
                    <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-start">
                        <input class="input-group-text d-inline bgRed" style="width: 40rem" type="text" name="search-title" placeholder="Title:" required/>
                        <button  class="btn textRed my-3" type="submit" >Search by Title</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchDate" style="display: none">
                    <form action="{{ route('search-date') }}" method="GET" class="d-inline align-items-start">
                        <input class="input-group-text d-inline bgRed" style="width: 40rem" type="date" name="search-date" required/>
                        <button  class="btn textRed my-3" type="submit" >Search by Date</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchLocation" style="display: none">
                    @foreach($locations as $location)
                        <a class="locationButton" href="{{ url('locations/'.$location->id) }}" > {{$location->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
</div>
    <script>
        // show next step and hides current
        function showTitle(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#eeeeee";
            document.getElementById("buttonDate").style.backgroundColor = "#F62A2A";
            document.getElementById("buttonLocation").style.backgroundColor = "#F62A2A";

            //hide others and show only title
            document.getElementById("searchTitle").style.display = "block";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchLocation").style.display = "none";
        }
        function showDate(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#F62A2A";
            document.getElementById("buttonDate").style.backgroundColor = "#eeeeee";
            document.getElementById("buttonLocation").style.backgroundColor = "#F62A2A";

            //hide others and show only date
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "block";
            document.getElementById("searchLocation").style.display = "none";
        }
        function showLocation(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = " #F62A2A";
            document.getElementById("buttonDate").style.backgroundColor = " #F62A2A";
            document.getElementById("buttonLocation").style.backgroundColor = "#eeeeee";

            //hide others and show only location
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchLocation").style.display = "block";
        }
    </script>
@endsection
